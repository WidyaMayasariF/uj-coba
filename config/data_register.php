<?php
require_once "koneksi.php";

try{
$sql = 'SELECT * FROM `data_pendaftar`';
$q = $database_connection -> query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e){
die("Tidak bisa Membuka Database $database_name:" . $e->getMessage());

}
?>