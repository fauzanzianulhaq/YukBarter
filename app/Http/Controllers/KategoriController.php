<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    function submit(Request $request){
        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect('/admin/kategori');
    }
    function kategori(){
        $kategori = Kategori::get();
        return view('admin.kategori', compact('kategori'));
    }
}
