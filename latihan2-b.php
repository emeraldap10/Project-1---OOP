<?php
require_once("latihan2-a.php");
$mhs2=new mahasiswa("Emerald","G.211.21.0021");
$mhs2->cetak();

// // Akan terjadi error karena Contructor dalam php oop tidak bisa di override
// dan pada sebuah class tidak boleh memiliki lebih dari satu Contructor
?>
