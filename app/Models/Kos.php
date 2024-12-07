<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;
    
    protected $table = 'koss';
    //protected $fillable = ['nama', 'alamat', 'price', 'image'];
    //protected $guarded = ['id'];

    // public function pemilik()
    // {
    //     return $this->belongsTo(Pemilik::class, 'pemilik_id', 'id');
    // }
}
