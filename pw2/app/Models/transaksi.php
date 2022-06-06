<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    public function Barang(){
        return $this->belongsTo(Barang::class, "id_transaksi", "id");
    }

    public function Pelanggan(){
        return $this->belongsTo(Pelanggan::class, "id_pelanggan", "id");
    }
    
    public function Pegawai(){
        return $this->belongsTo(Pegawai::class, "id_pegawai", "id");
    }

    public function detail_transaksi(){
        return $this->hasMany(transaksi::class, 'id_transaksi', 'id_transaksi');
    }

    public $incrementing = false;

    protected $keyType = 'string';

    
}
