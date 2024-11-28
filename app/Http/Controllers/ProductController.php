<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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


    public function list() // admin
    {
        return view('admin.products.list');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
