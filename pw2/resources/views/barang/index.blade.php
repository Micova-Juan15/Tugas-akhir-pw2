<h1>Daftar Barang</h1>
<a href="/barang/create">Create barang</a>

<table border="1">
		<tr>
			<th>No</th>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Keterangan</th>
			<th>Action</th>
		</tr>
		@foreach($barang as $key => $barangData)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $barangData->id_barang }}</td>
			<td>{{ $barangData->nama_barang }}</td>
			<td>{{ number_format($barangData->harga, 0, ',', '.') }}</td>
			<td>{{ number_format($barangData->stok->jumlah, 0, ',', '.') }}</td>
			<td>{{ $barangData->stok->keterangan }}</td>
			<td>
				<a href="/barang/edit/{{ $barangData->id_barang }}">Edit</a>
				|
				<a href="/barang/delete/{{ $barangData->id_barang }}">Hapus</a>
			</td>
		</tr>
		@endforeach
</table>