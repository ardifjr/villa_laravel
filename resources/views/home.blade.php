
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
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">VILA BANDUNG</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="vila"><span class="fa fa-building mr-3"></span> Villa Management</a>
	          </li>
			  <li>
				<a href="{{ route('booking.index') }}"><span class="fa fa-book mr-3"></span> Data Transaksi</a>
			  </li>
	          <li>
              <a a href="{{ route('pegawai.index') }}"><span class="fa fa-briefcase mr-3"></span>Admin</a>
	          </li>
              <li>
			  <li>
              <a a href="{{ route('reviews.index') }}"><span class="fa fa-star mr-3"></span>Review</a>
	          </li>
			  <li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expended="false">
				<span class="fa fa-warning mr-3"></span> Peraturan Villa </a>
			  <ul class="dropdown-menu" role="menu" style="background-color: #055555;">
			  	<li><a href="{{ route('peraturan.index') }}" style="color: #fff;">Villa Lembang</a></li>
				<li><a href="{{ route('peraturans2.index') }}" style="color: #fff;">Villa Dago</a></li>
			  </ul>
			 </li>
	          </li>
			  <li>
              <a a href="{{ route('customers.index') }}"><span class="fa fa-users mr-3"></span>Cust Page</a>
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
@else
    <p>Silahkan login untuk melihat halaman ini.</p>
@endif</h2>
        <p>Vila adalah jenis properti atau bangunan hunian yang umumnya berukuran besar dan mewah. Vila biasanya berdiri sendiri di atas lahan yang luas dan dikelilingi oleh taman atau kebun yang indah. Istilah "vila" berasal dari bahasa Latin "villa," yang awalnya mengacu pada sebuah rumah pedesaan atau tempat tinggal di luar kota pada zaman Romawi kuno..</p>
		<p>Vila sering dianggap sebagai tempat liburan atau tempat peristirahatan yang ideal, karena menyediakan ruang lebih banyak daripada rumah biasa dan menawarkan privasi yang lebih tinggi. Fasilitas yang umumnya ada di vila meliputi beberapa kamar tidur, kamar mandi, ruang keluarga, dapur, kolam renang pribadi, area bersantai di luar ruangan, dan bahkan fasilitas rekreasi atau olahraga tertentu.</p>
		<p>Sifat mewah dan eksklusif dari vila sering kali membuatnya menjadi pilihan populer bagi wisatawan kelas atas, keluarga besar yang ingin berkumpul, atau untuk acara-acara spesial seperti pernikahan atau acara bisnis. Vila juga dapat dijadikan investasi properti yang menguntungkan dengan menyewakannya kepada wisatawan atau pengunjung untuk mendapatkan pendapatan tambahan.</p>
	
	
	</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
