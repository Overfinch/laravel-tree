<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index(){
        $categories = Categories::getCategories();
        return view('tree.index')->with(['categories' => $categories]);
    }
}
