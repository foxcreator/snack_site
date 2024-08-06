<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function catalog($categoryId)
    {
        $categoryName = '';
        foreach (Product::CATEGORIES as $key => $category) {
            if ($key == $categoryId) {
                $categoryName = $category;
                break;
            }
        }

        return view('catalog', compact('categoryName'));
    }
}
