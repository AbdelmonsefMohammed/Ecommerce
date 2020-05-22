<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class WelcomePageController extends Controller
{
    public function index()
    {
        $categories = Category::get()->take(4);
        
        return view('welcome',compact('categories'));
    }
}
