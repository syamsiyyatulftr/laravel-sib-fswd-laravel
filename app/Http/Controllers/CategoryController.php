<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = [
        //     [
        //         "id" => "8e1a6be-c042-4efd-a199-7d45b99fdcc2",
        //         "name" => "cellphone"
        //     ],
        //     [
        //         "id" => "243d6c9e-4a86-485c-bde6-2a83c2b306be",
        //         "name" => "tablet"
        //     ],
        //     [
        //         "id" => "2ec09c46-99b1-4cf5-a1cb-243c4d6ffc9e",
        //         "name" => "wearable"
        //     ],
        //     [
        //         "id" => "1d17a400-d1e4-4fa1-926a-2ecfdc3266d4",
        //         "name" => "laptop"
        //     ],
        //     [
        //         "id" => "b99448e1-8e60-48a3-b379-1d1e6973c400",
        //         "name" => "accessories"
        //     ]
        // ];

        $categories = Category::all();

        return view('category.index', ['data' => $categories]); // ini sebenarnya sama seperti kodingan yang ada di bawah ini
        // return view('category.index', compact (categories)); --> compact ini scr tidak langsung membuat menjadi array spt ['data' => $categories]
        // hanya saja ini tidak menggunakan $categories, yang penting yang di panggil sama spt line 35 yaitu $categories (ini sifatnya mempersingkat penulisan saja)
    }

    public function create()
    {

        return view('category.create');
    }

    public function store(Request $request) //data yang di kirim form submit category akan masuk ke sini semua
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5'
        ]);

        if ($validator->fails()) {
            
            return redirect()->back()->withErrors($validator->errors())->withInput();  //withInput ini berguna ketika kita tidak sengaja mengosongkan tabel lalu kita tekan tombol submit maka data yg lain yg sudah terisi dia tidak akan ikut ter-reset jadi masih ada di dalam tabel dg menggunakan helper OLD yg ada di viewsnya
        }


        //memasukkan data ke database
        $category = Category::create([
            'name' => $request->name // name di sini sesuai yang ada di dalam tanda petik dua name="name" pada Create.blade.php
        ]);

        //redirect ke halaman category.index
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        // ambil data category berdasarkan id
        $category = Category::find($id);

        // tampilkan view edit dan passing data category
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->back()->withErrors($validator->errors())->withInput();  //withInput ini berguna ketika kita tidak sengaja mengosongkan tabel lalu kita tekan tombol submit maka data yg lain yg sudah terisi dia tidak akan ikut ter-reset jadi masih ada di dalam tabel dg menggunakan helper OLD yg ada di viewsnya
        }

        // ambil data category berdasarkan id
        $category = Category::find($id);

        // update data category
        $category->update([
            'name' => $request->name
        ]);

        // redirect ke halaman category.index
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        // ambil data category berdasarkan id
        $category = Category::find($id);

        // hapus data category
        $category->delete();

        // redirect ke halaman category.index
        return redirect()->route('category.index');
    }


}
 
