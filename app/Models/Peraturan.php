<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    use HasFactory;

    protected $fillable = ['isi']; // Kolom yang dapat diisi

    // Tambahkan method atau relasi lain jika diperlukan
}
