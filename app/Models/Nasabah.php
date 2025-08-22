<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Nasabah extends Model
{

    use HasFactory;
    use Sluggable;
    // protected $guarded = ['id'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $fillable = [
        'nama',
        'NIK',
        'slug',
        'jenis_kelamin',
        'alamat',
        'telepon',
        'tanggal_bergabung',
        'jenis_kelamin',
    ];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search']?? false,function($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                         ->orWhere('kode_nasabah', 'like', '%' . $search . '%');
        });
    }
    protected static function booted()
    {
        static::creating(function ($nasabah) {
            do {
                // Kode acak 8 karakter, huruf + angka
                $nasabah->kode_nasabah = 'KMP-' . substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
            } while (\App\Models\Nasabah::where('kode_nasabah', $nasabah->kode_nasabah)->exists());
        });
    }
    public function simpanan(){
        return $this->hasMany(Simpanan::class, 'nasabah_id', 'id');
    }
}
