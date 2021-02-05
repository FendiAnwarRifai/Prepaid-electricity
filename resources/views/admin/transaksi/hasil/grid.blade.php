@extends('layouts.admin.det')
@section('content')
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Detail Transaksi user
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
					<th>Nama</th>
					<th>Telepon</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				@foreach($user as $u)
				<?php
				$us= DB::table('users')
				->join('detail_transaksi','detail_transaksi.id_user','=','users.id')
				->where('users.id','=',$u->id_user);
				?>
				@if($us->count() == 0)
				
				@else
				<tr>
					<td width="2px;">{{++$i}}</td>
					<td>{{$u->name}}</td>
					<td>{{$u->hp}}</td>
					<td>{{$u->email}}</td>
					<td>
						<form action="ilang{{$u->id}}" method="post" enctype="multipart/form-data" class="destroy{{$i}}">
							@csrf
							<a class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air" href="lihat{{$u->id}}"><i class="fas fa-id-card"></i></a>

							<a href="#" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air hapus{{$i}}">
								<i class="fas fa-trash-alt"></i>
							</a>
						</form>
					</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){ 
		<?php foreach ($user as $u): ?>
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