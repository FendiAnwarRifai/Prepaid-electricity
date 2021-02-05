@extends('layouts.admin.detpel')
@section('content')

@if($user == null)
<center>
	<br><br><br><br><br><br><br><br><br><br><br>
	<h1>Data Masih Kosong, Belum Diisi Oleh User</h1>
</center>
@else
<div class="m-portlet m-portlet--full-height">
	<div class="m-portlet__body">
		<div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5" role="tablist">
			<div class="accordion" id="accordionExample">
				<div class="m-accordion__item m-accordion__item--danger">
					<div class="m-accordion__item-head collapse" id="headingOne" class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<span class="m-accordion__item-icon"><i class="fas fa-user-alt"></i></span>
						<span class="m-accordion__item-title"><font size="2%">{{$user->nama}}</font></span>
						<span class="m-accordion__item-mode"></span>
					</div>

					<div id="collapseOne" class="collapse show m-accordion__item-body" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<table border="1" class="table table-striped- table-bordered table-hover table-checkable text-center">
								<thead>
									<tr>
										<th width="40%"><font size="2%" class="font-weight-bold">Tanggal Lahir</font></th>
										<th width="20%"><font size="2%" class="font-weight-bold">Gender</font></th>
										<th width="40%"><font size="2%" class="font-weight-bold">Telepon</font></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><font size="2%">{{Carbon\Carbon::parse($user->tanggal_lahir)->formatLocalized('%A, %d %B %Y')}}</font></td>
										<td><font size="2%">{{$user->gender}}</font></td>
										<td><font size="2%">{{$user->hp}}</font></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
			<font size="2%">
				<label class="font-weight-bold">Alamat :</label>
				{{$user->alamat}}
			</font>
		</div>
	</div>
</div>
@endif

@endsection