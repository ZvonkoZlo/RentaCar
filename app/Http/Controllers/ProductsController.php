<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function index()
    {

        $products = Category::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        if (!Auth::check()) {
            return abort(403);
        }
        return view('product.create');
    }



    public function edit($id)
    {
        if (!Auth::check()) {
            return abort(403);
        }
        $category = Category::find($id);
        return view('product.edit', compact('category'));
    }



    public function update(Request $request, $id)
    {
        if (!Auth::check()) {
            return abort(403);
        }
        $category = Category::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $image = $category->image;
        if ($request->hasFile('image')) {
            Storage::delete($category->image);

            $image = $request->file('image')->store('public/categories');
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price
        ]);
        return to_route('products.index');
    }


    public function store(CategoryStoreRequest $request)
    {
        if (!Auth::check()) {
            return abort(403);
        }
        $image = $request->file('image')->store('public/images');
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price

        ]);
        return to_route('products.index');
    }

    public function izbrisi($id)
    {
        if (!Auth::check()) {
            return abort(403);
        }
        $brisi = Category::find($id);
        $brisi->delete();
        return to_route('products.index');
    }
}
