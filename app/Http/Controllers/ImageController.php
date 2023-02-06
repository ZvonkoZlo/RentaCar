<?php
namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;
class ImageController extends Controller

{


    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'photo' => 'required|image|max:2048',
        ]);

        // Handle the uploaded file
        $path = $request->file->store('products', 'public');

        // Create a new Product instance
        $product = new Image();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->photo = $path;

        // Save the product to the database
        $product->save();

        return redirect()->back()->with('success', 'The product has been added successfully');
    }










  /*  public function show()
    {
        $photo = Image::find(1);
      
      return view('upload.show', compact('photo'));
    }

    public function saveImage(Request $request){
        $request->image->store('product', 'public');
        $newImage = new Image();
        $newImage->image = request('image');
        $newImage->path=$request->image->hashName();
        $newImage->save();
        $photo = Image::find(1);
       // return view('upload',compact('photo'));
        return redirect()->route('upload.index')
            ->with('success', 'Product created successfully.');


    }

    public function index(){

        $images = Image::all();

        return view('fleet')->with('image',$images);

    }

    public function form(){

        return view('upload');

    }

    public function upload(Request $request){

        $images = new Image;

        $image = $request->image;

        $image_name = $image->getClientOriginalName();

        $image->storeAs('public/images', $image_name);

        $images->image = $image_name;

        $images->save();

        return redirect('/');

    }*/
}