<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // Untuk visitor (halaman utama)
    public function index()
    {
        $categories = ProductCategory::with('children')->whereNull('parent_id')->get();
        $selectedCategory = request('category', null);
        $products = Product::when($selectedCategory, function ($query, $selectedCategory) {
            $query->where('category_id', $selectedCategory)
                ->orWhereHas('category.parent', function ($q) use ($selectedCategory) {
                    $q->where('id', $selectedCategory);
                });
        })->get();

        return view('pages.products.index', compact('categories', 'selectedCategory', 'products'));
    }


    // Untuk admin (list semua data produk)
    public function list()
    {
        $categories = ProductCategory::with('children')->get();
        $products = Product::with('category')->paginate(10);

        return view('admin.products.list', compact('categories', 'products'));
    }

    // Tambahan metode lainnya (create, store, edit, update, destroy)
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:product_categories,id',
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        // Upload Main Image
        $mainImagePath = $request->file('main_image')->store('products/main_images', 'public');

        // Upload Gallery Images
        $galleryImagePaths = [];
        if ($request->has('gallery_images')) {
            foreach ($request->file('gallery_images') as $galleryImage) {
                $galleryImagePaths[] = $galleryImage->store('products/gallery_images', 'public');
            }
        }

        // Create Product
        $product = Product::create([
            'name' => $validated['name'],
            'category_id' => $validated['category_id'],
            'description' => $validated['description'],
            'main_image' => $mainImagePath,
            'gallery_images' => $galleryImagePaths,
        ]);

        // Add Specifications
        if ($request->has('specifications')) {
            foreach ($request->input('specifications') as $spec) {
                $product->specifications()->create($spec);
            }
        }

        return redirect()->route('admin.products.list')->with('success', 'Product created successfully.');
    }


    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.list')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.list')->with('success', 'Product deleted successfully.');
    }
}
