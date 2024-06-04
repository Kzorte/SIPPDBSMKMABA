@extends('layouts.main')
        <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 80px;">
      <div class="container">

        <ol>
        <li><a href="index.php">Home</a></li>
        <li>Formulir Pendaftaran</li>
      </ol>
      <h2>Formulir Pendaftaran</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Formulir Pendaftaran Section ======= -->
    @section('container')
    <div class="row justify-content-center">

      <div class="col-lg-7">
        <div class="portfolio-description">
          <h2>PPDB SMK Ma'arif Batu</h2>
          <p>
            Untuk calon Peserta Didik Baru SMK Ma'arif Batu Tahun Pelajaran 2024/2025 bisa mendaftar melalui laman ini atau langsung datang ke tempat pendaftaran di kantor Gedung 1 SMK Ma'arif Batu, Jl. Panderman No. 26 Sisir Kota Batu.
          </p>
          <p>
            Silahkan isi formulir dibawah ini untuk melakukan pendaftaran secara online di SMK Ma'arif Batu, Tahun Pelajaran 2024/2025.
          </p>
        </div>
        <div class="portfolio-info">
          <div class="text-center">
            <img src="assets/img/logo-header.png" class="img-fluid" width="50%">
          </div>
          <header class="text-center">
            <h2><b>SMK Ma'arif Batu</b></h2>
            <h2>Formulir Pendaftaran Online<br>
              Peserta Didik Baru Tahun Pelajaran 2024/2025</h2>
          </header>
          <hr>
          <form action="forms/proses_pendaftaran.php" method="post" enctype="multipart/form-data">
            <header class="section-header" style="text-align: left; padding-bottom: 20px;">
              <h2>
                A. DATA PENDAFTAR<br>
                Isilah dengan data pribadi dengan lengkap dan benar!
              </h2>
            </header>
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="namalengkap" class="form-control" id="namalengkap" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jeniskelamin" required="">
                  <option selected="">Pilih Jenis Kelamin</option>
                  <option value="Laki - Laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Tempat Lahir</label>
                <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Tanggal Lahir</label>
                <div class="input-group date datepicker">
                    <input type="date" name="tanggallahir"  id="tanggallahir"  class="form-control" placeholder="mm/dd/yyyy" required/>
                    <span class="input-group-addon"><i data-feather="calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="form-group mt-3 mt-3 mt-md-0">
              <label>Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group mt-3 mt-3 mt-md-0">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" rows="5" required></textarea>
            </div>
            <div class="row">
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Asal Sekolah</label>
                <input type="text" name="asalsekolah" class="form-control" id="asalsekolah" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Nomor Telepon / Whatsapp</label>
                <input type="text" class="form-control" name="notelepon" id="notelepon" required>
              </div>
            </div>

            <header class="section-header" style="text-align: left; padding-bottom: 20px; padding-top: 20px;">
              <h2>
                B. DATA ORANG TUA / WALI<br>
                Isilah dengan data pribadi dengan lengkap dan benar!
              </h2>
            </header>
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Nama Ayah</label>
                <input type="text" name="namaayah" class="form-control" id="namaayah" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Pekerjaan Ayah</label>
                <input type="text" class="form-control" name="pekerjaanayah" id="pekerjaanayah" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Nomor Telepon Ayah</label>
                <input type="text" name="noteleponayah" class="form-control" id="noteleponayah" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Alamat Ayah</label>
                <textarea class="form-control" name="alamatayah" rows="5" required></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Nama Ibu</label>
                <input type="text" name="namaibu" class="form-control" id="namaibu" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Pekerjaan Ibu</label>
                <input type="text" class="form-control" name="pekerjaanibu" id="pekerjaanibu" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Nomor Telepon Ibu</label>
                <input type="text" name="noteleponibu" class="form-control" id="noteleponibu" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Alamat Ibu</label>
                <textarea class="form-control" name="alamatibu" rows="5" required></textarea>
            </div>

            <header class="section-header" style="text-align: left; padding-bottom: 20px; padding-top: 20px;">
              <h2>
                C. LAMPIRAN DOKUMEN CALON PESERTA DIDIK BARU<br>
                Isilah dengan data pribadi dengan lengkap dan benar!
              </h2>
            </header>
            <div class="form-group">
              <p>
                Lampiran Foto Surat Keterangan Lulus dari SMP/MTs (.jpg .png .jpeg | max. 5 mb)*<br>
                <i class="text-danger">(Jika belum ada dapat dilampirkan / dibawa pada saat tes &amp; wawancara)</i>
              </p>
              <input type="file" name="skl" class="dropify" data-max-file-size="10M" data-allowed-file-extensions="pdf jpeg png jpg" data-default-file="PDF"  data-height="140" />
              <hr>
              <p>
                Lampiran Foto Akta Kelahiran (.jpg .png .jpeg | max. 5 mb)*<br>
                <i class="text-danger">(Jika belum ada dapat dilampirkan / dibawa pada saat tes &amp; wawancara)</i>
              </p>
              <input type="file" name="akta" class="dropify" data-max-file-size="10M" data-allowed-file-extensions="pdf jpeg png jpg" data-default-file="PDF"  data-height="140" />
              <hr>
              <p>
                Lampiran Foto Kartu Keluarga (.jpg .png .jpeg | max. 5 mb)*<br>
                <i class="text-danger">(Jika belum ada dapat dilampirkan / dibawa pada saat tes &amp; wawancara)</i>
              </p>
              <input type="file" name="kk" class="dropify" data-max-file-size="10M" data-allowed-file-extensions="pdf jpeg png jpg" data-default-file="PDF"  data-height="140" />
              <hr>
            </div>

            <header class="section-header" style="text-align: left; padding-bottom: 20px; padding-top: 20px;">
              <h2>
                D. PILIHAN PROGRAM KEAHLIAN<br>
                Silahkan pilih Program Keahlian (Jurusan) yang diminati!
              </h2>
            </header>
          
            <div class="form-group">
              <label>Kompetensi Keahlian</label>
              <i class="text-danger">(*Wajib Diisi)</i>
              <select class="form-select" aria-label="Default select example" name="kompetensikeahlian" required>
                <option selected="">Pilih Kompetensi Keahlian</option>
                <option value="Desain Komunikasi Visual (DKV)">Desain Komunikasi Visual (DKV)</option>
                <option value="Rekayasa Perangkat Lunak (RPL)">Rekayasa Perangkat Lunak (RPL)</option>
                <option value="Teknik Audio Video (TAV)">Teknik Audio Video (TAV)</option>
                <option value="Asisten Keperawatan (AK)">Asisten Keperawatan (AK)</option>
                <option value="Teknik dan Bisnis Sepeda Motor (TBSM)">Teknik dan Bisnis Sepeda Motor (TBSM)</option>
                <option value="Teknik Kendaraan Ringan Otomotif (TKRO)">Teknik Kendaraan Ringan Otomotif (TKRO)</option>
              </select>
              <br>
              <label>Waktu Pendaftaran</label>
              <i class="text-danger">(*Wajib Diisi)</i>
              <input type="datetime-local" class="form-control" name="waktupendaftaran" id="waktupendaftaran" required>
            </div>
          
            <div class="mt-4">
              <div class="text-center">
                <input class="btn btn-primary" type="submit" value="Kirim Data Pendaftaran" style="width: 100%;">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    @endsection