<h2>Input Data Pegawai</h2>
@if (session()->has('info'))
    <div class="alert alert-success">
        {{ session()->get('info') }}
    </div>
@endif
<form action="{{ url('pegawai/store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    Kode<br><input type="text" name="kode" id="kode" placeholder="W#######"> <br>
    @error('kode')
    {{ $message }}
    @enderror
    Nama <br><input type="text" name="nama" id="nama" placeholder="Budi Sutanto"> <br>
    @error('nama')
    {{ $message }}
    @enderror
    Email <br><input type="email" name="email" id="email" placeholder="contoh@gmail.com"><br>
    @error('email')
    {{ $message }}
    @enderror
    Alamat <br><input type="text" name="alamat" id="alamat" placeholder="contoh@gmail.com"><br>
    @error('alamat')
    {{ $message }}
    @enderror
    Nomor Telepon <br><input type="tel" name="no_telp" id="no_telp" placeholder="08** **** ****"><br>
    @error('no_telp')
    {{ $message }}
    @enderror
    Tanggal Lahir <br><input type="date" name="tgl_lahir" id="tgl_lahir"><br>
    @error('tgl_lahir')
    {{ $message }}
    @enderror
    Jenis Kelamin <br><input type="text" name="jk" id="jk" placeholder="L atau P"><br>
    @error('jk')
    {{ $message }}
    @enderror
    <input type="submit" value="Simpan Data">
</form>