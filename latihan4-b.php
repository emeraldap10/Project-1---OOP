<?php 
require_once("latihan4-a.php"); 
$as = new asisten(); 
$as->setNama("tes ini Mila"); 
echo $as->getNama();

// Pada php oop, class asisten (child) bisa memanggil method dari mahasiswa (parent)
// getName masih berada didalam class Mahasiswa, maka tidak terjadi error
?>
