@extends('layouts.user.transaksipending')
@section('content')
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Transaksi Pending
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body" >

		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="detail">
			<thead align="center">
				<tr>
					<th>No.</th>
					<th>Tanggal Transaksi</th>
					<th>kode Nominal</th>
					<th>Kode Transaksi</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody align="center">
				@foreach($detail as $d)
				<tr>
					<td width="2px;">{{++$i}}.</td>
					<td>{{ Carbon\Carbon::parse($d->tanggal_transaksi)->formatLocalized('%A, %d %B %Y')}}</td>
					<td>{{$d->id_token}}</td>
					<td>{{$d->kode_transaksi}}</td>
					<td>{{$d->keterangan}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<span style="color: red;">Jika belum melakukan pembayaran, anda tidak dapat mencetak hasil transaksi</span>
	</div>
</div>
@endsection