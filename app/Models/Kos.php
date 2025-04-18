<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;
    
    protected $table = 'koss';

    protected $fillable = [
        'nama', 'alamat', 'price', 'list1', 'list2', 'list3', 'gambar', 'pemilik_id',
    ];

    
    public function kamars()
    {
        return $this->hasMany(Kamar::class, 'kos_id', 'id');
    }

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class);
    }
}
