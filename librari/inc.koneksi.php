<?php
$my['host']	= "localhost";
$my['user']	= "root";
$my['pass']	= "";
$my['dbs']	= "northwind";

$koneksi= mysql_connect($my['host'], $my['user'], $my['pass'], $my['dbs']);
if (! $koneksi) {
  echo "Gagal koneksi..!";
  mysql_error();
}
// memilih database pda server
mysql_select_db($my['dbs'])
	 or die ("Database nggak ada, >> ".mysql_error());

?>