<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class TransaksiController extends Controller
{
    public function index(){
        $barang = barang::all();
        return view("cart.index", compact('barang'));
    }

    public function transaksi(){
        $transaksi = transaksi::all();
        return view("transaksi.index", compact('transaksi'));
    }

    public function createTransaksi(Request $request) {
        $transaksi = new transaksi();

        $transaksiConfig = [
            'table' => 'transaski',
            'field' => 'id_transaksi',
            'length' => 20,
            'prefix' => date('Y-m-d'),
        ];
        
        $transaksi->id_pegawai = $request->id_pegawai;
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->keterangan = $request->keterangan;
        $transaksi->grand_total = $request->grand_total;
        $transaksi->save();
    }

    public function tambahBarang(Request $request, $id) {
        $detailtransaksi = new detailtransaksi();
        $detailtransaksi ->id_transaksi = $id;
        $detailtransaksi->id_barang = $request ->id_barang;
        $detailtransaksi->tgl_transaksi = date('Y-m-d H:i:s');
        $detailtransaksi->qty_brg = $request -> qty;
        $detailtransaksi->total = $request -> subtotal;
        $detailtransaksi->save();
    }
    public function tambahJumlah(Request $request, $id) {
        $detailtransaksi = detailTransaksi::find();
        $detailtransaksi -> qty_brg = $request -> qty+1;
    }

    public function kurangJumlah(Request $request, $id) {
        $detailtransaksi = detailTransaksi::find();
        $detailtransaksi -> qty_brg = $request -> qty+1;
    }

    public function tampilkeranjang(Request $request, $id) {
        $detailtransaksi = detailTransaksi::find();

    }
}