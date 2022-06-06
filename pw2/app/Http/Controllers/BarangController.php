<?php

namespace App\Http\Controllers;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\stok;

class BarangController extends Controller
{
    public function index(){
        $barang = barang::all();
        return view("barang.index", compact('barang'));
    }

    public function create()
    {
       return view("barang.create");
    }

    public function store(Request $request)
    {
        $barang = new barang();
        $stok = new stok();
        if ($request->foto_barang = null) {
            $validation = $request->validate([
                'nama' => 'required|max:50',
                'harga' => 'required',
            ]);
            $text = $request->foto_barang->getClientOriginalExtension();
            $nama_file = "foto-".time().".".$text;
            $path = $request->foto_barang->storeAs("public", $nama_file);
            $barang->foto_barang = $nama_file;
        }else{
            $validation = $request->validate([
                'nama' => 'required|max:50',
                'harga' => 'required',
            ]);
        }

        $idConfig = [
            'table' => 'barang',
            'field' => 'id_barang',
            'length' => 8,
            'prefix' => 'BRG-'
        ];

        $barang->id_barang = IdGenerator::generate($idConfig);
        $barang->nama_barang = $request->nama;
        $barang->harga = $request-> harga;
        $stok->id_barang = $barang->id_barang;
        $stok->jumlah = ($request->jmlh == null)? 0 : $request->jmlh;
        $stok->keterangan = $request->ket;
        $barang->save();
        $stok->save();

        $request->session()->flash("info", "Data barang $request->nama berhasil disimpan!");
        return redirect()->route("barang.create");
    }

    public function show(Request $request, $id)
    {
        $barang = barang::find($id);
        return view("barang.view", compact('barang', ));
    }

    public function edit(Request $request, $id)
    {
        $barang = barang::find($id);
        return view("barang.edit", compact('barang', ));
    }

    public function update(Request $request, $id)
    {
        $barang = barang::findOrFail($id);
        $stok = stok::findOrFail($id);
        if ($request->hasFile('foto_barang')) {
            $validation = $request->validate([
                'nama' => 'required|max:50',
                'harga' => 'required',
            ]);
            $text = $request->foto_barang->getClientOriginalExtension();
            $nama_file = "foto-".time().".".$text;
            $path = $request->foto_barang->storeAs("public", $nama_file);

        }else{
            $validation = $request->validate([
                'nama' => 'required|max:50',
                'harga' => 'required',
            ]);
        }
        $barang->nama_barang = $request->nama;
        $barang->foto_barang = ($request->hasFile('foto_barang')) ? $nama_file : $barang->foto_barang;
        $barang->harga = $request-> harga;
        $stok->keterangan = $request->ket;
        $barang->save();
        $stok->save();
        $request->session()->flash("info", "Data barang $request->nama berhasil diupdate!");
        return redirect()->route("barang.edit", [$id]);
    }

    public function destroy(Request $request, $id)
    {
        $barang = barang::findOrFail($id);
        $stok = stok::findOrFail($id);
        $stok->delete();
        $barang->delete();
        
        $request->session()->flash("info", "Data barang $request->nama berhasil dihapus!");
        return redirect()->route("barang.index");
    }
}
