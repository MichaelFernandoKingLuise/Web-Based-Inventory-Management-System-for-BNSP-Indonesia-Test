<?php
$myHost	= "localhost";
$myUser	= "root";
$myPass	= "";
$myDbs	= "barang";
$koneksidb = mysqli_connect($myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}
?>