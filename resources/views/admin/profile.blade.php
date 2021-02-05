@extends('layouts.admin.profil')
@section('content')
<?php if ($pel == null): ?>
	<!-- BEGIN: Subheader -->
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="m-subheader__title ">Profile Admin</h3>
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
									<!-- <img src="tampilan/assets/app/media/img/users/user6.png" alt=""> -->

									<!-- <figure class="effect-winston"> -->
									<img src="tampilan/assets/app/media/img/users/user6.png" alt="img30"/><!-- 
									<figcaption>
										<p>
											<a href="#"><i class="fa fa-fw fa-camera"></i></a>
										</p>
									</figcaption>	 -->		
									<!-- </figure> -->

								</div>
							</div>
							<div class="m-card-profile__details">
								<span class="m-card-profile__name">{{ Auth::user()->name }}</span>
								<a href="" class="m-card-profile__email m-link">{{ Auth::user()->email }}</a>
							</div>
						</div>
						<ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
							<li class="m-nav__item">
								<a href="change" class="m-nav__link">
									<i class="m-nav__link-icon fas fa-key" aria-hidden="true"></i>
									<span class="m-nav__link-text">Ganti Password</span>
								</a>
							</li>
							<form action="reset{{$test->id}}" method="post" class="ganti">
								@csrf
							<li class="m-nav__item">
								<a href="#" class="m-nav__link reset">
									<i class="m-nav__link-icon fas fa-redo"></i>
									<span class="m-nav__link-text">Reset Password</span>
								</a>
							</li>
						</form>
						</ul>
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
										Update Profile
									</a>
								</li>
							</ul>
						</div>

					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="m_user_profile_tab_1">
							<form class="m-form m-form--fit m-form--label-align-right" method="post" action="saveprof">
								@csrf
								<div class="m-portlet__body">
									<div class="form-group m-form__group row">
										<div class="col-12 ml-auto">
											<h3 class="m-form__section">Rincian Profile Anda</h3>
										</div>
									</div>
									<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label">Nama Lengkap</label>
										<div class="col-7">
											<input class="form-control" type="text" name="nama" value="{{ Auth::user()->name }}">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label">Tanggal Lahir</label>
										<div class="col-7">
											<input readonly class="form-control" name="tanggal_lahir" type="text" id="datepicker" value="">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label">Nomor Hp</label>
										<div class="col-7 only-number">
											<input class="form-control number" type="text" name="hp" value="">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label">Alamat</label>
										<div class="col-7">
											<textarea class="form-control" name="alamat"></textarea>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label"></label>
										<div class="col-7">
											<!-- <input class="form-control m-input" type="text" value="Keenthemes"> -->
											<div class="m-radio-inline">
												<label class="m-radio">
													<input type="radio" name="gender" value="perempuan"> Perempuan
													<span></span>
												</label>
												<label class="m-radio">
													<input type="radio" name="gender" value="laki-laki"> Laki - Laki
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
												<a href="/home" class="btn btn-danger m-btn m-btn--air m-btn--custom">Cancel</a>
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
	<?php else: ?>
		<!-- BEGIN: Subheader -->
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">Profile Admin</h3>
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
										<!-- <img src="tampilan/assets/app/media/img/users/user6.png" alt=""> -->

										<!-- <figure class="effect-winston"> -->
									<img src="tampilan/assets/app/media/img/users/user6.png" alt="img30"/><!-- 
									<figcaption>
										<p>
											<a href="#"><i class="fa fa-fw fa-camera"></i></a>
										</p>
									</figcaption>	 -->		
									<!-- </figure> -->

								</div>
							</div>
							<div class="m-card-profile__details">
								<span class="m-card-profile__name">{{ Auth::user()->name }}</span>
								<a href="" class="m-card-profile__email m-link">{{ Auth::user()->email }}</a>
							</div>
						</div>
						<ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
							<li class="m-nav__item">
								<a href="change" class="m-nav__link">
									<i class="m-nav__link-icon fas fa-key" aria-hidden="true"></i>
									<span class="m-nav__link-text">Ganti Password</span>
								</a>
							</li>
							<form action="reset{{$test->id}}" method="post" class="ganti">
								@csrf
								<li class="m-nav__item">
									<a href="#" class="m-nav__link reset">
										<i class="m-nav__link-icon fas fa-redo"></i>
										<span class="m-nav__link-text">Reset Password</span>
									</a>
								</li>
							</form>
						</ul>
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
										Update Profile
									</a>
								</li>
							</ul>
						</div>

					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="m_user_profile_tab_1">
							<form class="m-form m-form--fit m-form--label-align-right" method="post" action="saveprof">
								@csrf
								<div class="m-portlet__body">
									<div class="form-group m-form__group row">
										<div class="col-12 ml-auto">
											<h3 class="m-form__section">Rincian Profile Anda</h3>
										</div>
									</div>
									<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label">Nama Lengkap</label>
										<div class="col-7">
											<input class="form-control" type="text" name="nama" value="{{ Auth::user()->name }}">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label">Tanggal Lahir</label>
										<div class="col-7">
											<input readonly class="form-control" name="tanggal_lahir" type="text" id="datepicker" value="{{$pel->tanggal_lahir}}">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label">Nomor Hp</label>
										<div class="col-7 only-number">
											<input class="form-control number" type="text" name="hp" value="{{$pel->hp}}">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label">Alamat</label>
										<div class="col-7">
											<textarea class="form-control" name="alamat">{{$pel->alamat}}</textarea>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-3 col-form-label"></label>
										<div class="col-7">
											<!-- <input class="form-control m-input" type="text" value="Keenthemes"> -->
											<div class="m-radio-inline">
												<label class="m-radio">
													<input type="radio" name="gender" value="perempuan" <?php echo ($pel->gender =='perempuan')?'checked':'' ?>> Perempuan
													<span></span>
												</label>
												<label class="m-radio">
													<input type="radio" name="gender" value="laki-laki" <?php echo ($pel->gender =='laki-laki')?'checked':'' ?>> Laki - Laki
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
												<a href="/home" class="btn btn-danger m-btn m-btn--air m-btn--custom">Cancel</a>
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
<?php endif ?>
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
		<script type="text/javascript">
			$(document).ready(function(){ 
				$('.reset').click(function(){  
					Swal.fire({
						title: 'Apakah Anda Yakin Untuk Mereset Password?',
						text: "Password Setelah Reset Adalah APTL",
						type: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Ya, Saya Yakin!',
						cancelButtonText: 'Tidak, Cancel!',
					}).then((result) => {
						if (result.value) {
							$('.ganti').submit();
						}
					});
				});

			});
		</script>
		@endsection