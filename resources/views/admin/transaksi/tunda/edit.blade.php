@extends('layouts.admin.pending')
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
</style>
<div class="m-portlet m-portlet--mobile test" >
	<!--begin::Portlet-->
	@if($errors->any())
	<div class="alert alert-danger">
		<strong>Data ada yang kosong!!</strong> Tolong diperiksa kembali.<br>
		<ul>
			@foreach ($errors as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
					Kelola Transaksi
				</h3>
			</div>
		</div>
	</div>

	<!--begin::Form-->
	<form class="m-form m-form--label-align-right" method="POST" action="up{{$user->id_transaksi}}">
		@csrf
		<div class="m-portlet__body">
			<div class="m-form__section m-form__section--first">
				<div class="form-group m-form__group row">
					<label class="col-lg-3 col-form-label">Nama User:</label>
					<div class="col-lg-6">
						<label class="col-form-label">{{$user->name}}</label>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-lg-3 col-form-label">Kode Transaksi:</label>
					<div class="col-lg-6">
						<label class="col-form-label">{{$user->kode_transaksi}}</label>
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-lg-3 col-form-label">Status:</label>
					<div class="col-lg-6">
						@if($user->keterangan == '0')
							<input type="hidden" name="keterangan" value="0">
							<input data-switch="true" type="checkbox" data-on-color="info" data-on-text="Success" data-handle-width="50" data-off-text="Pending" data-off-color="danger" name="keterangan" value="1">
							@endif
					</div>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-6">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<a href="pending"class="btn btn-secondary">Batal</a>
					</div>
				</div>
			</div>
		</div>
	</form>

	<!--end::Form-->
</div>
<!--end::Portlet-->
@endsection