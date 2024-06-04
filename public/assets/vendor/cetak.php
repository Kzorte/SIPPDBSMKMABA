<!DOCTYPE html>
<html>
<head>
	<title>CETAK DATA PPDB SMK MA'ARIF BATU</title>
</head>
<body>
 
	<center>

		<h2>DATA PENDAFTARAN</h2>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
    
    <center>
        
        <table border="1" style="width: 60%">
            <tr>
                <th width="1%">NO ID</th>
                <th>Nama</th>
                <th>JENIS KELAMIN</th>
                <th width="20%">ASAL SEKOLAH</th>
            </tr>
            <?php 
            $no = 1;
            $sql = mysqli_query($koneksi,"select * from pendaftaran");
            while($data = mysqli_fetch_array($sql)){
                ?>
            <tr>
                <td><?php echo $no['id_pendaftar']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['asal_sekolah']; ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </center>
 
	<script>
		window.print();
	</script>
 
</body>
</html>