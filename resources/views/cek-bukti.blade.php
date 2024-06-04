@extends('layouts.main')

<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 80px;">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Bukti Pendaftaran</li>
        </ol>
        <h2>Cetak Bukti Pendaftaran</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    @section('container')
    <!-- ======= Cetak Bukti Pendaftaran Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-7">
            <div class="portfolio-info">
              <div class="text-center">
                <img src="assets/img/logo-header.png" class="img-fluid" width="50%">
              </div>
              <header class="text-center">
                <h2><b>SMK Ma'arif Batu</b></h2>
              </header>
              <hr>
              <form action="forms/cetak-formulir-ppdb-smkmaarifbatu.php" method="post" enctype="multipart/form-data">
                <header class="section-header" style="text-align: left; padding-bottom: 20px;">
                  <p style="font-size: calc(1.325rem + .9vw);">Cetak Bukti Pendaftaran Peserta Didik Baru SMK Ma'arif Batu Tahun Pelajaran 2024/2025.</p>
                  <h2 style="padding-top: 10px;">
                    Isikan form di bawah ini untuk cetak bukti pendaftaran!
                  </h2>
                </header>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="namalengkap" id="namalengkap" required>
                </div>
                <div class="form-group mt-3 mt-3 mt-md-0">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" required>
                </div>
              
                <div class="mt-4">
                    <input class="btn btn-primary" type="submit" name="cetakBukti" value="Cetak Bukti Pendaftaran">
                </div>
    
              </form>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    @endsection