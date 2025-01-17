<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #11574a;
    }
  
    .container fluid {
      max-width: 600px;
      margin: 0 auto;
      background-color: #128671;
      border: 4px solid #0e3d34;
      border-radius: 10px;
      padding: 20px;
    }
  
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
  
    label {
      display: block;
      margin-bottom: 5px;
    }
  
    input,
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 15px;
    }
  
    textarea {
      resize: vertical;
    }
  
    .submit-btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #11574a;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
  
    .submit-btn:hover {
      background-color: #0e3d34;
    }
      .cancel-btn {
        display: inline-block;
        margin-left: 10px;
        padding: 10px 20px;
        background-color: #ccc;
        color: black;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }

    .cancel-btn:hover {
        background-color: #b3b3b3;
    }
  </style> 
<!-- views/booking/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Form pemesanan -->
    <div class="container-fluid">
    <form action="{{ route('updateBooking', $booking->id) }}" method="post">
        @csrf
        @method('PUT') <!-- Gunakan method PUT untuk mengirim data update -->

        <!-- Informasi Pemesan -->
        <h2>Informasi Pemesan</h2>
        <div class="card">
        <div class="card-body">
        <div>
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $booking->nama_lengkap }}" required>
            @error('nama_lengkap')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $booking->email }}" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" required>{{ $booking->alamat }}</textarea>
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="notelp">Nomor Telepon:</label>
            <input type="tel" name="notelp" id="notelp" value="{{ $booking->notelp }}" required>
            @error('notelp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </div>
        </div>
        <br>
        <!-- Informasi Pemesanan -->
        <h2>Informasi Pemesanan</h2>
        <div class="card">
        <div class="card-body">
        <div>
            <label for="check_in">Tanggal Check-in:</label>
            <input type="date" name="check_in" id="check_in" value="{{ $booking->check_in }}" required>
            @error('check_in')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="check_out">Tanggal Check-out:</label>
            <input type="date" name="check_out" id="check_out" value="{{ $booking->check_out }}" required>
            @error('check_out')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <select name="metode_pembayaran" id="metode_pembayaran" required>
                <option value="transfer_bank" {{ $booking->metode_pembayaran === 'transfer_bank' ? 'selected' : '' }}>Transfer Bank</option>
                <option value="kartu_kredit" {{ $booking->metode_pembayaran === 'kartu_kredit' ? 'selected' : '' }}>Kartu Kredit</option>
                <!-- Tambahkan pilihan metode pembayaran lainnya sesuai kebutuhan -->
            </select>
            @error('metode_pembayaran')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Total Bayar (tambahkan sesuai perhitungan total bayar) -->
        <div>
            <label for="total_bayar">Total Bayar:</label>
            <input type="text" name="total_bayar" id="total_bayar" value="{{ $booking->total_bayar }}" readonly>
        </div>

        <button type="submit" class="submit-btn">Update</button>
        </div>
        <div class="col-md-3">
            <a href="{{ route('booking.index') }}" class="cancel-btn" class="form-tabel">Cancel</a>
             </div>
        </div>
    </form>
    </div>


    <script>
        // Fungsi untuk menghitung total bayar berdasarkan tanggal check-in, check-out, dan harga villa
        function calculateTotalBayar() {
            // Ambil nilai tanggal check-in dan check-out
            var checkInDate = new Date(document.getElementById('check_in').value);
            var checkOutDate = new Date(document.getElementById('check_out').value);

            // Harga villa (ganti 1000000 dengan harga sesuai dengan data villa yang sebenarnya)
            var hargaVilla = 1000000;

            // Hitung selisih hari antara check-in dan check-out
            var timeDiff = checkOutDate - checkInDate;
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

            // Hitung total bayar
            var totalBayar = hargaVilla * diffDays;

            // Tampilkan total bayar di input field
            document.getElementById('total_bayar').value = totalBayar;
        }

        // Panggil fungsi calculateTotalBayar() saat tanggal check-in atau check-out berubah
        document.getElementById('check_in').addEventListener('change', calculateTotalBayar);
        document.getElementById('check_out').addEventListener('change', calculateTotalBayar);
    </script>
@endsection
