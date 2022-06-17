<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'text' => 'required',
            'description' => 'required',
        ]);
        $product= new Form();
        $product->text = $request->text ;
        $product-> description= $request->description ;
        $product-> save();

        return redirect()->route('table')->with('message', 'Data Added Successfully!');
    }
    public function index(){
        $product= Form::all();
        return view('table',compact('product'));
    }
    public function edit($id){
        $product=Form::find($id);
        return view('edit',compact('product'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'text' => 'required',
            'description' => 'required',
        ]);
        $product=Form::find($id);
        $product->text = $request->text ;
        $product-> description= $request->description ;
        $product-> save();

        return redirect()->route('table')->with('message', 'Data Updated Successfully!');
    }
    public function delete($id){
        $product=Form::find($id);
        $product->delete();
        return redirect()->route('table')->with('message','Data removed!');

    }
}
