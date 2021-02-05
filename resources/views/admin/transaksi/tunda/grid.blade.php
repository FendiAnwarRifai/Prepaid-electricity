@extends('layouts.admin.pending')
@section('content')
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Transaksi User Yang Masih Dipending
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body" >

		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="pending">
			<thead align="center">
				<tr>
					<th>No.</th>
					<th>Nama User</th>
					<th>Tanggal Transaksi</th>
					<th>kode Nominal</th>
					<th>Kode Transaksi</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				@foreach($det as $u)
				<tr>
					<td width="2px;">{{++$i}}.</td>
					<td>{{$u->name}}</td>
					<td>{{ Carbon\Carbon::parse($u->tanggal_transaksi)->formatLocalized('%A, %d %B %Y')}}</td>
					<td>{{$u->id_token}}</td>
					<td>{{$u->kode_transaksi}}</td>
					<td>{{$u->keterangan}}</td>
					<td>
						<form action="gosok{{$u->id_transaksi}}" method="post" enctype="multipart/form-data" class="destroy{{$i}}">
							@csrf
							<a data-toggle="m-popover" data-content="Edit Data User" data-placement="bottom" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="ganti{{$u->id_transaksi}}"><i class="fas fa-user-edit"></i></a>

							<a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air hapus{{$i}}">
								<i class="fas fa-trash-alt"></i>
							</a>
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
		<?php foreach ($det as $u): ?>
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