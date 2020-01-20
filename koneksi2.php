<?php
$serverName = "PC"; 
$connectionInfo = array( "Database"=>"WKY2016GL", "UID"=>"sa", "PWD"=>"Intelwjk2020");
$koneksi = sqlsrv_connect( $serverName, $connectionInfo);

if( $koneksi === false ) {
	echo "koneksi gagal.<br />";
    die( print_r( sqlsrv_errors(), true));
}
?>