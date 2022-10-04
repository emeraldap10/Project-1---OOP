<?php
// //Class Mobil Awal
// class Mobil{
//     public $nama;
//     public $merk;

//     function getInfo(){
//         echo "Nama Mobil : ".$this->nama."</br>";
//         echo "Merk : ".$this->merk."</br>";
        
//     }
  
// }

// //Bagian Main
// $ferrari=new Mobil();
// $ferrari->nama="250 GTO";
// $ferrari->merk="Ferrari";

// $ferrari->getInfo();

//Class Mobil overload getInfo dengan parameter $a
class Mobil{
    public $nama;
    public $merk;

    function getInfo($a){
        echo "Nama Mobil : ".$a->nama."</br>";
        echo "Merk : ".$a->merk."</br>";
        
    }
  
}

//Bagian Main
$ferrari=new Mobil();
$ferrari->nama="250 GTO";
$ferrari->merk="Ferrari";

$ferrari->getInfo($ferrari); // Jika $ferrari setelah getInfo dihapus maka akan terjadi error seperti hasil yang saya tampilkan di PDF

// Kesimpulan pada saat menggunakan method overload getInfo dengan parameter $a 
// ketika dijalankan akan terjadi error, hal ini terjadi karena parameter $a 
// pada fungsi getInfo tidak tahu apa yang akan dia jalankan, akan tetapi jika kita mengganti $this 
// pada nama maupun merk dengan parameter $a di dalam fungsi getInfo dan memasukkan variable $mobil ke dalam fungsi $mobil->getInfo(); maka parameter $a akan mendeteksi bahwa $a akan mengacu ke nama dan juga merk. 
// dan ketika dijalankan hasilnya akan sama seperti program awalnya.
?>
