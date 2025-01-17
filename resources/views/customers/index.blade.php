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


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="csss/tiny-slider.css">
	<link rel="stylesheet" href="csss/aos.css">
	<link rel="stylesheet" href="csss/style.css">

	<title>VILLA &mdash; BANDUNG </title>
	<style>
		.review-image {
    width: 100%;
    height: auto;
    border-radius: 15px;
	}
	.green-box {
        background-color: #055555; /* Warna hijau */
        padding: 50px;
		width: 150%;
		margin-left: -60%;
		border-radius: 30px;                        
      	box-shadow: 0 8px 10px 10px rgba(0, 0, 0, 0.1);
    }

    .green-box p {
        color: white;
		font-size: 18px;
    }

	.grean-box {
        background-color: #055555; /* Warna hijau */
        padding: 50px;
		width: 150%;
		margin-left: 10%;
		border-radius: 30px;                        
      	box-shadow: 0 8px 10px 10px rgba(0, 0, 0, 0.1);
    }

    .grean-box p {
        color: white;
		font-size: 18px;
    }
	
	.left-align {
    text-align: left;
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
					<a href="index" class="logo m-0 float-start">Villa Bandung.</a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="#home" id="home">Home</a></li>
						<li class="has-children">
							<a href="#villa">Villa</a>
							<ul class="dropdown">
								<li class="has-children">
									<a href="#">Villa Lembang</a>
									<ul class="dropdown">
									@foreach($vilas as $vila)
            @if ($vila->lokasi === 'Lembang') <!-- Ganti 'Lembang' dengan lokasi yang ingin Anda filter -->
                <li>
                    <a href="{{ route('customers.vilas.show', $vila->id) }}">{{ $vila->nama_vila }}</a>
                </li>
            @endif
        @endforeach
									</ul>
								</li>
								<li class="has-children">
									<a href="#">Villa Dago</a>
									<ul class="dropdown">
									@foreach($vilas as $vila)
            @if ($vila->lokasi === 'Dago') <!-- Ganti 'Lembang' dengan lokasi yang ingin Anda filter -->
                <li>
                    <a href="{{ route('customers.vilas.show', $vila->id) }}">{{ $vila->nama_vila }}</a>
                </li>
            @endif
        @endforeach
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="{{ url('/new-peraturan') }}">Peraturan Villa</a></li>
						<li><a href="#contact">Contact Us</a></li>
					</ul>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>

	<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('images/hero_bg_001.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_002.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_003.jpg')"></div>
		</div>

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">Temukan tempat menginap di Villabandung.com</h1>
					<form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
						<input type="text" class="form-control px-4" placeholder="Lembang, Ciwidey, Pangalengan">
						<button type="submit" class="btn btn-primary">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6">
					<h2 class="font-weight-bold text-primary heading" id="villa">Villa & Resorts in Bandung</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<p><a href="{{ route('customers.all') }}" target="_blank" class="btn btn-primary text-white py-3 px-4">Lihat Semua Villa</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="property-slider-wrap">
						<div class="property-slider">

				@foreach($vilas as $vila)
					<!-- Tampilkan satu foto pertama dari setiap vila -->
					@if ($vila->foto && count($vila->foto) > 0)
						<div class="property-item">
						<img src="{{ asset('storage/' . $vila->foto[0]) }}" alt="{{ $vila->nama_vila }}" class="vila-image">
							</a>
							<div class="property-content">
								<div class="price mb-2"><span>{{ $vila->nama_vila }}</span></div>
								<div>
									<span class="city d-block mb-3">{{ $vila->lokasi }}</span>
									<!-- Tampilkan data lainnya seperti jumlah kasur, jumlah kamar mandi, dll. -->
									<div class="specs d-flex mb-4">
									<div class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">{{ $vila->jumlah_kasur }}</span>
									</div>
									</div>
									<div class="specs d-flex mb-5">
								<div class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">{{ $vila->jumlah_kamar_mandi }} kamar mandi</span>
								</div>
								</div>
								<a href="{{ route('customers.vilas.show', $vila->id) }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
								</div>
							</div>
						</div>
					@endif
				@endforeach
						</div>
						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="section sec-testimonials">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">Customer Says</h2>
				</div>
				<div class="col-md-6 text-md-end">
					<div id="testimonial-nav">
						<span class="prev" data-controls="prev">Prev</span>
						
						<span class="next" data-controls="next">Next</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					
				</div>
			</div>
			<div class="testimonial-slider-wrap">
				<div class="testimonial-slider">
				@foreach($reviews as $review)
				@if ($review->photo)
					<div class="item">
						<div class="testimonial">
						<img src="{{ asset('photos/' . $review->photo) }}" alt="Image" class="review-image">
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>
			
		</div>
	</div>
	<div class="section section-4 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-5">
					<h2 class="font-weight-bold heading text-primary mb-4" id="peraturan"style="text-align:left">Peraturan Villa Lembang</h2>
					<div class="green-box">
					@foreach($peraturans as $peraturan)
					<p class="left-align">•  {{ $peraturan->isi }}</p>
					@endforeach
					</div>
				</div>

				<div class="col-lg-5">
				<h2 class="font-weight-bold heading text-primary mb-4" id="peraturan" style="text-align:right">Peraturan Villa Dago</h2>
					<div class="grean-box">
					@foreach($peraturandagos as $peraturandago)
					<p class="left-align">•  {{ $peraturandago->isi }}</p>
					@endforeach
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="section">
		<div class="row justify-content-center footer-cta" data-aos="fade-up">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="mb-4 ">Hubungi Kami Villa Bandung</h2>
				<p><a href="https://api.whatsapp.com/send?phone=6281323961402&text=Hallo%20Saya%20Baik" target="_blank" class="btn btn-primary text-white py-3 px-4" id="contact">Apply for Villa agent</a></p>
			</div> <!-- /.col-lg-7 -->
		</div> <!-- /.row -->
	</div>

<!--
	<div class="section section-5 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-6 mb-5">
					<h2 class="font-weight-bold heading text-primary mb-4">Our Agents</h2>
					<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="images/person_1-min.jpg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">James Doe</a></h2>
							<span class="meta d-block mb-3">Real Estate Agent</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="images/person_2-min.jpg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Jean Smith</a></h2>
							<span class="meta d-block mb-3">Real Estate Agent</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="images/person_3-min.jpg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
							<span class="meta d-block mb-3">Real Estate Agent</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
	<div class="site-footer">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<address>Jl. Ir Djuanda, Kota Bandung dago</address>
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

						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>

						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
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


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
	@include('sweetalert::alert')
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        // Cek apakah session flash "wa_message" ada
        @if(session('wa_message') && session('booking_id'))
        var bookingId = '{{ session('booking_id') }}';
        var waMessage = 'Halo,saya dengan kode booking ' + bookingId + ' tertarik untuk mengetahui lebih lanjut mengenai villa Anda. Apakah saya dapat mendapatkan informasi tentang villa?';
        
            Swal.fire({
                title: 'Pesanan Berhasil',
                text: '{{ session('wa_message') }}',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke halaman chat WA
					window.location.href = "https://api.whatsapp.com/send?phone=6281323961402&text=" + encodeURIComponent(waMessage);
                }
            });
        @endif
    });
</script>
  </body>
  </html>
