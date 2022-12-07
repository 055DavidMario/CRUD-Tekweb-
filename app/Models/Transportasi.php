<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    use HasFactory;
    public $primaryKey = 'ID_Transportasi';
    protected $tabel = 'Transportasi';
    protected $fillable = [
        'Nama_Transportasi'
    ];

    public function pricing(){
        return $this->hasMany(Pricing::class,'ID_Price', 'ID_Price');
    }
}
