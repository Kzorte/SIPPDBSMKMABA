<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'alamat',
        'asal_sekolah',
        'no_wa',
        'nama_ayah',
        'pekerjaan_ayah',
        'tlp_ayah',
        'alamat_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'tlp_ibu',
        'alamat_ibu',
        'skl',
        'akta',
        'kk',
        'kompetensikeahlian',
        'waktu_pendaftaran',
        'id_tipe',
        'id_status',
    ];
}
