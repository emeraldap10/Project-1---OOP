<?php
class mahasiswa{
     public $nama;
     public $nim;

     // protected $nama;
     // protected $nim;
     // Jika Modifier diganti dengan Protected maka akan terjadi error,

     // private $nama;
     // private $nim;
     //property yang bermodifier private hanya bisa digunakan pada class mahasiswa sendiri

     function __construct(){}
     function setNama($a){
          $this->nama=$a;
          }
     function setNim($b){
          $this->nim=$b;
          }
     function getNama(){
          return $this->nama;
          }
     function getNim(){
          return $this->nim;
          }
     function destruct(){}
}
?>
