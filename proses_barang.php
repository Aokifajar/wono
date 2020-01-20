<?php
date_default_timezone_set("Asia/Jakarta");
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$divisi=$_POST['divisi'];
	$kategori=$_POST['kategori'];
	$satuan=$_POST['satuan'];
	$konversi=$_POST['konversi'];
	$usaha=$_POST['usaha'];
	$stok=$_POST['stok'];
	$ppnbm=$_POST['ppnbm'];
	$fix=$_POST['fix'];
	$persen=$_POST['persen'];
	$timbangan=$_POST['timbangan'];
	$status=$_POST['status'];
	$keterangan=$_POST['keterangan'];
	$tanggal = date('Y-m-d H:i:s'); 
	$apmajor=$_POST['apmajor'];
	$apref=$_POST['apref'];
	$armajor=$_POST['armajor'];
	$arref=$_POST['arref'];
	$psdmajor=$_POST['psdmajor'];
	$psdref=$_POST['psdref'];
	//query cek kode barang
	$select= sqlsrv_query($koneksi,"SELECT kode FROM Tbarang WHERE kode='$kode'");
	$ketemu=sqlsrv_num_rows($select);
	//akhir
	if ($ketemu==0) {
	//jika kode barang tidak ada maka jalankan insert
		$query= sqlsrv_query($koneksi,"INSERT INTO Tbarang (kode,nama,kelas,divisi,kategori,satuan,konversisatuan,jenisusaha,stockminimal,PPnBM,
			toleransifix,toleransipersen,APmajor,APRef,ARmajor,ARRef,PSDmajor,PSDRef,ststimbangan,status,keterangan,entrydate,iduser)
			VALUES ('$kode','$nama','$kelas','$divisi','$kategori','$satuan','$konversi','$usaha',
			'$stok','$ppnbm','$fix','$persen','$apmajor','$apref','$armajor','$arref','$psdmajor','$psdref','$timbangan','$status','$keterangan','$tanggal','1')");
			if ($query){ ?>
				<script>alert('Berhasil disimpan');document.location="?page=<?=sha1('master_barang')?>";</script>
			<?php } else { ?>
				<script>alert('Gagal, Kode Barang sudah ada..!');window.history.back();</script>
			<?php }

		}
	}
//hapus master barang
	if (isset($_GET['hapus'])) {
		$kode=$_GET['hapus'];
		$query=sqlsrv_query($koneksi,"DELETE FROM Tbarang WHERE kode='$kode'");
		if ($query){ ?>
				<script>alert('Berhasil dihapus');document.location="?page=<?=sha1('master_barang')?>";</script>
			<?php }
	}
	?>