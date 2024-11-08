<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = ['kategori_id','nama_barang', 'nomor_wa', 'deskripsi', 'foto'];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
