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
    #filterButton {
        font-size: 18px;
    }

    #filterOptions {
        display: none;
        margin-top: 10px;
    }

    #filterOptions a {
        display: block;
        font-size: 18px;
        margin-bottom: 5px;
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
				
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row mb-6 align-items-center">
				<div class="col-lg-6">
				</div>
			</div>
            <div class="mb-4">
    <button class="btn btn-secondary" id="filterButton">Filter</button>
</div>

<div id="filterOptions" style="display: none;" class="col-md-6">
<div class="d-flex flex-row">
    <a href="#" id="filterHarga" button class="btn btn-secondary mr-2" >Filter Harga</a>
    <a href="#" id="filterLokasi" button class="btn btn-secondary">Filter Lokasi</a>
</div>
</div>
<div id="filterHargaForm" style="display: none;">

<form action="{{ route('customers.filter') }}" method="GET">
    <div class="row mb-4">
        <div class="col-md-4">
        <label for="harga" class="form-label">Harga (Min-Max)</label>
    <input type="text" name="harga_min" class="form-control" placeholder="Harga Minimum">
    <input type="text" name="harga_max" class="form-control" placeholder="Harga Maksimum">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary mt-4">Terapkan Filter</button>
        </div>
    </div>
</form>
</div>
<div id="filterLokasiForm" style="display: none;">
<form action="{{ route('customers.filterr') }}" method="GET">
    <div class="row mb-4">
        <div class="col-md-4">
        <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary mt-4">Terapkan Filter</button>
        </div>
    </div>
</form>
</div>
<script>
    document.getElementById('filterButton').addEventListener('click', function() {
        var filterOptions = document.getElementById('filterOptions');
        filterOptions.style.display = (filterOptions.style.display === 'none') ? 'block' : 'none';
    });

    document.getElementById('filterHarga').addEventListener('click', function() {
        var filterHargaForm = document.getElementById('filterHargaForm');
        var filterLokasiForm = document.getElementById('filterLokasiForm');
        filterHargaForm.style.display = 'block';
        filterLokasiForm.style.display = 'none';
    });

    document.getElementById('filterLokasi').addEventListener('click', function() {
        var filterHargaForm = document.getElementById('filterHargaForm');
        var filterLokasiForm = document.getElementById('filterLokasiForm');
        filterHargaForm.style.display = 'none';
        filterLokasiForm.style.display = 'block';
    });
</script>

@php
    $hasFilteredLokasi = \Illuminate\Support\Facades\Session::has('filtered_vilas');
    $filteredVilas = $hasFilteredLokasi ? \Illuminate\Support\Facades\Session::get('filtered_vilas') : $vilas;
@endphp

@foreach($filteredVilas as $index => $vila)
				@if ($vila->foto && count($vila->foto) > 0)
					@if ($index % 3 == 0)
						<div class="row g-4">
					@endif
						<div class="col-md-4">
							<div class="card">
								<img src="{{ asset('storage/' . $vila->foto[0]) }}" alt="{{ $vila->nama_vila }}" class="vila-image img-fluid">
								<div class="card-body">
									<h4 class="card-title">{{ $vila->nama_vila }} <h5 class="card-text"><span class="icon-money me-1"></span>Rp {{ number_format($vila->harga, 2, ',', '.') }}/Hari</h5>
</h4>
									<p class="card-text">{{ $vila->lokasi }}</p>
									<p class="card-text"><span class="icon-bed me-1"></span>{{ $vila->jumlah_kasur }}</p>
									<p class="card-text"><span class="icon-bath me-1"></span>{{ $vila->jumlah_kamar_mandi }} kamar mandi</p>
									<a href="{{ route('customers.vilas.show', $vila->id) }}" class="btn btn-primary">Lihat Detail</a>
								</div>
							</div><p></p><br><p></p>
						</div>
					@if (($index + 1) % 3 == 0 || $index == count($vilas) - 1)
						</div>
					@endif
				@endif
			@endforeach
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


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
  </html>