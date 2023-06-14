<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {

        // mengambil data category
        $categories = Category::all();

        // mengambil data slider
        $sliders = Slider::all();
        

        // filter berdasarkan jenis/category
        // mengambil product dengan category yg bernama categorynya
        if($request->category) {
            $products = Product::with('category')->whereHas('category', function ($query) use ($request) {
                $query->where('name', $request->category);
            })->get();

        } else if ($request->min && $request->max) {
            $products = Product::where('price', '>=', $request->min)->where('price', '<=', $request->max)->get();
        
        // else ini jika category tidak ada akan menampilkan semua product
        } else {

            // mengambil  data yang sudah di Approved
            $products = Product::where('status', 'Approved')->get();

        }

        return view('landing', compact('products', 'categories', 'sliders'));
    
    }
}
