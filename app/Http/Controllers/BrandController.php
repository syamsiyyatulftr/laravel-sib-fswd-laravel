<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function index()
    {
        // load data dari table brands
        $brands = Brand::all();

        // passing data brands ke view brand.index
        return view('brand.index', compact('brands'));
    }

    // function create untuk menampilkan form create data
    public function create()
    {
        // load view create.blade.php
        return view('brand.create');
    }

    // function store untuk menyimpan data ke table brands
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|min:2'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->back()->withErrors($validator->errors())->withInput();  //withInput ini berguna ketika kita tidak sengaja mengosongkan tabel lalu kita tekan tombol submit maka data yg lain yg sudah terisi dia tidak akan ikut ter-reset jadi masih ada di dalam tabel dg menggunakan helper OLD yg ada di viewsnya
        }

        // insert data ke table brands
        $brand = Brand::create([
            'name' => $request->name,
        ]);

        // alihkan halaman ke halaman brands
        return redirect()->route('brand.index');
    }

    // function edit untuk menampilkan form edit data
    public function edit(Request $request, $id)
    {
        // cari data berdasarkan id menggunakan find()
        // find() merupakan fungsi eloquent untuk mencari data berdasarkan primary key
        $brand = Brand::find($id);

        // load view edit.blade.php dan passing data brand
        return view('brand.edit', compact('brand'));
    }

    // function update untuk mengupdate data yang sudah ada
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->back()->withErrors($validator->errors())->withInput();  //withInput ini berguna ketika kita tidak sengaja mengosongkan tabel lalu kita tekan tombol submit maka data yg lain yg sudah terisi dia tidak akan ikut ter-reset jadi masih ada di dalam tabel dg menggunakan helper OLD yg ada di viewsnya
        }

        // update data brands
        Brand::where('id', $id)->update([
            'name' => $request->name,
        ]);

        // alihkan halaman ke halaman brands
        return redirect()->route('brand.index');
    }

    // function destroy untuk menghapus data yang sudah ada
    public function destroy($id)
    {
        // ambil data category berdasarkan id
        $brand = Brand::find($id);

        // hapus data category
        $brand->delete();

        // alihkan halaman ke halaman brands
        return redirect()->route('brand.index');
    }
}
