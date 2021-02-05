@extends('layouts.admin.layoutsberanda')
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
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<a href="create_token" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>Tambah Data</span>
						</span>
					</a>
				</li>
			</ul>
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
					<td>{{number_format($token->nominal)}}</td>
					<td>Rp. {{number_format($token->harga)}}</td>
					<td>
						<form action="destroy{{$token->id_token}}" method="post" class="destroy{{$i}}">
							@csrf
							<a href="edit_token{{$token->id_token}}" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air"><i class="fa fa-user-edit"></i></a>
							
							<a href="#" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air hapus{{$i}}"><i class="fa fa-trash"></i></a>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){ 
		<?php foreach ($token as $token): ?>
			var q{{++$d}} = {{$b++}};
			$('.hapus'+q{{$d}}+'').click(function(){  
				Swal.fire({
					title: 'Apakah Anda Yakin Untuk Menghapus Data Ini?',
					text: "Data Yang Sudah Dihapus Akan Hilang Permanent!",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Hapus Data Ini!',
					cancelButtonText: 'Tidak, Cancel!',
				}).then((result) => {
					if (result.value) {
						$('.destroy'+q{{$d}}+'').submit();
					}
				});
			});
		<?php endforeach ?> 
		
	});
</script>
@endsection