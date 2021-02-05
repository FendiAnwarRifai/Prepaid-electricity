@extends('layouts.user.dashboard')
@section('content')
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					List Harga Token
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body" >

		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="harga">
			<thead align="center">
				<tr>
					<th>No.</th>
					<th>Id Token</th>
					<th>Nominal</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				@foreach($token as $token)
				<tr>
					<td width="2px;">{{++$i}}.</td>
					<td>{{$token->kode}}</td>
					<td>{{$token->nominal}}</td>
					<td>Rp. {{number_format($token->harga)}}</td>
					<td>
						<a href="tagihan{{$token->id_token}}.{{Auth::user()->id}}" class="btn btn-danger btn-sm m-btn m-btn--custom">Beli Token Ini</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection