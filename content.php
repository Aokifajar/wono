<?php
@$page=htmlentities($_GET['page']);
$halaman="$page.php";

if(empty($page)){
	include "dashboard.php";
}elseif ($page == sha1('master_barang')) {
	include "master_barang.php";
}elseif ($page == sha1('dashboard')) {
	include "dashboard.php";
}elseif ($page == sha1('barang')) {
	include "barang.php";
}elseif ($page == sha1('proses_barang')) {
	include "proses_barang.php";
}else {
	include"$halaman";
}
?>