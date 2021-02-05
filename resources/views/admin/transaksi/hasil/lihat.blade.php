@extends('layouts.admin.det')
@section('content')

	<div class="row">
		<div class="col-md-12">
			<h3 class="col-md-12">{{$pel->nama}}</h3>
		</div>
	</div>

<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__body">

		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="detrans">
			<thead>
				<tr>
					<th>No.</th>
					<th>Tanggal Transaksi</th>
					<th>kode Nominal</th>
					<th>Token</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>

				
				@foreach($user as $u)
				<tr>
					<td width="2px;">{{++$i}}.</td>
					<td>{{ Carbon\Carbon::parse($u->tanggal_transaksi)->formatLocalized('%A, %d %B %Y')}}</td>
					<td>{{$u->id_token}}</td>
					<td>{{$u->kode_token}}</td>
					<td>{{$u->keterangan}}</td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>
@endsection