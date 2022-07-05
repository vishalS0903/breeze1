<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'status' => 'required',
        ]);
        $product= new Category();
        $product->name = $request->name ;
        $product-> status =$request->status;
        $product-> save();

        return redirect()->route('category.index')->with('message', 'Data Added Successfully!');
    }

public function index(){
    $product= Category::paginate(10);
    return view('category.index',compact('product'));
}
public function edit($id){
    $product=Category::find($id);
    // return view('edit',compact('product'));
    return view('category.editform',compact('product'));
}
public function update(Request $request,$id){
    $this->validate($request,[
        'name' => 'required',
        'status' => 'required',
    ]);
    $product=Category::find($id);
    $product->name = $request->name ;
    $product-> status =$request->status;
    $product-> save();

    return redirect()->route('category.index')->with('message', 'Data Updated Successfully!');
}
public function delete($id){
    $product=Category::find($id);
    $product->delete();
    return redirect()->route('category.index')->with('message','Data removed!');

}

}
