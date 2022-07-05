<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;


class BlogController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
              'description' => 'required',
              'status' => 'required',
              'category' => 'required',
              'image' => 'required',

        ]);
        $product= new Blog();
        $product->title = $request->title ;
        $product->description= $request->description ;
        $product->status =$request->status;
        $product->category_id=$request->category;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads_images', $filename);
            $product->image=$filename;
        }

        $product-> save();

        return redirect()->route('table')->with('message', 'Data Added Successfully!');
    }
    public function create(Request $request){
        $categories=Category::all();
        return view('blog.create',compact('categories'));
    }

    public function index(){
        $product= Blog::with('category')->latest()->paginate(10);

        return view('blog.index',compact('product'));
    }
    public function edit($id){

        $categories=Category::all();
        $product=Blog::with('category')->find($id);
        // dd($product);
        return view('blog.editform',compact('product','categories'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);
        $product=Blog::find($id);
        $product->title = $request->title ;
        $product->description= $request->description ;
        $product->status =$request->status;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads_images', $filename);
            $product->image=$filename;
        }

        $product-> save();

        return redirect()->route('table')->with('message', 'Data Updated Successfully!');
    }
    public function delete($id){
        $product=Blog::find($id);
        $product->delete();
        return redirect()->route('blog.index')->with('message','Data removed!');

    }
}
