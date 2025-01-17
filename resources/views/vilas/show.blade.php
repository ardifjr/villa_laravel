<style>

  .buttons {
      text-align: center;
      margin-top: 20px;
  }

  img {
      max-width: 250px;
      max-height: 250px;
      margin-bottom: 5px;
      border: 1px solid #ddd;
      border-radius: 10px;
  }
</style>
<!-- resources/views/vilas/show.blade.php -->
@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <h1><center>{{ $vila->nama_vila }}</center></h1><table class="table">
    @if ($vila->foto && count($vila->foto) > 0)
    <h3>Foto-foto Villa:</h3>
    <div class="photo-gallery">
        @foreach ($vila->foto as $photo)
            <img src="{{ asset('storage/' . $photo) }}" alt="{{ $vila->nama_vila }}" class="vila-image">
        @endforeach
    </div>
@else
    <p>Tidak ada foto</p>
@endif
        <table class="table table-bordered border-black">
        <tbody>
        <tr>
            <th scope="row">Deskripsi</th>
            <td>{{ $vila->deskripsi }}</td>
          </tr>
          <tr>
            <th scope="row">Lokasi</th>
            <td>{{ $vila->lokasi }}</td>
          </tr>
          <tr>
            <th scope="row">Harga Weekday</th>
            <td>Rp {{ number_format($vila->harga, 2, ',', '.') }}</td>
          </tr>
          <tr>
            <th scope="row">Harga Weeend</th>
            <td>Rp {{ number_format($vila->harga_weekend, 2, ',', '.') }}</td>
          </tr>
          <tr>
            <th scope="row">Kapasitas</th>
            <td>{{ $vila->kapasitas }}</td>
          </tr>
          <tr>
            <th scope="row">Jumlah Kasur</th>
            <td>{{ $vila->jumlah_kasur }}</td>
          </tr>
          <tr>
            <th scope="row">Jumlah Kamar Mandi</th>
            <td>{{ $vila->jumlah_kamar_mandi }}</td>
          </tr>
          <tr>
            <th scope="row">Fasilitas</th>
            <td>{{ $vila->fasilitas }}</td>
          </tr>
        </tbody>
        </table>
    <div class="col-md-3">
    <a href="{{ route('vila.index') }}" class="btn btn-primary">Kembali ke Daftar Vila</a>
    </div>
@endsection

