<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penarikan extends Model
{
    protected $table = 'penarikans';
    protected $fillable = [
        'nasabah_id',
        'simpanan_id',
        'jumlah_penarikan',
        'status_penarikan',
    ];
    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'nasabah_id', 'id');
    }
    public function simpanan()
    {
        return $this->belongsTo(Simpanan::class, 'simpanan_id', 'id');
    }
}
