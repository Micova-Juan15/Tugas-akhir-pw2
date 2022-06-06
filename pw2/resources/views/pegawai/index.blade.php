<h1>Daftar pegawai</h1>

<button><a href="/pegawai/create">Insert</a></button>

<table border="1">
		<tr>
			<th>No</th>
			<th>ID Pegawai</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
            <th>No Telepon</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
		</tr>
		@foreach($pegawai as $key => $pegawaiData)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $pegawaiData->id_pegawai }}</td>
			<td>{{ $pegawaiData->nama_pegawai }}</td>
			<td>{{ $pegawaiData->email }}</td>
            <td>{{ $pegawaiData->alamat }}</td>
            <td>{{ $pegawaiData->no_telp }}</td>
			<td>{{ $pegawaiData->tanggal_lahir }}</td>
			<td>{{ $pegawaiData->jenis_kelamin }}</td>
			<td>
				<a href="/pegawai/edit/{{ $pegawaiData->id }}">Edit</a>
				|
				<a href="/pegawai/delete/{{ $pegawaiData->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
</table>