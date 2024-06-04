<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $nama_lengkap = $_POST['namalengkap'];
    $jenis_kelamin = $_POST['jeniskelamin'];
    $tempat_lahir = $_POST['tempatlahir'];
    $tanggal_lahir = $_POST['tanggallahir'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $asal_sekolah = $_POST['asalsekolah'];
    $no_wa = $_POST['notelepon'];
    $kompetensikeahlian = $_POST['kompetensikeahlian'];
    $waktu_pendaftaran = $_POST['waktupendaftaran'];

    // Data Ortu/Wali
    $nama_ayah = $_POST['namaayah'];
    $pekerjaan_ayah = $_POST['pekerjaanayah'];
    $tlp_ayah = $_POST['noteleponayah'];
    $alamat_ayah = $_POST['alamatayah'];
    
    $nama_ibu = $_POST['namaibu'];
    $pekerjaan_ibu = $_POST['pekerjaanibu'];
    $tlp_ibu = $_POST['noteleponibu'];
    $alamat_ibu = $_POST['alamatibu'];

    // Data Dokumen PPDB
    $skl = isset($_FILES['skl']['tmp_name']) ? $_FILES['skl']['tmp_name'] : null;
    $akta = isset($_FILES['akta']['tmp_name']) ? $_FILES['akta']['tmp_name'] : null;
    $kk = isset($_FILES['kk']['tmp_name']) ? $_FILES['kk']['tmp_name'] : null;

    $skl_content = $skl ? addslashes(file_get_contents($skl)) : null;
    $akta_content = $akta ? addslashes(file_get_contents($akta)) : null;
    $kk_content = $kk ? addslashes(file_get_contents($kk)) : null;

    // Query untuk menyimpan data pendaftaran
    $sql_pendaftaran = "INSERT INTO pendaftarans (nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, email, alamat, asal_sekolah, no_wa, kompetensikeahlian, waktu_pendaftaran) 
            VALUES ('$nama_lengkap', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$email', '$alamat', '$asal_sekolah', '$no_wa', '$kompetensikeahlian', '$waktu_pendaftaran')";

    if ($koneksi->query($sql_pendaftaran) === TRUE) {
        // Ambil ID pendaftaran yang baru saja dibuat
        $id_pendaftaran = $koneksi->insert_id;

        // Query untuk menyimpan data ortu_wali
        $sql_ortu_wali = "INSERT INTO ortu_wali (nama_ayah, pekerjaan_ayah, tlp_ayah, alamat_ayah, nama_ibu, pekerjaan_ibu, tlp_ibu, alamat_ibu) 
                VALUES ('$nama_ayah', '$pekerjaan_ayah', '$tlp_ayah', '$alamat_ayah', '$nama_ibu', '$pekerjaan_ibu', '$tlp_ibu', '$alamat_ibu')";

        if ($koneksi->query($sql_ortu_wali) === TRUE) {
            // Ambil ID ortu_wali yang baru saja dibuat
            $id_ortu_wali = $koneksi->insert_id;

            // Query untuk menyimpan data dokumen_ppdb
            $sql_dokumen_ppdb = "INSERT INTO dokumen_ppdb (skl, akta, kk) VALUES ('$skl_content', '$akta_content', '$kk_content')";
            header('Location:../cek-bukti.php?success=1');

            if ($koneksi->query($sql_dokumen_ppdb) === NULL) {
    
            } else {
                echo "Error: " . $sql_dokumen_ppdb . "<br>" . $koneksi->error;
            }
        } else {
            echo "Error: " . $sql_ortu_wali . "<br>" . $koneksi->error;
        }
    } else {
        echo "Error: " . $sql_pendaftaran . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
