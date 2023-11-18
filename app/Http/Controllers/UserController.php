<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\image;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    function index(Request $request) { 
      
        $category =  category::where('status','1')->get();

        $recentData = image::orderBy('id','desc')->take(10)->get();
        return view('index', ['category' => $category,'recentData' => $recentData]);
    }

    

    function category(Request $req){
    $cat = new category;
    $cat->categories = $req->input('categories');
    $cat->status = '1';

    $cat->save();
    return redirect()->back()->with('message','Category added successfully');
}

function submit(Request $req){



    $img = new image;
    $img->categories_id = $req->input('categories_id');
    $img->name = $req->input('name');

    if($req->hasFile('image'));
    {
        $file = $req->file('image');
        $extension = $file->getClientOriginalName();
        $filename = time().'_'.$extension;
        $file->move('upload/images/', $filename);
        $img->image = $filename;
    }
    $img->status = '1';
    $img->save();
    return Redirect()->back()->with('status','Images added successfuly');
}
}
