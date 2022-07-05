<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
class FrontController extends Controller
{

    public function index(){
        $categories= Category::all();
        $blogs= Blog::latest()->paginate(4);
        $featured_blog = Blog::latest()->first();
        return view('welcome',compact('categories','blogs', 'featured_blog'));
    }

    public function show(Request $request,$id){
        $categories = Category::all();
        $blogs = Blog::with('category')->find($id);

        return view('blog.show',compact('blogs','categories'));
    }

}
