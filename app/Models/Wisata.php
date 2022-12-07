<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    public $primaryKey = 'ID_Wisata';
    protected $tabel = 'Wisata';
    protected $fillable = [
        'Nama_Wisata', 'Lokasi', 'Gambar'
    ];
}
