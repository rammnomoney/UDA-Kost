<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars';

    protected $fillable = [
        'nama',
        'alamat',
        'kodepos',
        'price',
        'list',
        'deskripsi',
        'judulfitur',
        'fitur',
        'status'
    ];

    public function kamargambar()
    {
        return $this->hasOne(KamarGambar::class, 'kamar_id');
    }
}
