<?php
include('koneksi.php');
$kode_barang	= $_POST['kode_barang'];
$nama_barang	= $_POST['nama_barang'];
$jenis_barang	= $_POST['jenis_barang'];
$satuan_barang	= $_POST['satuan_barang'];
$merk_barang	= $_POST['merk_barang'];
$produsen_barang	= $_POST['produsen_barang'];
$harga_beli_barang	= $_POST['harga_beli_barang'];
$sql 	= "INSERT INTO tabel_barang (kode_barang, nama_barang, jenis_barang, satuan_barang, merk_barang, produsen_barang, harga_beli_barang) VALUES ('$kode_barang','$nama_barang','$jenis_barang','$satuan_barang', '$merk_barang','$produsen_barang', '$harga_beli_barang')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data barang.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Input, silahkan coba lagi!.');
			document.location = 'barang_formadd.php'; 
		</script>";
}
?>