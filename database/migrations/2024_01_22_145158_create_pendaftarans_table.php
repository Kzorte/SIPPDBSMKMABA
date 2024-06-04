<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('email');
            $table->text('alamat');
            $table->char('asal_sekolah');
            $table->string('no_wa');

            // Parent/Guardian Information (for both father and mother)
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('tlp_ayah');
            $table->text('alamat_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('tlp_ibu');
            $table->text('alamat_ibu');

            // Uploaded Documents (Assuming these are in binary format)
            $table->binary('skl');
            $table->binary('akta');
            $table->binary('kk');

            // Other Information
            $table->string('kompetensikeahlian');
            $table->date('waktu_pendaftaran');
            $table->enum('id_tipe', ['Online', 'Offline']); // Registration type
            $table->enum('id_status', ['Proses', 'Diterima', 'Tidak Diterima']); // Application status

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
