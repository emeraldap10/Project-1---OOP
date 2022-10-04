<?php
Class mahasiswa{
     public $nama;
     public $nim;
     
     function __construct($a,$b){
          $this->nama=$a;
          $this->nim=$b;
          echo "Kelas telah dibuat<br/><br/>";
          }

     // Menambahkan Konstruk di Line 11
     
     // function __construct($c,$d){
     //      $this->nama=$c;
     //      $this->nim=$d;
     //      echo "Kelas telah dibuat<br/><br/>";
     //      }

     function cetak(){
          echo $this->nama."<br/>".$this->nim."<br/><br/>";
          }
     function __destruct(){
          echo "Kelas telah dihancurkan";
          }
}
?>
