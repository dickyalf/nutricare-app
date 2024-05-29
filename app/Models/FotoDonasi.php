<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoDonasi extends Model
{
    use HasFactory;

    protected $table = 'foto_donasi';

    public $timestamps = false;
}
