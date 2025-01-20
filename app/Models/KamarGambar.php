<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamarGambar extends Model
{
    use HasFactory;

    protected $table = 'kamargambars';

    protected $fillable = [
        'kamar_id',
        'gambar'
    ];    
}
