<?php
include 'koneksi.php';
function cetakbuktipendaftaran($namaLengkap, $tanggalLahir, $koneksi) {
    // Escape input untuk mencegah SQL injection
    $namaLengkap = mysqli_real_escape_string($koneksi, $namaLengkap);
    $tanggalLahir = mysqli_real_escape_string($koneksi, $tanggalLahir);

    // Query ke database sesuai dengan nama lengkap dan tanggal lahir
    $sql = "SELECT * FROM pendaftarans WHERE nama_lengkap = '$namaLengkap' AND tanggal_lahir = '$tanggalLahir'";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        // Data ditemukan, cetak bukti pendaftaran
        while ($row = $result->fetch_assoc()) {
            // Tambahkan logika cetak bukti pendaftaran sesuai dengan struktur data Anda
            echo "<center>";
            echo "<table style='width: 65%; max-width: 768px;'>"; // Membuat tabel dan menengahkannya
            echo "<img src='../assets/img/kopsurat.png' alt='Image' style='max-width: 100%;'>"; // Ganti path/to/your/image.jpg sesuai dengan path gambar Anda
            echo "<h2>Bukti Pendaftaran</h2>";
            echo "<tr><td>No Pendaftar</td><td>:</td><td>" . $row['id'] . "</td></tr>";
            echo "<tr><td>Nama Lengkap</td><td>:</td><td>" . $row['nama_lengkap'] . "</td></tr>";
            echo "<tr><td>Jenis Kelamin</td><td>:</td><td>" . $row['jenis_kelamin'] . "</td></tr>";
            echo "<tr><td>Asal Sekolah</td><td>:</td><td>" . $row['asal_sekolah'] . "</td></tr>";
            
            echo "</table>"; // Menutup tabel
            echo "</center>";
            echo "<div style='width: 70%; margin-left: 15%;'>";
            echo "<p>Selamat! Pendaftaran Anda untuk mengikuti PPDB SMK Ma'arif Batu secara online telah berhasil. Berikut adalah informasi penting terkait dengan status pendaftaran Anda:</p>";
            echo "<p>1. <b>Tahap Berikutnya:</b> Informasi lebih lanjut mengenai tahap selanjutnya akan disampaikan melalui email atau pesan pribadi.</p>";
            echo "<p>2. <b>Dokumen Pendukung:</b> Persiapkan dokumen-dokumen yang diperlukan untuk verifikasi selanjutnya.</p>";
            echo "<p>3. <b>Jadwal Verifikasi:</b> Tunggu pengumuman jadwal verifikasi dokumen yang akan diumumkan melalui situs resmi sekolah.</p>";
            echo "<p>Terima kasih atas partisipasi Anda dalam Penerimaan Peserta Didik Baru SMK Ma'arif Batu. Kami mengucapkan selamat dan sukses dalam perjalanan pendidikan Anda.</p>";
            echo "</div>";
            echo "<div style='text-align: right; width: 95%;'><img src='../assets/img/stampel.png' alt='Image' style='max-width: 40%; height: 18%; width: auto; position: relative; right: 1%;'>";
            echo "<div style='text-align: right; width: 100%; font-size: 15px;'<br><b>Ketua PPDB</b></div>";
            echo "<div style='text-align: right; width: 100%; font-size: 20px;'>Riza Aprilia, S.Pd,.M.Pd </div>";
            echo "<div style='text-align: right; width: 100%; font-size: 15px;'<br><br>Batu <u>" . $row['waktu_pendaftaran'] . "</u></div>";

            // Contoh: Simpan data dalam variabel untuk digunakan di formulir cetak
            $namaLengkap = $row['nama_lengkap'];
            $tanggalLahir = $row['tanggal_lahir'];
            // Simpan variabel lain sesuai kebutuhan
        }
    } else {
        // Data tidak ditemukan
        echo "<h2> Data tidak ditemukan.</h2>";
        // wait 5 seconds and redirect :)
        echo "<meta http-equiv=\"refresh\" content=\"5;url=../cek-bukti.html\"/>";
    }
}
if (isset($_POST['cetakBukti'])) {
    // Ambil data dari form
    $namaLengkap = $_POST['namalengkap'];
    $tanggalLahir = $_POST['tanggallahir'];

    // Panggil fungsi cetak bukti pendaftaran
    cetakbuktipendaftaran($namaLengkap, $tanggalLahir, $koneksi);
}
?>
<script>
	window.print();
</script>