<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() // public
    {
        $news = News::with('category', 'tags')->paginate(10);
        return view('pages.news.index', compact('news'));
    }
    public function list() // admin
    {
        $news = News::with('category', 'tags')->paginate(10);
        return view('admin.news.list', compact('news'));
    }
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.news.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array|exists:tags,id',
        ]);

        $news = News::create($validated);
        $news->tags()->sync($request->tags);

        return redirect()->route('news.index')->with('success', 'News successfully created.');
    }

    public function edit(News $news)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.news.edit', compact('news', 'categories', 'tags'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array|exists:tags,id',
        ]);

        $news->update($validated);
        $news->tags()->sync($request->tags);

        return redirect()->route('news.index')->with('success', 'News successfully updated.');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News successfully deleted.');
    }
}
