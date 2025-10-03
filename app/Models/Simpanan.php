<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Models\Nasabah;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'nasabah_id',
        'kode_simpanan',
        'jumlah_simpanan',
        'jenis_simpanan',
        'bukti_simpanan',
        'status',
    ];
    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'nasabah_id', 'id');
    }
    public function penarikan()
    {
        return $this->hasMany(Penarikan::class, 'simpanan_id', 'id');
    }
}
