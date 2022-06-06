<h2>Edit Data Barang {{$barang->id_barang}}</h2>
@if (session()->has('info'))
    <div class="alert alert-success">
        {{ session()->get('info') }}
    </div>
@endif
<form action="{{ url('barang/store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    Nama <br><input type="text" name="nama" id="nama"> <br>
    @error('nama')
    {{ $message }}
    @enderror
    Harga <br><input type="number" name="harga" id="harga"><br>
    @error('harga')
    {{ $message }}
    @enderror
    Jumlah <br><input type="number" name="jmlh" id="jmlh"><br>
    @error('jmlh')
    {{ $message }}
    @enderror <br>
    Keterangan <br><input type="text" name="ket" id="ket"><br>
    @error('ket')
    {{ $message }}
    @enderror <br>
    Foto <br><input type="file" name="foto_barang" id="foto_barang"><br>
    @error('foto_barang')
    {{ $message }}
    @enderror <br>
    <input type="submit" value="Simpan Data">
</form>