<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')
        -> orderBy('name')
        -> get();
        return view('categories/index',compact('categories'));
        
    }
}
