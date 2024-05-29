<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Makanan;

class Kampanye extends Model
{
    use HasFactory;

    protected $table = "kampanye";

    public $timestamps = false;

    public function makanan()
    {
        return $this->belongsTo(Makanan::class);
    }
}
