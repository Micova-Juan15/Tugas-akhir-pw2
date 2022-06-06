<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi';

    public function transaksi(){
        return $this->hasMany(transaksi::class, 'id_transaksi', 'id_transaksi');
    }

}
