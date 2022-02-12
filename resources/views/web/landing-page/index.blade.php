@extends('web.layout.layout')

@section('content')

<div class="banner-top">
	<img src="{{asset('assets/image/banner_top.png')}}" class="banner-image" style="width:100%;">
	<div class="banner-content container">
		<h6 class="top-title">
			CHECK EARLIER, PREVENT EARLIER
		</h6>
		<h1 class="big-title">
			Take care of your body and it will take care of you
		</h1>
		<p class="description-title">Temukan dokter spesialis sesuai dengan kebutuhan anda kapanpun</p>
		<ul style="list-style: none;">
			<li>
				<a href="" class="orange-button">Do health check right now</a>
			</li>
			<li>
				<a href="" class="orange-light-button">Learn more</a>
			</li>
		</ul>
	</div>
</div>

<div class="text-center mouse-scroll" style="margin-top: 100px;">
	<img src="{{asset('assets/image/mouse.png')}}">
	<p>Scroll down</p>
</div>		

<div class="out-service">
	<div class="container">
		<div class="row">
			<div class="content-internal">
				<div class="column">
					<div class="box-image">
						<img src="{{asset('assets/image/intro_1.png')}}">
					</div>
					<div class="content">
						<p class="title">Pelayanan mudah, dengan aplikasi</p>
						<p class="description-image">Cari dan temukan kebutuhan medis Anda dengan tepat</p>
					</div>
				</div>
				<div class="column-special">
					<div class="box-image">
						<img src="{{asset('assets/image/intro_2.png')}}">
					</div>
					<div class="content">
						<p class="title">Konsultasi dengan Dokter spesialis</p>
						<p class="description-image">Temukan dokter spesialis sesuai dengan kebutuhan anda kapanpun.</p>
					</div>
				</div>
				<div class="column">
					<div class="box-image">
						<img src="{{asset('assets/image/intro_3.png')}}">
					</div>
					<div class="content">
						<p class="title">Promo khusus untuk Semua tes Covid-19</p>
						<p class="description-image">Dapatkan penawaran menarik untuk Anda yang membutuhkan tes Covid-19.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="download-apps">
	<div class="row">

		<div class="box-orange">											
			<p class="box-title">Lebih ringkas dengan aplikasi</p>
			<p class="box-desc">Download aplikasi Helix Laboratorium untuk pengalman yang lebih ringkas</p>
			
			
		</div>
	

	<div class="box-link">
		
		<ul  style="list-style: none;">
			<div class="row">
			<li>
				<a href="">
					<img src="{{asset('assets/image/ic_google_play.png')}}">
				</a>
			</li>
			<li>
				<a href="">
					<img src="{{asset('assets/image/ic_apps_store.png')}}">
				</a>
			</li>
			</div>
			</ul>
		
		</div>
	</div>
</div>
@endsection