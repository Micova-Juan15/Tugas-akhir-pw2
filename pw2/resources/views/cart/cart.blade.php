@if(empty($keranjang) || count($keranjang) == 0)
    Tidak ada barang di keranjang
@else
    <table cellpaddiing = "1" border="1">
    		<tr>
    			<th>No.</th>
    			<th>Produk</th>
    			<th>Harga</th>
                <th>Sub Total</th>
    			<th>Action</th>
    		</tr>
    		@foreach($cart as $key => $cartData)
            <?php $subtotal= $cartData['harga'] * $cartData['jumlah'];?>
    		<tr>
    			<td>{{ ++$key }}</td>
    			<td>{{ $cartData['nama_barang'] }}</td>
    			<td>{{ number_format($cartData['harga'], 0, ',', '.') }}</td>
    			<td>{{ number_format($$cartData['jumlah'], 0, ',', '.') }}</td>
    			<td>
    				<a href="/keranjang/tambah/{{ $cartData->id_barang }}">Batal</a>
    			</td>
    		</tr>
            <?php $totalKeseluruhan += $subtotal;?>
    		@endforeach
            <tr>
                <td colspan = '4'>Total Keseluruhan</td>
                <td>{{ $totalKeseluruhan }}</td>
            </tr>
    </table>
@endif