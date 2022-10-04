<?php 
require_once("latihan5-a.php"); 
$s = new sarjana; 
$s->getProgram('Nama') ."<br>"; 
$s->tugasAkhir(); 
$m = new magister; 
$m->getProgram('NIM') ."<br>";
 
$m->tugasAkhir();
?>
