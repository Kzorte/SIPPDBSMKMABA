@extends('layouts.main')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 80px;">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Verifikasi Berkas</li>
        </ol>
        <h2>Verifikasi Berkas</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    @section('container')
    <!-- ======= Verifikasi Pendaftaran Section ======= -->

        <div class="row justify-content-center">

          <div class="col-lg-12">
            <div class="portfolio-info">
              <div class="text-center">
                <img src="assets/img/logo-header.png" class="img-fluid" width="50%">
              </div>
              <header class="text-center">
                <h2><b>SMK Ma'arif Batu</b></h2>
                <h2>Data Verifikasi Pendaftaran Calon<br>
                  Peserta Didik Baru Tahun Pelajaran 2024/2025</h2>
              </header>
              <hr>
              <div class="div table-responsive">
                
                <table id="datatablesSimple" class="table table-striped">
                  <thead>
                  <tr style="color: #012970;">
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama Lengkap</th>
                    <th class="text-center" scope="col">Asal Sekolah</th>
                    <th class="text-center" scope="col">No Telepon</th>
                    <th class="text-center" scope="col">Kompetensi Keahlian</th>
                    <th class="text-center" scope="col">Tipe Pendaftaran</th>
                    <th class="text-center" scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // Connect to the database
                  include('forms/koneksi.php');
                  // Function to format phone number
                  function formatPhoneNumber($phoneNumber) {
                    // Remove all non-numeric characters
                    $cleaned = preg_replace('/\D/', '', $phoneNumber);
                    
                    // Format the phone number
                    $formatted = "08" . str_repeat("x", strlen($phoneNumber));

                    return $formatted;
                  }

                  // Fetch data from the database
                  $sql = "SELECT * FROM pendaftarans 
                    WHERE id_status NOT IN ('Diterima', 'Tidak Diterima')
                  ";
                  $result = $koneksi->query($sql);
                  
                  if ($result->num_rows > 0) {
                    $count = 1;
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<th class='text-center' style='font-weight: normal;'>{$count}</th>";
                      echo "<th class='text-center' style='font-weight: normal;'>{$row['nama_lengkap']}</th>";
                      echo "<th class='text-center' style='font-weight: normal;'>{$row['asal_sekolah']}</th>";
                      $formattedPhoneNumber = formatPhoneNumber($row['no_wa']);
                      echo "<th class='text-center' style='font-weight: normal;'>{$formattedPhoneNumber}</th>";
                      echo "<th class='text-center' style='font-weight: normal;'>{$row['kompetensikeahlian']}</th>";
                      echo "<th class='text-center' style='font-weight: normal;'>{$row['id_status']}</th>";
                      echo "<th class='text-center' style='font-weight: normal;'>{$row['id_tipe']}</th>";
                      echo "</tr>";
                      $count++;
                    }
                  } else {
                    echo "<tr><td colspan='7' class='text-center'>No records found</td></tr>";
                  }
                  
                  // Close the database connection
                  $koneksi->close();
                  ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>

      </div>
      @endsection
