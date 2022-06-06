<?php

namespace App\Http\Controllers;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use App\Models\pelanggan;


class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all();
        return view("pelanggan.index", compact('pelanggan'));
    }

    public function create()
    {
       return view("pelanggan.create");
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
           'nama' => 'required|min:3|max:20',
           
        ]);

        $idConfig = [
            'table' => 'pelanggan',
            'field' => 'id_pelanggan',
            'length' => 10,
            'prefix' => 'CUST-'
        ];

        $pelanggan = new pelanggan();
        $pelanggan->id_pelanggan = IdGenerator::generate($idConfig);
        $pelanggan->nama_pelanggan = $request->nama; 
        $pelanggan->email = $request-> email;
        $pelanggan->alamat = $request-> alamat;
        $pelanggan->no_telp = $request-> no_telp;
        $pelanggan->tanggal_lahir = $request-> tgl_lahir;
        $pelanggan->jenis_kelamin = $request-> jk;
        $pelanggan->save();

        $request->session()->flash("info", "Data pelanggan $request->nama berhasil disimpan!");
        return redirect()->route("pelanggan.create");
    }

    public function show(Request $request, $id)
    {
        $pelanggan = pelanggan::find($id);
        return view("pelanggan.view", compact('pelanggan'));
    }

    public function edit(Request $request, $id)
    {
        $pelanggan = pelanggan::find($id);
        return view("pelanggan.edit", compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'nama' => 'required|min:3|max:20'
        ]);

        $pelanggan = pelanggan::find($id);
        $pelanggan->nama_pelanggan = $request->nama;
        $pelanggan->email = $request-> email;
        $pelanggan->alamat = $request-> alamat;
        $pelanggan->no_telp = $request-> no_telp;
        $pelanggan->tanggal_lahir = $request-> tgl_lahir;
        $pelanggan->jenis_kelamin = $request-> jk;
        $pelanggan->save();

        //3. redirect ke halaman index / detail / form edit
        $request->session()->flash("info", "Data pelanggan $request->nama berhasil diupdate!");
        return redirect()->route("pelanggan.edit", [$id]);
    }

    public function destroy(Request $request, $id)
    {
        $pelanggan = pelanggan::find($id);
        if($pelanggan->id_pelanggan){
            $pelanggan->delete();
        }
        
        $request->session()->flash("info", "Data pelanggan $request->nama berhasil dihapus!");
        return redirect()->route("pelanggan.index");
    }
}
