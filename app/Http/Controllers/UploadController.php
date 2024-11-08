<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use App\Models\Kategori;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(){
         $upload = Upload::get();
        return view('user.beranda', compact('upload'));
    }
public function submit(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'nomor_wa' => 'required|string|max:15',
        'deskripsi' => 'required|string',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        'kategori_id' => 'required|exists:kategori,id'
    ]);

    // Buat instance baru dari model Upload
    $upload = new Upload();
    $upload->nama_barang = $request->nama_barang;
    $upload->nomor_wa = $request->nomor_wa;
    $upload->deskripsi = $request->deskripsi;
    $upload->kategori_id = $request->kategori_id;

    // Menambahkan user_id yang diambil dari user yang sedang login
    $upload->user_id = auth()->user()->id;

    // Status di-set default 'pending' jika tidak diinput
    $upload->status = 'pending'; // Status default

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/foto', $filename);
        $upload->foto = $filename;
    }

    // Simpan data ke database
    $upload->save();

    return redirect('/user/beranda')->with('success', 'Data barang berhasil ditambahkan!');
}


public function create()
    {
        // Ambil data kategori dari tabel kategori
        $kategoris = Kategori::all();

        // Tampilkan view untuk form tambah data dan kirim data kategori
        return view('user.upload', compact('kategoris'));
    }


}
