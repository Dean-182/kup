<?php
//insert.php 
$koneksi = mysqli_connect("localhost", "root", "", "db_angular_js"); 
$data = json_decode(file_get_contents("php://input")); 
$nama_barang = mysqli_real_escape_string($koneksi,
 $data->nama_barang); 
$stok = mysqli_real_escape_string($koneksi, $data->stok); 
$satuan = mysqli_real_escape_string($koneksi, 
 $data->satuan); 
$harga = mysqli_real_escape_string($koneksi, $data->harga); 
3
$btn_name = $data->btnName; 
 if($btn_name == "Tambah") 
{ 
$query = "INSERT INTO barang(nama_barang,stok,satuan,harga) 
VALUES ('$nama_barang', $stok,'$satuan',$harga)"; 
if(mysqli_query($koneksi, $query)) 
{ 
echo "Data Inserted..."; 
} 
else
{ 
echo 'Error'; 
} 
} 
?>