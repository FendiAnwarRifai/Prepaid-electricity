@extends('layouts.user.dashboard')
@section('content')
<style type="text/css">
	.test{
		margin-left: 20%; 
		margin-right: 20%;
	}
	@media (max-width: 1000px) {
		.test{
			margin-left: 0;
			margin-right: 0;
		}
	}
	table{
		font-size: 15px;
	}
</style>
<div class="m-portlet m-portlet--mobile test" >
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3>
					Rincian Pembelian Token
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body" >
		<form action="checkout{{$harga->kode}}.{{$login->id}}" method="post" enctype="multipart/form-data">
			@csrf
			<table id="tab">
				<tr>
					<td>
						<div class="col-md-12">
							<div class="form-group">
								<strong>Nama Pembeli : </strong>
								<br>
								{{$pel->nama}}
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<strong>Alamat Pembeli: </strong>
								<br>
								{{$pel->alamat}}
							</div>
						</div>
					</td>
				</tr>
			</table>
			<br>
			<table border="1" class="table table-striped- table-hover table-checkable">
				<thead class="thead-dark">
					<tr class="text-center">
						<th width="15%">Id Token</th>
						<th width="15%">Nominal</th>
						<th width="15%">Harga</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-center">
						<td>{{$harga->kode}}</td>
						<td>{{$harga->nominal}}</td>
						<td>Rp. {{$harga->harga}}</td>
						<?php 
						$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
						$acak = substr(str_shuffle($permitted_chars), 0, 4).'-'.substr(str_shuffle($permitted_chars), 0, 4).'-'.substr(str_shuffle($permitted_chars), 0, 4).'-'.substr(str_shuffle($permitted_chars), 0, 4);
						?>
						<input type="hidden" name="kode_transaksi" value="{{$acak}}">
						<input type="hidden" name="id_token" value="{{$harga->kode}}">
					</tr>
				</tbody>
			</table>
			<div class="m-portlet__foot m-portlet__foot--fit">
				<div class="m-form__actions">
					<div class="row">
						<div class="col-3">
						</div>
						<div class="col-7">
							<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Checkout</button>&nbsp;&nbsp;
							<a href="beranda" class="btn btn-danger m-btn m-btn--air m-btn--custom">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection