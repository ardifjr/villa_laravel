<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function vila()
    {
        return $this->belongsTo(Vila::class);
    }
    protected $table = 'transaksi_booking'; // Pastikan nama tabel sesuai
    protected $fillable = [
        // Daftar atribut yang dapat diisi secara masal
        'id_villa',
        'nama_lengkap',
        'email',
        'alamat',
        'notelp',
        'check_in',
        'check_out',
        'metode_pembayaran',
        'total_bayar',
    ];
}
