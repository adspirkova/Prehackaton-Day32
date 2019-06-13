<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index() {
       $categories = DB::table('categories')
       ->orderBy('name')
       ->get();
       //from'categories' Order by 'name' ASC
       //Select *
       $view = view('categories/index',compact('categories'));
       return $view;
       //compact creates and arrray.
   }
}
