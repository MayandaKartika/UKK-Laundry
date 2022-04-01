<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Rekap Laporan Laundry</h4>
	</center>
 
	<table class='table table-bordered table-hover '>
	<thead>
		<tr class="table-info">
			<th class="text-center">No</th>
			<th class="text-center">Kode Invoice</th>
			<th class="text-center">Nama Pelanggan</th>
			<th class="text-center">Telpon Pelanggan</th>
			<th class="text-center">Outlet</th>
			<th class="text-center">Status</th>
			<th class="text-center">Tanggal</th>
		</tr>
	</thead>
	<tbody>
		@foreach($jquin as $laporan)
		<tr>
			<td class="text-center">{{ $loop->iteration }}</td>
			<td class="text-center">{{ $laporan->kode_invoice }}</td>
			<td class="text-center">{{ $laporan->pelanggan->nama }}</td>
			<td class="text-center">{{ $laporan->pelanggan->tlp }}</td>
			<td class="text-center">{{ $laporan->outlet->nama }}</td>
			<td class="text-center">{{ ucwords($laporan->status) }}</td>
			<td class="text-center">{{ $laporan->tanggal() }}</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	<li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
        <span class="cost-title mr-2"> </span>
    </li>
</body>
</html>