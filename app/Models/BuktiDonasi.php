<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiDonasi extends Model
{
    use HasFactory;

    protected $table = 'bukti_donasi';

    public $timestamps = false;
}
