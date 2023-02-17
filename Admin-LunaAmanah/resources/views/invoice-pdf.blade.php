<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <link href="assets/css/invoice.css" rel="stylesheet">
        <title>Luna Amanah</title>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td>
									<h3>Luna Amanah</h3>
								</td>

								<td>
									Invoice #: {{ $pembayaran->id }}<br />
									Created: {{ $pembayaran->created_at }}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Sparksuite, Inc.<br />
									12345 Sunny Road<br />
									Sunnyville, CA 12345
								</td>

								<td>
									{{ $pembayaran->nama_depan }} {{ $pembayaran->nama_belakang }}<br />
									{{ $pembayaran->asal_kota }}, {{ $pembayaran->alamat }}<br />
									{{ $pembayaran->email }}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Nama Paket</td>
					<td>Jenis Paket</td>
					<td>Harga</td>
				</tr>

				<tr class="item">
					<td>{{ $pembayaran->title }}</td>
					<td>{{ $pembayaran->radio }}</td>
					<td>{{ $pembayaran->formatRupiah('harga_paket')}} </td>
				</tr>


				<tr class="total font-weight-bold">
					<td></td>
					<td>Total: </td>
					<td>{{ $pembayaran->formatRupiah('harga_paket')}} </td>
				</tr>
			</table>
		</div>
		
	</body>
</html>