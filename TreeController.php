<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index(){
        $categories = Categories::getCategories();
        return view('tree')->with(['categories' => $categories]);
    }
    
    // Альтернативный вариант
    
    public function index2(){
        $categories = Categories::getTree2();
        return view('tree2')->with(['categories' => $categories]);
    }
}
