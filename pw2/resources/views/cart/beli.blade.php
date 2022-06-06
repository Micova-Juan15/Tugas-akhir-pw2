<h1>Daftar Produk</h1>

<table border="1">
		<tr>
			<th>Produk</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Action</th>
		</tr>
		@foreach($barang as $key => $barangData)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $barangData->nama_barang }}</td>
			<td>{{ number_format($barangData->harga, 0, ',', '.') }}</td>
			<td>{{ number_format($barangData->stok->jumlah, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjang/tambah/{{ $barangData->id_barang }}">Tambah ke keranjang</a>
			</td>
		</tr>
		@endforeach
</table>