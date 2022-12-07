<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    public $primaryKey = 'ID_Price';
    protected $tabel = 'Pricing';
    public $timestamps = false; //untuk mngabaikan created_at dan updated_at
    protected $fillable = [
        'Transportasi','Destinasi','Harga','Nama_Wisata', 'Alamat','Waktu', 'Makan', 'Transit', 'AC', 'WC'
    ];

    public function Transportasi(){
        return $this->belongsTo(Transportasi::class, 'ID_Transportasi', 'ID_Transportasi');
    }
    public function Wisata(){
        return $this->belongsTo(Wisata::class, 'ID_Wisata', 'ID_Wisata');
    }
}
