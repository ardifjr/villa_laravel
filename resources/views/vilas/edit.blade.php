<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
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
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #45a049;
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

    .buttons {
        text-align: center;
        margin-top: 20px;
    }

    img {
        max-width: 100px;
        max-height: 100px;
        margin-bottom: 5px;
        border: 1px solid #ddd;
        border-radius: 10px;
    }
</style>
<!-- resources/views/vilas/edit.blade.php -->
    @extends('layouts.app')
    @section('content')
        <div class="sidebar-inner-slimscroll">
        <div class="container-fluid"  style="overflow-y: auto;">
        <h1>Edit Data Villa</h1>
        <div class="card">
        <div class="card-body">
        <form action="{{ route('vila.update', $vila->id) }}" method="POST" enctype="multipart/form-data" class="row g-8">
            @csrf
            @method('PUT')
            <div class="row mb-3">
            <div class="col-md-6">
                <label for="nama_vila" class="form-label">Nama Villa</label>
                <input type="text" name="nama_vila" id="nama_vila" value="{{ $vila->nama_vila }}" required>
            </div>
    
            <div class="col-md-6">
                <label for="lokasi" class="form-label">Lokasi:</label>
                <select name="lokasi" id="lokasi" required>
                    <option value="Lembang">Lembang</option>
                    <option value="Dago">Dago</option>
                </select>
            </div>
    
            <div class="col-md-6">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" required>{{ $vila->deskripsi }}</textarea>
            </div>
    
            <div class="col-md-6">
                <label for="jumlah_kasur" class="form-label">Jumlah Kasur:</label>
                <select name="jumlah_kasur" id="jumlah_kasur" required>
                    <option value="Bedroom 1">Bedroom 1</option>
                    <option value="Bedroom 2">Bedroom 2</option>
                    <option value="Bedroom 3">Bedroom 3</option>
                    <option value="Bedroom 4">Bedroom 4</option>
                    <option value="Bedroom 5">Bedroom 5</option>
                    <option value="Bedroom 6">Bedroom 6</option>
                </select>
            </div>
            
    
            <div class="col-md-3">
                <label for="kapasitas" class="form-label">Kapasitas</label>
                <input type="text" name="kapasitas" id="kapasitas" value="{{ $vila->kapasitas }}" required>
            </div>
    
            <div class="col-md-3">
            <label for="jumlah_kamar_mandi">Jumlah Kamar Mandi</label>
            <select  name="jumlah_kamar_mandi" id="jumlah_kamar_mandi" value="{{ $vila->jumlah_kamar_mandi }}" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            </div>
    
            <div class="col-md-6">
                <label for="fasilitas" class="form-label">Fasilitas</label>
                <textarea name="fasilitas" id="fasilitas" required>{{ $vila->fasilitas }}</textarea>
            </div>
    
            <div class="col-md-3">
                <label for="harga" class="form-label">Harga Weekday</label>
                <input type="text" name="harga" id="harga" value="{{ $vila->harga }}" required>
            </div>

            <div class="col-md-3">
                <label for="harga" class="form-label">Harga Weekend</label>
                <input type="text" name="harga_weekend" id="harga_weekend" value="{{ $vila->harga_weekend }}" required>
            </div>
            <!-- Existing photos -->
            <div class="col-md-3">
            <h3>Foto-foto saat ini:</h3>
            <div class="photo-gallery">
                @if ($vila->foto && count($vila->foto) > 0)
                    @foreach ($vila->foto as $photo)
                        <img src="{{ asset('storage/' . $photo) }}" alt="{{ $vila->nama_vila }}" class="vila-image">
                    @endforeach
                @else
                    <span>Tidak ada foto</span>
                @endif
            </div>
            </div>
            <!-- New photos -->
            <div class="col-md-3">
            <h3>Foto-foto baru:</h3>
            <input type="file" name="foto[]" id="foto" multiple>
            </div>
            <div class="col-md-3">
            <button type="submit" class="submit-btn" class="form-tabel">Update</button><br>
             </div>
             <div class="col-md-3">
            <a href="{{ route('vila.index') }}" class="cancel-btn" class="form-tabel">Cancel</a>
             </div>
        </form>
    </div>
</div>
        </div>
        </div>
        
    @endsection
 