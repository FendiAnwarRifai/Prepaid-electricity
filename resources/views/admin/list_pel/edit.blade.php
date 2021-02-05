@extends('layouts.admin.listpel')
@section('content')
<!-- BEGIN: Subheader -->
<div class="d-flex align-items-center">
	<div class="mr-auto">
		<h3 class="m-subheader__title ">Data User</h3>
	</div>
</div>

<!-- END: Subheader -->
<div class="m-content">
	<div class="row">
		<div class="col-lg-4">
			<div class="m-portlet m-portlet--full-height  ">
				<div class="m-portlet__body">
					<div class="m-card-profile">
						<div class="m-card-profile__pic">
							<div class="m-card-profile__pic-wrapper grid">
								<img src="tampilan/assets/app/media/img/users/user6.png" alt="img30"/>
							</div>
						</div>
						<div class="m-card-profile__details">
							<span class="m-card-profile__name">{{ $user->name }}</span>
							<a href="" class="m-card-profile__email m-link">{{ $user->email }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
				<div class="m-portlet__head">
					<div class="m-portlet__head-tools">
						<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
							<li class="nav-item m-tabs__item">
								<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
									<i class="flaticon-share m--hide"></i>
									Update Data User
								</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="m_user_profile_tab_1">
						<form class="m-form m-form--fit m-form--label-align-right" method="post" action="update{{ $user->id }}">
							@csrf
							<div class="m-portlet__body">
								<div class="form-group m-form__group row">
									<div class="col-12 ml-auto">
										<h3 class="m-form__section">Rincian Data User</h3>
									</div>
								</div>
								<input type="hidden" name="id_pelanggan" value="{{ $user->id_pelanggan }}">
								<div class="form-group m-form__group row">
									<label for="example-text-input" class="col-3 col-form-label">Nama Lengkap</label>
									<div class="col-7">
										<input class="form-control" type="text" name="nama" value="{{ $user->name }}">
									</div>
								</div>
								<div class="form-group m-form__group row">
									<label for="example-text-input" class="col-3 col-form-label">Tanggal Lahir</label>
									<div class="col-7">
										<input readonly class="form-control" name="tanggal_lahir" type="text" id="datepicker" value="{{$user->tanggal_lahir}}">
									</div>
								</div>
								<div class="form-group m-form__group row">
									<label for="example-text-input" class="col-3 col-form-label">Nomor Hp</label>
									<div class="col-7 only-number">
										<input class="form-control number" type="text" name="hp" value="{{$user->hp}}">
									</div>
								</div>
								<div class="form-group m-form__group row">
									<label for="example-text-input" class="col-3 col-form-label">Email</label>
									<div class="col-7">
										<input class="form-control" type="email" name="email" value="{{$user->email}}" required autocomplete="email">
									</div>
								</div>
								<div class="form-group m-form__group row">
									<label for="example-text-input" class="col-3 col-form-label">Alamat</label>
									<div class="col-7">
										<textarea class="form-control" name="alamat">{{$user->alamat}}</textarea>
									</div>
								</div>
								<div class="form-group m-form__group row">
									<label for="example-text-input" class="col-3 col-form-label"></label>
									<div class="col-7">
										<!-- <input class="form-control m-input" type="text" value="Keenthemes"> -->
										<div class="m-radio-inline">
											<label class="m-radio">
												<input type="radio" name="gender" value="perempuan" <?php echo ($user->gender =='perempuan')?'checked':'' ?>> Perempuan
												<span></span>
											</label>
											<label class="m-radio">
												<input type="radio" name="gender" value="laki-laki" <?php echo ($user->gender =='laki-laki')?'checked':'' ?>> Laki - Laki
												<span></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="m-portlet__foot m-portlet__foot--fit">
								<div class="m-form__actions">
									<div class="row">
										<div class="col-3">
										</div>
										<div class="col-7">
											<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Simpan Perubahan</button>&nbsp;&nbsp;
											<a href="listpel" class="btn btn-danger m-btn m-btn--air m-btn--custom">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$("#datepicker").datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true,
		});
	});
</script>
<script>

			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
		<script>
			$(function() {
				$('.only-number').on('keydown', '.number', function(e){
					-1!==$
					.inArray(e.keyCode,[46,8,9,27,13,110,190]) || /65|67|86|88/
					.test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
					|| 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey|| 48 > e.keyCode || 57 < e.keyCode)
					&& (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
				});
			})
		</script>
		@endsection