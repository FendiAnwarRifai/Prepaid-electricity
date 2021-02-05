@extends('layouts.user.detrans')
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
		<table class="table table-striped- table-bordered table-hover table-checkable" id="detrans">
			<thead align="center">
				<tr>
					<th>No.</th>
					<th>Tanggal Transaksi</th>
					<th>kode Nominal</th>
					<th>Token</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				@foreach($user as $u)
				<tr>
					<td width="2px;">{{++$i}}.</td>
					<td>{{ Carbon\Carbon::parse($u->tanggal_transaksi)->formatLocalized('%A, %d %B %Y')}}</td>
					<td>{{$u->id_token}}</td>
					<td>{{$u->kode_token}}</td>
					<td>{{$u->keterangan}}</td>
					<td>
						<form class="cetak{{$i}}" action="cetak_pdf{{$u->id}}{{$u->id_transaksi}}" method="get">
							@csrf
							<a class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--pill m-btn--air pdf{{$i}}" href="#">
								<i class="fas fa-file-pdf"></i>
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
		<?php foreach ($user as $u): ?>
			var q{{++$d}} = {{$b++}};
			$('.pdf'+q{{$d}}+'').click(function(){  
				Swal.fire({
					title: 'Cetak Transaksi Ini?',
					text: "Transaksi Akan Didownload!",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: 'blue',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Cetak Transaksi Ini!',
					cancelButtonText: 'Tidak, Cancel!',
				}).then((result) => {
					if (result.value) {
						$('.cetak'+q{{$d}}+'').submit();
					}
				});
			});
		<?php endforeach ?> 
		
	});
</script>
@endsection