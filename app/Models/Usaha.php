<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;
    protected $table ='usahas';
    protected $fillable = [
        'slug',
        'nama_usaha',
        'jenis_usaha',
        'body'
    ];
}
