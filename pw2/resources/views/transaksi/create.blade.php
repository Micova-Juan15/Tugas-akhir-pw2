<h2>Input Data Transaksi</h2>
@if (session()->has('info'))
    <div class="alert alert-success">
        {{ session()->get('info') }}
    </div>
@endif
<form action="{{ url('barang/store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    ID Pegawai <br><input type="text" name="nama" id="nama" placeholder="Budi Sutanto"> <br>
    @error('nama')
    {{ $message }}
    @enderror
    ID Pelanggan <br><input type="number" name="harga" id="harga"><br>
    @error('harga')
    {{ $message }}
    @enderror
    <input type="submit" value="Simpan Data">
</form>