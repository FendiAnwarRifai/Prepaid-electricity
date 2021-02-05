<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		@page {
			margin: 0cm 0cm;
		}
		body {
			margin-top: 2cm;
			margin-left: 2cm;
			margin-right: 2cm;
			margin-bottom: 1.5cm;
		}
		.oke h5{
			float: right;
			border: 2px solid black;
			padding: 3px;
		}
		.oka{
			float: left;
		}
		.oka img{
			width: 30%;
		}
	</style>
</head>
<body>
	<div>
		<div class="oka">
			<img src="form_tambahtoken/images/img-01.png" alt="IMG">
		</div>
		<div class="oke">
			<h5>Kode Transaksi : {{$user->kode_transaksi}}</h5>
		</div>
	</div>
	<br><br><div style="border: 2px solid black;"></div><br>
	<div class="col-md-14">
		<table width="100%">
			<tr>
				<td>

					<div class="form-group">
						<strong>Nama : </strong>{{$user->nama}}
					</div>


					<div class="form-group">
						<strong>Tanggal Lahir : </strong>{{$user->tanggal_lahir}}
					</div>



				</td>

				<td>


					<div class="form-group">
						<strong>Jenis Kelamin : </strong>{{$user->gender}}
					</div>

					<div class="form-group">
						<strong>No. Telp : </strong>{{$user->hp}}
					</div>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<div class="form-group">
					<strong>Alamat : </strong>{{$user->alamat}}
				</div>
			</tr>
		</table>
	</div>

	<br>
	<table border="1" class="table table-striped- table-bordered table-hover table-checkable">
		<thead class="thead-dark">
			<tr class="text-center">
				<th width="10%">Nominal</th>
				<th width="10%">Harga</th>
				<th width="15%">Token</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-center">
				<td>{{$user->nominal}}</td>
				<td>Rp. {{$user->harga}}</td>
				<td>{{$user->kode_token}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>