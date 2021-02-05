@extends('layouts.admin.layoutsberanda')
@section('content')
@include('layouts.admin.csstambahtoken')
<div class="contact1">
	<div class="container-contact1">
		<div class="contact1-pic js-tilt" data-tilt>
			<img src="form_tambahtoken/images/img-01.png" alt="IMG">
		</div>

		<form class="contact1-form validate-form" action="store_token" method="post" autocomplete="off">
			@csrf
			<span class="contact1-form-title">
				Tambah Nominal Token
			</span>

			<div class="wrap-input1 validate-input">
				<input required class="input1" type="text" name="kode" placeholder="Id Token" value="PLN">
				<span class="shadow-input1"></span>
			</div>

			<div class="wrap-input1 validate-input" data-validate = "Nominal is required">
				<input required class="input1" type="text" name="nominal" placeholder="Nominal" data-mask="000.000.000" data-mask-reverse="true">
				<span class="shadow-input1"></span>
			</div>

			<div class="wrap-input1 validate-input" data-validate = "Harga is required">
				<input required class="input1" type="text" name="harga" placeholder="Harga" data-mask="000.000.000" data-mask-reverse="true">
				<span class="shadow-input1"></span>
			</div>

			<div class="container-contact1-form-btn">
				<button class="contact1-form-btn">
					<span>
						Tambah Nominal
						<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
					</span>
				</button>
			</div>
		</form>
	</div>
</div>
@include('layouts.admin.jstambahtoken')
<script >
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
@endsection