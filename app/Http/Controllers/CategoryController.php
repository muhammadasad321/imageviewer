<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    function detail($id, Request $request) {
    
     
        $category = category::where('id', $id)->first();

        $viewimage = image::where('categories_id', $category->id)->get();
        
        return view('categories', compact('category', 'viewimage',));
    }
}
