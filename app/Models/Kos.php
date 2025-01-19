<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;
    
    protected $table = 'koss';
    //protected $fillable = ['nama', 'alamat', 'price', 'image'];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'penyewa_id', 'id');
    }
}
