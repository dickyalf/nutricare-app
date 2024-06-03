<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Makanan;
use App\Models\Transaksi;

class Kampanye extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 
        'nama', 
        'gambar', 
        'tanggal_awal', 
        'tanggal_akhir', 
        'deskripsi', 
        'lokasi', 
        'targetDonasi', 
        'status', 
        'makanan_id'
    ];


    protected $table = "kampanye";

    public $timestamps = false;

    public function makanan()
    {
        return $this->belongsTo(Makanan::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
