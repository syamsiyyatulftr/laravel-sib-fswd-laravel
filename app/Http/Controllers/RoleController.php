<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        // tampilkan halaman create
        return view('role.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();  //withInput ini berguna ketika kita tidak sengaja mengosongkan tabel lalu kita tekan tombol submit maka data yg lain yg sudah terisi dia tidak akan ikut ter-reset jadi masih ada di dalam tabel dg menggunakan helper OLD yg ada di viewsnya
        }

        // insert data ke table roles
        $role = Role::create([
            'name' => $request->name,
        ]);

        // alihkan halaman ke halaman roles
        return redirect()->route('role.index');
    }

    public function edit($id)
    {
        // ambil data role berdasarkan id
        $role = Role::find($id);

        // tampilkan view edit dan passing data role
        return view('role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();  //withInput ini berguna ketika kita tidak sengaja mengosongkan tabel lalu kita tekan tombol submit maka data yg lain yg sudah terisi dia tidak akan ikut ter-reset jadi masih ada di dalam tabel dg menggunakan helper OLD yg ada di viewsnya
        }
        
        // ambil data role berdasarkan id
        $role = Role::find($id);

        // update data role
        $role->update([
            'name' => $request->name,
        ]);

        // alihkan halaman ke halaman roles
        return redirect()->route('role.index');
    }

    public function destroy($id)
    {
        // ambil data role berdasarkan id
        $role = Role::find($id);

        // hapus data role
        $role->delete();

        // alihkan halaman ke halaman roles
        return redirect()->route('role.index');
    }
}
