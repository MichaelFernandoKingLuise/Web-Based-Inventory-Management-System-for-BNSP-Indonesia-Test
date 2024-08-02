<?php
include('koneksi.php');
$id	= $_POST['id'];
$kode_barang	= $_POST['kode_barang'];
$nama_barang	= $_POST['nama_barang'];
$jenis_barang	= $_POST['jenis_barang'];
$satuan_barang	= $_POST['satuan_barang'];
$merk_barang	= $_POST['merk_barang'];
$produsen_barang	= $_POST['produsen_barang'];
$harga_beli_barang	= $_POST['harga_beli_barang'];
$sql 	= "UPDATE tabel_barang SET kode_barang='$kode_barang', nama_barang='$nama_barang',jenis_barang='$jenis_barang', satuan_barang='$satuan_barang', merk_barang='$merk_barang', produsen_barang='$produsen_barang', harga_beli_barang='$harga_beli_barang' WHERE id='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Update, silahkan coba lagi!.'); 
			document.location = 'barang_formedit.php?id=$id'; 
		</script>";

}
?>