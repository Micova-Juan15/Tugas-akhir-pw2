<h1>Daftar pelanggan</h1>

<button><a href="/pelanggan/create">Insert</a></button>

<table border="1">
		<tr>
			<th>No</th>
			<th>ID Pelanggan</th>
			<th>Nama</th>
			<th>No Telepon</th>
			<th>Email</th>
			<th>Alamat</th>       
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
		</tr>
		@foreach($pelanggan as $key => $pelanggan)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $pelanggan->id_pelanggan }}</td>
			<td>{{ $pelanggan->nama_pelanggan }}</td>
			<td>{{ $pelanggan->no_telp }}</td>
			<td>{{ $pelanggan->email }}</td>
            <td>{{ $pelanggan->alamat }}</td>
			<td>{{ $pelanggan->tanggal_lahir }}</td>
			<td>{{ $pelanggan->jenis_kelamin }}</td>
			<td>
				<a href="/pelanggan/edit/{{ $pelanggan->id_pelanggan }}">Edit</a>
				|
				<a href="/pelanggan/delete/{{ $pelanggan->id_pelanggan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
</table>