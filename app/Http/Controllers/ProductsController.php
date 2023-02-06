<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index(){

        $products = Category::all();
        return view('product.index', compact('products'));

    }

        public function create(){
            
            return view('product.create');


        }



        public function edit($id)
    {
        $category = Category::find($id);
        return view('product.edit', compact('category'));
    }



    public function update(Request $request, $id)
    {
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
            'price' =>$request->price
        ]);
        return to_route('products.index');
    }


        public function store(CategoryStoreRequest $request){
            $image = $request->file('image')->store('public/images');
            Category::create([
                'name'=> $request->name,
                'description'=> $request->description,
                'image'=>$image,
                'price'=>$request->price

            ]);
            return to_route('products.index');
        }

        public function izbrisi($id){
            $brisi = Category::find($id);
            $brisi->delete();
            return to_route('products.index');
        }


        
    }
   

