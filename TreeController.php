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

    public function index2(){
        $categories = Categories::getCategories2();
        return view('tree2')->with(['categories' => $categories]);
    }
}
