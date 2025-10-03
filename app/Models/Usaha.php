<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Usaha extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table ='usahas';
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_usaha'
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $fillable = [
        'slug',
        'nama_usaha',
        'jenis_usaha',
        'body'
    ];
}
