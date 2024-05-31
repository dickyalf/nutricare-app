<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Kampanye;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";

    protected $fillable = [
        'pengguna_id',
        'kampanye_id',
        'tanggal_transaksi',
        'jumlahMakanan',
        'totalDonasi',
    ];

    public $timestamps = false;

    public function kampanye()
    {
        return $this->belongsTo(Kampanye::class);
    }
}
