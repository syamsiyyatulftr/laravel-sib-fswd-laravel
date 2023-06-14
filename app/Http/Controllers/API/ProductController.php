<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data produk',
            'data' => $products
        ], 200);
    }

    // public function show($id)
    // {
    //     $product = Product::find($id);

    //     if ($product) {
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Detail data produk',
    //             'data' => $product
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Data produk tidak ditemukan',
    //             'data' => ''
    //         ], 404);
    //     }
    // }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'name' => 'required|string|min:3',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brand' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data yang dikirim tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        // // ubah nama file
        $imageName = time() . '.' . $request->image->extension();

        // simpan file ke folder public/product
        Storage::putFileAs('public/product', $request->image, $imageName);

        $product = Product::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brand,
            'image' => $imageName
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan',
            'data' => $product
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'category' => 'required',
            'name' => 'required|string|min:3',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brand' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data yang dikirim tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        $product = Product::find($id);

        // // ubah nama file
        // $imageName = time() . '.' . $request->image->extension();

        // simpan file ke folder public/product
        // Storage::putFileAs('public/product', $request->image, $imageName);

        if ($product) {
            $product = $product->update([
                'category_id' => $request->category,
                'name' => $request->name,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'brands' => $request->brand,
                // 'image' => $imageName,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil diupdate',
                'data' => Product::find($id)
            ], 200);
        } else { //jika id tidak ditemukan
            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }

        // $validator =    Validator::make($request->all(), [
        //     'id' => 'required',
        //     'category' => 'required',
        //     'name' => 'required|string|min:3',
        //     'price' => 'required|integer',
        //     'sale_price' => 'required|integer',
        //     'brand' => 'required|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Data yang dikirim tidak valid',
        //         'data' => $validator->errors()
        //     ], 422);
        // }

        // if ($validator->fails()) {
        //     return $this->sendError('error validation', $validator->errors());
        // // }
        // $product = Product::findOrFail($id);

        // $product->id = $request->input('id');
        // $product->category = $request->input('category');
        // $product->name = $request->input('product_name');
        // $product->price = $request->input('price');
        // $product->sale_price = $request->input('sale_price');
        // $product->image=  $request->file('image')->store('public/product');
        // if ($product->update()) {
        //     return $this->sendResponse($product->toArray(), 'Product Updated Succesfully');
        // }
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus',
                'data' => null
            ], 200);
        } else {

            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }
}
