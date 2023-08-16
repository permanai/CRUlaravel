<?php

namespace App\Http\Controllers;

use App\Models\ujianprak069;
use Illuminate\Http\Request;

class Ujianprak069Controller extends Controller
{
    public function adminIndex(Request $request)
    {
        $allData = ujianprak069::paginate(5);//menggunakan pagination 5
        return view('index', compact('allData'));//menuju view index
    }

    public function adminEdit($id)
    {
        $allData = ujianprak069::find($id); //mencari data berdasarkan $id
        return view('edit', compact('allData') ); //kemudian diarahkan ke view edit
    }

    public function adminAdd()
    {
        return view('tambah');//untuk menampilkan tambah produk, menuju ke view tambah
    }

    // Create
    public function Add(Request $request) //proses tambah data
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'foto' => 'required|image',
        ]);
    
        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        $file->storeAs('public/images', $fileName);
    
        $allData = new Ujianprak069();
        $allData->nama_produk = $validatedData['nama_produk'];
        $allData->harga_produk = $validatedData['harga_produk'];
        $allData->foto = $fileName;
        $allData->save();
    
        return redirect('/adminIndex')->with('success', 'Data Berhasil Ditambahkan');//setelah data dibuat 
        // tampilan dialihkan ke adminIndex
    }
    
   // Update
public function Edit(Request $request, $id)//proses update data
{
    $validatedData = $request->validate([
        'nama_produk' => 'required',
        'harga_produk' => 'required',
        'foto' => 'image',
    ]);

    $allData = ujianprak069::find($id);
    $allData->nama_produk = $validatedData['nama_produk'];
    $allData->harga_produk = $validatedData['harga_produk'];

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        $file->storeAs('public/images', $fileName);
        $allData->foto = $fileName;
    }

    $allData->save();
    return redirect('/adminIndex')->with('success', 'Data Berhasil Diupdate');//setelah edit selesai, tampilan
    //dialihkan ke adminIndex
}

}
