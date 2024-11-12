<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateName(Request $request)
{
    
    $request->validate([
        'name' => 'required|string|max:255',
    ]);
    $admin = User::where('role', 'admin')->first();
    // Update nama pengguna yang sedang login
    $user = User::find(auth()->id());
    $user->name = $request->name;
    $user->save();

    return redirect()->back()->with('success', 'Nama berhasil diubah.');
}
public function profile()
{
    $admin = User::where('role', 'admin')->first();
    return view('admin.profile', compact('admin'));
}



}
