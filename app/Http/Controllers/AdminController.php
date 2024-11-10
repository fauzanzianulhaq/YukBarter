<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function upload()
{
    // Mengambil data barang hanya untuk hari ini
    $upload = Upload::whereDate('created_at', now()->toDateString())->get();

    // Menghitung jumlah total postingan hari ini
    $todayPosts = $upload->count();

    // Menghitung jumlah total postingan bulan ini
    $monthlyPosts = Upload::whereMonth('created_at', now()->month)
                          ->whereYear('created_at', now()->year)
                          ->count();

    // Menghitung jumlah total postingan tahun ini
    $yearlyPosts = Upload::whereYear('created_at', now()->year)
                         ->count();

    // Menghitung total user dengan role "user"
    $totalUsers = User::where('role', 'user')->count();

    // Query kategori populer berdasarkan jumlah barang di setiap kategori
    $popularCategory = DB::table('barang')
        ->select('kategori_id', DB::raw('count(*) as total'))
        ->groupBy('kategori_id')
        ->orderByDesc('total')
        ->first();

    // Mengambil nama kategori dari kategori populer
    if ($popularCategory) {
        $category = Kategori::find($popularCategory->kategori_id);
        $categoryName = $category ? $category->nama : "Tidak ada data";
    } else {
        $categoryName = "Tidak ada data";
    }
    // Menampilkan jumlah kategori yang ada
    $totalCategories = Kategori::count();


    return view('admin.beranda', compact('upload', 'todayPosts', 'monthlyPosts', 'yearlyPosts', 
    'totalUsers', 'categoryName', 'totalCategories'));
}
public function validasi()
{
    // Mengambil barang yang statusnya 'pending'
    $barangPending = Upload::where('status', 'pending')->get();

    // Mengirimkan data barang yang statusnya pending ke view
    return view('admin.validasi', compact('barangPending'));
}
public function ubahStatus(Request $request)
{
    // Validasi apakah barang_id dan status ada dalam request
    $request->validate([
        'barang_id' => 'required|exists:barang,id',
        'status' => 'required|in:disetujui,ditolak',
    ]);

    // Temukan barang berdasarkan ID
    $barang = Upload::findOrFail($request->input('barang_id'));

    // Ubah status barang
    $barang->status = $request->input('status');
    $barang->save();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.validasi')->with('success', 'Status barang berhasil diubah');
}






}
