<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Kampanye;

class Makanan extends Model
{
    use HasFactory;


    protected $table = "makanan";

    protected $fillable = ["nama", "harga", "deskripsi"];
    public $timestamps = false;

    public function kampanye()
    {
        return $this->belongsTo(Kampanye::class);
    }
}
