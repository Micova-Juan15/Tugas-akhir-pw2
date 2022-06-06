<h2>Edit Pelanggan</h2>
@if (session()->has('info'))
    <div class="alert alert-success">
        {{ session()->get('info') }}
    </div>
@endif
<form action="{{ url('pelanggan/update/'. $pelanggan->id_pelanggan) }}" method="POST">
    @csrf
    @method("PATCH")    
    Nama <br><input type="text" name="nama" id="nama" value="{{ $pelanggan->nama_pelanggan }}"> <br>
    @error('nama')
    {{ $message }}
    @enderror
    Email <br><input type="email" name="email" id="email" value="{{ $pelanggan->email }}"><br>
    @error('email')
    {{ $message }}
    @enderror
    Alamat <br><input type="text" name="alamat" id="alamat" value="{{ $pelanggan->alamat }}"><br>
    @error('alamat')
    {{ $message }}
    @enderror
    Nomor Telepon <br><input type="tel" name="no_telp" id="no_telp" value="{{ $pelanggan->no_telp }}"><br>
    @error('no_telp')
    {{ $message }}
    @enderror
    Tanggal Lahir <br><input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $pelanggan->tanggal_lahir }}"><br>
    @error('tgl_lahir')
    {{ $message }}
    @enderror
    Jenis Kelamin <br><input type="text" name="jk" id="jk" value="{{ $pelanggan->jenis_kelamin }}"><br>
    @error('jk')
    {{ $message }}
    @enderror
    <input type="submit" value="Simpan Data">
</form>