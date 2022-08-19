<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use App\Models\Product;
use Auth;

class PageController extends Controller
{
    public function uploadpage() 
    {
        return view('product.product');
    }

    public function store(Request $request) 
    {
        $data= new product();
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;

        $data->title=$request->title;
        $data->user_id=Auth::user()->id;

        $data->save();
        
        return redirect()->back();


    }

    public function show() 
    {
        $data=product::all();

        return view('product.showproduct', compact('data'));
    }

    public function download(Request $request, $file) 
    {
        

        return response()->download(public_path('assets/'.$file));
    }
}