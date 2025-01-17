<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #005555;
    }
  
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      border: 0px solid #0e3d34;
      border-radius: 30px;
      padding: 30px;                         
      box-shadow: 0 10px 8px 10px rgba(0, 0, 0, 0.1);
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
      border-radius: 30px;
      cursor: pointer;
      margin-top: 10px;
    }
  
    .submit-btn:hover {
      background-color: #0e3d34;
    }
    .input-group {
    position: relative;
}

.input-addon {
    position: absolute;
    top: 33%;
    right: 520px; /* Sesuaikan dengan jarak yang diinginkan */
    transform: translateY(-50%);
}
.input-group1 {
    position: relative;
}

.input-addon1 {
    position: absolute;
    top: 53%;
    right: 520px; /* Sesuaikan dengan jarak yang diinginkan */
    transform: translateY(-50%);
}.input-group2 {
    position: relative;
}

.input-addon2 {
    position: absolute;
    top: 53%;
    right: 520px; /* Sesuaikan dengan jarak yang diinginkan */
    transform: translateY(-50%);
}.input-group3 {
    position: relative;
}

.input-addon3 {
    position: absolute;
    top: 53%;
    right: 520px; /* Sesuaikan dengan jarak yang diinginkan */
    transform: translateY(-50%);
}
  </style>  
<!-- Ganti {villa_id} dengan id villa yang sesuai -->

<div class="form-container">
<h1>Form Pemesanan Villa </h1>
<h1>-- {{ $vila->nama_vila }} --</h1>
<div id="vilaData" data-harga="{{ $vila->harga }}" data-harga-weekend="{{ $vila->harga_weekend }}"></div>
<!-- Form pemesanan -->
<form action="{{ route('storeBooking') }}" method="post">
    @csrf
    <input type="hidden" name="villa_id" value="{{ $vila->id }}">


    <!-- Informasi Pemesanan -->
    <h2>Informasi Pemesanan</h2>
    <div>
        <label for="check_in">Tanggal Check-in:</label>
        <input type="date" name="check_in" id="check_in" required>
        @error('check_in')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="check_out">Tanggal Check-out:</label>
        <input type="date" name="check_out" id="check_out" required>
        @error('check_out')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>

    <div class="input-group1">
        <label for="jumlah_dewasa">Dewasa:</label>
        <input type="number" name="jumlah_dewasa" id="jumlah_dewasa" placeholder="0" required>
        <span class="input-addon1">orang</span>
        @error('jumlah_dewasa')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-group2">
        <label for="jumlah_anak">Anak-Anak:</label>
        <input type="number" name="jumlah_anak" id="jumlah_anak" placeholder="0" required>
        <span class="input-addon2">orang</span>
        @error('jumlah_anak')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-group3">
        <label for="jumlah_balita">Balita:</label>
        <input type="number" name="jumlah_balita" id="jumlah_balita" placeholder="0" required>
        <span class="input-addon3">orang</span>
        @error('jumlah_balita')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <label for="email">Jumlah Tamu:</label>
    <div class="input-group">
        <input type="text" name="email" id="email" class="form-control" placeholder="0">
        <span class="input-addon">orang</span>
    </div>    <script>
    const jumlahDewasaInput = document.getElementById('jumlah_dewasa');
    const jumlahAnakInput = document.getElementById('jumlah_anak');
    const jumlahBalitaInput = document.getElementById('jumlah_balita');
    const jumlahTamuInput = document.getElementById('email');

    // Fungsi untuk menghitung jumlah tamu dan mengisi input
    function hitungJumlahTamu() {
        const jumlahDewasa = parseInt(jumlahDewasaInput.value) || 0;
        const jumlahAnak = parseInt(jumlahAnakInput.value) || 0;
        const jumlahBalita = parseInt(jumlahBalitaInput.value) || 0;

        const jumlahTamu = jumlahDewasa + jumlahAnak + jumlahBalita;
        jumlahTamuInput.value = jumlahTamu;
    }

    // Memanggil fungsi hitungJumlahTamu saat nilai input berubah
    jumlahDewasaInput.addEventListener('input', hitungJumlahTamu);
    jumlahAnakInput.addEventListener('input', hitungJumlahTamu);
    jumlahBalitaInput.addEventListener('input', hitungJumlahTamu);
</script>
    </div>
        <!-- Informasi Pemesan -->
        <h2>Informasi Pemesan</h2>

    <div>
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Alex Jhon" required>
        @error('nama_lengkap')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="alamat">Catatan:</label>
        <textarea name="alamat" id="alamat" placeholder="Masukkan Catatan Anda, Jika Tidak Ada Isikan Dengan - " required></textarea>
        @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="notelp">Nomor Telepon:</label>
        <input type="tel" name="notelp" id="notelp" placeholder="087-822-611-896" required>
        @error('notelp')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

     <!-- Informasi Pemesan -->
     <h2>Informasi Pembayaran</h2>

    <div>
        <label for="metode_pembayaran">Metode Pembayaran:</label>
        <select name="metode_pembayaran" id="metode_pembayaran" required>
            <option value="transfer_bank">Transfer Bank</option>
            <option value="kartu_kredit">Tunai</option>
            <!-- Tambahkan pilihan metode pembayaran lainnya sesuai kebutuhan -->
        </select>
        @error('metode_pembayaran')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Total Bayar (tambahkan sesuai perhitungan total bayar) -->
    <div>
    <label for="total_bayar">Total Bayar:</label>
    <input type="text" name="total_bayar" id="total_bayar" readonly>
</div>
<script>
    // Function to format number with commas as thousand separators
    function formatNumber(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
        }).format(number);
    }

    // Function to calculate total bayar
    function calculateTotalBayar() {
        // Ambil nilai tanggal check-in dan check-out
        var checkInDate = new Date(document.getElementById('check_in').value);
        var checkOutDate = new Date(document.getElementById('check_out').value);

        // Harga villa (ganti 1000000 dengan harga sesuai dengan data villa yang sebenarnya)
        var hargaVilla = parseInt(document.getElementById('vilaData').dataset.harga);
        var hargaWeekend = parseInt(document.getElementById('vilaData').dataset.hargaWeekend);

        // Hitung selisih hari antara check-in dan check-out
        var timeDiff = checkOutDate - checkInDate;
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

        // Cek apakah check-in atau check-out jatuh pada akhir pekan (Sabtu atau Minggu)
        var isWeekend = checkInDate.getDay() === 6 || checkInDate.getDay() === 0 ||
                        checkOutDate.getDay() === 6 || checkOutDate.getDay() === 0;

        // Pilih harga yang sesuai berdasarkan weekday atau weekend
        var harga = isWeekend ? hargaWeekend : hargaVilla;

        // Hitung total bayar
        var totalBayar = harga * diffDays;

        // Format total bayar dengan pemisah ribuan dan simbol mata uang Rupiah (Rp)
        var formattedTotalBayar = formatNumber(totalBayar);

        // Tampilkan total bayar di input field
        document.getElementById('total_bayar').value = formattedTotalBayar;
    }

    // Panggil fungsi calculateTotalBayar() saat tanggal check-in atau check-out berubah
    document.getElementById('check_in').addEventListener('change', calculateTotalBayar);
    document.getElementById('check_out').addEventListener('change', calculateTotalBayar);
</script>


    <button type="submit" class="submit-btn">Pesan</button>
</form>
</div>
