<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiBooking extends Model
{
    protected $fillable = [
        'id_villa',
        'nama_lengkap',
        'email',
        'alamat',
        'notelp',
        'check_in',
        'check_out',
        'total_bayar',
        'metode_pembayaran',
        'jumlah_dewasa',
        'jumlah_anak',
        'jumlah_balita',
        // Definisi atribut lainnya sesuai kebutuhan
    ];

    // Tentukan nama tabel (opsional jika nama tabel bukan bentuk jamak dari nama model)
    protected $table = 'transaksi_booking';

    // Tentukan kolom tanggal (opsional jika kolom tanggal berbeda dari 'created_at' dan 'updated_at')
    const CREATED_AT = 'waktu_dibuat';
    const UPDATED_AT = 'waktu_diupdate';

    public function vila()
    {
        return $this->belongsTo(Vila::class, 'id_villa');
    }
}
