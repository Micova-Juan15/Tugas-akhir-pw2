<?php

namespace App\Http\Controllers;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = pegawai::all();
        return view("pegawai.index", compact('pegawai'));
    }

    public function create()
    {
       return view("pegawai.create");
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
           'nama' => 'required|min:3|max:20',
        ]);

        $idConfig = [
            'table' => 'pegawai',
            'field' => 'id_pegawai',
            'length' => 12,
            'prefix' => 'PEGAWAI-'
        ];

        $pegawai = new pegawai();
        $pegawai->id_pegawai =  IdGenerator::generate($idConfig);
        $pegawai->nama_pegawai = $request->nama;
        $pegawai->email = $request-> email;
        $pegawai->alamat = $request-> alamat;
        $pegawai->no_telp = $request-> no_telp;
        $pegawai->tanggal_lahir = $request-> tgl_lahir;
        $pegawai->jenis_kelamin = $request-> jk;
        $pegawai->save();

        $request->session()->flash("info", "Data pegawai $request->nama berhasil disimpan!");
        return redirect()->route("pegawai.create");
    }

    public function show(Request $request, $id)
    {
        $pegawai = pegawai::find($id);
        return view("pegawai.view", compact('pegawai'));
    }

    public function edit(Request $request, $id)
    {
        $pegawai = pegawai::find($id);
        return view("pegawai.edit", compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'nama' => 'required|min:3|max:20'
        ]);

        $pegawai = pegawai::find($id);
        $pegawai->nama_pegawai = $request->nama; 
        $pegawai->alamat = $request-> alamat;
        $pegawai->no_telp = $request-> no_telp;
        $pegawai->tanggal_lahir = $request-> tgl_lahir;
        $pegawai->jenis_kelamin = $request-> jk;
        $pegawai->save();

        $request->session()->flash("info", "Data pegawai $request->nama berhasil diupdate!");
        return redirect()->route("pegawai.edit", [$id]);
    }

    public function destroy(Request $request, $id)
    {
        $pegawai = pegawai::find($id);
        if($pegawai->id){
            $pegawai->delete();
        }
        
        $request->session()->flash("info", "Data pegawai $request->nama berhasil dihapus!");
        return redirect()->route("pegawai.index");
    }
}
