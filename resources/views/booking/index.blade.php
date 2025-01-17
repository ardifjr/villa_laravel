
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
                    padding: 2px;
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
                    padding: 4px 8px;
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

                .wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
        }

        #content {
            flex: 1;
        }

        @media (max-width: 768px) {
            .logo {
                font-size: 20px;
            }

            /* Atur ulang tata letak pada layar berukuran kecil */
            #sidebar {
                display: none; /* Sembunyikan sidebar */
            }

            #content {
                margin-left: 20px; /* Beri jarak antara content dengan tepi layar */
            }
        }
        </style>
    </head>      
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

    <h1>Daftar Transaksi</h1>
    
<div style="display: flex; justify-content: space-between; align-items: center;">
    <!-- Kolom Pencarian dengan Border dan Placeholder -->
    <div class="input-group mb-3" style="max-width: 300px; border: 1px solid #ddd; padding: 5px; margin-left: auto;" >
    <input type="text" id="search-input" placeholder="Masukkan nama pelanggan..." style="color: black; border-color: #ddd; caret-color: black; width: 232px;">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="search-button">Cari</button>
        </div>
    </div>
    </div>
<script>
    // Fungsi untuk melakukan pencarian
    function searchBooking() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById('search-input');
        filter = input.value.toUpperCase();
        table = document.querySelector('.table');
        tr = table.getElementsByTagName('tr');

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName('td')[3]; // Ubah angka 1 sesuai dengan indeks kolom Vila pada tabel
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = '';
                } else {
                    tr[i].style.display = 'none';
                }
            }
        }
    }

    // Panggil fungsi searchBooking saat tombol Cari diklik
    document.getElementById('search-button').addEventListener('click', searchBooking);

    // Panggil fungsi searchBooking saat tombol Enter ditekan dalam input pencarian
    document.getElementById('search-input').addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            searchBooking();
        }
    });
</script>
    <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Booking</th>
                    <th>Tanggal Booking</th>
                    <th>Nama Customer</th>
                    <th>Vila</th>
                    <th>No Telepon</th>
                    <th>Jumlah Tamu</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Total Bayar</th>
                    <th>Catatan</th>
                    <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                </tr>
            </thead>
            <tbody>
            @foreach ($transaksi as $index => $booking)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $booking->id}}
                        <td>{{ $booking->waktu_dibuat }}</td>
                        <td>{{ $booking->nama_lengkap }}</td>
                        <td>
                            @if ($booking->vila)
                                {{ $booking->vila->nama_vila }}
                            @else
                                Data vila tidak ditemukan
                            @endif
                        </td>
                        <td>{{ $booking->notelp }}</td>
                        <td>Dewasa = {{ $booking->jumlah_dewasa }} orang<br>
                        Anak-anak = {{ $booking->jumlah_anak }} orang<br>
                        Balita = {{ $booking->jumlah_balita }} orang<br>
                        Total = {{ $booking->email }} orang</td>
                        <td>{{ $booking->check_in }}</td>
                        <td>{{ $booking->check_out }}</td>
                        <td>Rp {{ number_format($booking->total_bayar, 2, ',', '.') }}</td>
                        <td>{{ $booking->alamat }}</td>
                        <td>
                        <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    <a href="{{ route('booking.edit', $booking->id) }}" class="edit-btn">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Hapus</button>
                </form>
            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        @include('sweetalert::alert')
    </body>
    </html>
