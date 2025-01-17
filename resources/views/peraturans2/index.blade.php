
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
                body {
                    font-family: Arial, sans-serif;
                }

                h1 {
                    text-align: center;
                    margin-bottom: 20px;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                }

                th,
                td {
                    padding: 10px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }

                th {
                    background-color: #f2f2f2;
                }

                tr:hover {
                    background-color: #f5f5f5;
                }

                .add-btn {
                    display: block;
                    width: 150px;
                    margin: 20px auto;
                    text-align: center;
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px;
                    text-decoration: none;
                    border-radius: 4px;
                }

                .add-btn:hover {
                    background-color: #45a049;
                }

                img {
                    max-width: 100px;
                    max-height: 100px;
                }
                .edit-btn,
                .delete-btn {
                    display: inline-block;
                    padding: 8px 15px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    text-decoration: none;
                    margin-right: 5px;
                }

                .delete-btn {
                    background-color: #dc3545;
                }

                .edit-btn:hover,
                .delete-btn:hover {
                    background-color: #0056b3;
                }
                .action-buttons {
                    white-space: nowrap;
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
		  		<h1><a href="index.html" class="logo">VILLA BANDUNG</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="home"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="vila"><span class="fa fa-building mr-3"></span> Villa Management</a>
	          </li>
              <li>
              <a href="{{ route('booking.index') }}"><span class="fa fa-book mr-3"></span> Data Transaksi</a>
			  </li>
	          <li>
              <a href="pegawai"><span class="fa fa-briefcase mr-3"></span> Admin</a>
	          </li>
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

<h1>Peraturan Dago</h1>
<a href="{{ route('peraturans2.create') }}" class="btn btn-primary">Tambah peraturan</a>

<br>
<br>
<table>
        <thead>
            <tr>
            <th>Nomor</th>
            <th>Isi peraturans2</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($peraturandagos as $index => $peraturandago)
                <tr>
                <td>{{ $index + 1 }}</td>
                    <td>{{ $peraturandago->isi }}</td>
                    <td>  
                        <form action="{{ route('peraturans2.destroy', $peraturandago->id) }}" method="POST">
                        <a href="{{ route('peraturans2.edit', $peraturandago->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    @include('sweetalert::alert')


  </body>
</html>
