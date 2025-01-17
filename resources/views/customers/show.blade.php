<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="{{ asset('csss/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('csss/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('csss/style.css') }}">

	<title>VILLA &mdash; BANDUNG </title>
	<style>
        #map {
            height: 400px;
            width: 100%;
        }
		.img-property-slide {
    		display: flex;
		}

		.img-property-slide td {
			flex: 1;
			padding: 10px;
		}

		.vila-image {
			width: 100%;
			height: auto;
			object-fit: cover;
		}
		.p {
			font-size: 40px;
		}
    </style>
	
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<a href="index.html" class="logo m-0 float-start">Villaadibandung.</a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="{{ route('customers.index')}}">Kembali</a></li>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>


	<div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_001.jpg') }}');">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Villa di Bandung</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="{{ route('customers.index')}}">Home</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">{{ $vila->nama_vila }}</li>
						</ol>
					</nav>


				</div>
			</div>


		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
						@foreach ($vila->foto as $photo)
           				 <img src="{{ asset('storage/' . $photo) }}" alt="{{ $vila->nama_vila }}" class="vila-image">
       				 @endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<br>
					<h2 class="heading text-primary">{{ $vila->nama_vila }}, {{ $vila->lokasi }}</h2>
					<script>
				var today = new Date();
				var dayOfWeek = today.getDay(); // Mendapatkan hari dalam bentuk angka (0 = Minggu, 1 = Senin, dst.)

				function isWeekend(day) {
					return day === 0 || day === 6; // Hari 0 (Minggu) dan 6 (Sabtu) adalah akhir pekan
				}
			</script>
			@php
				$dayOfWeek = date('N'); // Mendapatkan hari dalam bentuk angka (1 = Senin, 2 = Selasa, dst.)
			@endphp

			<h3 class="heading text-primary">
				@if ($dayOfWeek >= 6) <!-- Jika akhir pekan -->
					Rp {{ number_format($vila->harga_weekend, 2, ',', '.') }}/Hari (Weekend)
				@else <!-- Jika hari biasa -->
					Rp {{ number_format($vila->harga, 2, ',', '.') }}/Hari (Weekday)
				@endif
			</h3>  
			        <p class="text-black-50 fs-5"><span class="icon-bed me-2"></span>{{ $vila->jumlah_kasur }}</p>
					<p class="text-black-50 fs-5"><span class="icon-bath me-2"></span>{{ $vila->jumlah_kamar_mandi }} kamar mandi</p>
                    <p class="text-black-50 fs-5"><span class="icon-people me-2"></span>{{ $vila->kapasitas }}</p>
					<p class="text-black-50 fs-5">Deskripsi : {{ $vila->deskripsi }}</p>
					<p class="text-black-50 fs-5">Fasilitas : {{ $vila->fasilitas }}</p>
					<div id="map">
        
                    <a href="{{ route('createBookingForm', ['id' => $vila->id]) }}" class="btn btn-primary">Booking</a>

				<!--
					<div class="d-block agent-box p-5">
						<div class="img mb-4">
							<img src="images/person_2-min.jpg" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<h3 class="mb-0">Alicia Huston</h3>
							<div class="meta mb-3">Real Estate</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum quo quos omnis sed magnam id ducimus saepe</p>
							<ul class="list-unstyled social dark-hover d-flex">
								<li class="me-1"><a href="#"><span class="icon-instagram"></span></a></li>
								<li class="me-1"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="me-1"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="me-1"><a href="#"><span class="icon-linkedin"></span></a></li>

							</ul>
						</div>
					</div>
				-->


				</div>
			</div>
		</div>
	</div>
	<div class="site-footer">
	<div class="container">
			
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<address>Jl. Ir Djuanda, Kota Bandung  Dago</address>
						<ul class="list-unstyled links">
							<li><a href="tel://11234567890">+62(022)-456-7890</a></li>
							<li><a href="tel://11234567890">+62 85462548526</a></li>
							<li><a href="mailto:info@mydomain.com">info@viladibandung.com</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Sources</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
							<li><a href="#">Our Vision</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>

						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
					<!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; by <a href=" ">Allin.studio</a> <!-- License information: https://untree.co/license/ -->
            </p>

          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->




    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
  </body>
  </html>
