<?php
// app/Models/Vila.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vila extends Model
{
    public function bookings()
{
    return $this->hasMany(Booking::class);
}
    // Nama tabel dalam basis data yang akan dihubungkan dengan model ini
    protected $table = 'vilas';
    protected $casts = [
        'foto' => 'json',
    ];
    // Kolom-kolom yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nama_vila',
        'lokasi',
        'deskripsi',
        'jumlah_kasur',
        'kapasitas',
        'fasilitas',
        'harga',
        'foto',
        'jumlah_kamar_mandi',
        'harga_weekend',
    ];

    // Jika kolom id tidak berformat integer, tambahkan properti berikut
    // protected $keyType = 'string';

    // Jika Anda tidak menggunakan timestamp (created_at dan updated_at), tambahkan properti berikut
    // public $timestamps = false;

    // Definisikan relasi jika ada (misalnya relasi dengan model lain)
    // public function penghuni()
    // {
    //     return $this->hasMany(Penghuni::class);
    // }
    public function transaksiBookings()
    {
        return $this->hasMany(TransaksiBooking::class, 'vila_id');
    }
}
