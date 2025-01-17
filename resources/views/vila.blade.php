
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <style>
      /* Tambahkan gaya CSS untuk memperkecil ukuran teks pada logo */
      .logo {
          font-size: 25px; /* Ganti nilai ini sesuai dengan ukuran yang Anda inginkan */
      }
  </style>
  </head>
  <body>
		<div class="sidebar-inner-slimscroll">
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">VILLA BANDUNG</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="home"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="vila"><span class="fa fa-building mr-3"></span> Villa Management</a>
	          </li>
            <li>
              <a href="{{ route('booking.index') }}"><span class="fa fa-users mr-3"></span> Data Transaksi</a>
            </li>
	          <li>
              <a href="pegawai"><span class="fa fa-briefcase mr-3"></span> Data Pegawai</a>
	          </li>
              <li>
              <a href="{{ route('logout') }}"><span class="fa fa-sign-out mr-3"></span> Logout</a>
	          </li>
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">@if(auth()->check())
    <p>Selamat datang, {{ auth()->user()->name }}</p>
@else
    <p>Silahkan login untuk melihat halaman ini.</p>
@endif</h2>
    <div class="container-fluid">
        <h2>Create Villa</h2>
		<form action="{{ route('vila.store') }}" method="POST" enctype="multipart/form-data">
			            @csrf
            <div class="form-group">
                <label for="nama_vila">Nama Villa</label>
                <input type="text" class="form-control" id="nama_vila" name="nama_vila" required>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="jumlah_kasur">Jumlah Kasur</label>
                <input type="number" class="form-control" id="jumlah_kasur" name="jumlah_kasur" required>
            </div>
            <div class="form-group">
                <label for="jumlah_kamar_mandi">Jumlah Kamar Mandi</label>
                <input type="number" class="form-control" id="jumlah_kamar_mandi" name="jumlah_kamar_mandi" required>
            </div>
			<div class="form-group">
                <label for="foto">Foto Vila</label>
                <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
	</div>
		</div>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
