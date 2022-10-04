<?php 
abstract class mahasiswa  
{ 
 abstract protected function getTugasAkhir(); 
 abstract protected function getProgram($postfix); 
 public function tugasAkhir() 
 { 
 print $this->getTugasAkhir() . "<br>"; 
 } 
} 
class sarjana extends mahasiswa 
{ 
 protected function getTugasAkhir() 
 { 
 return "Emerald A P"; 
 } 
 public function getProgram($postfix){ 
 print "{$postfix} Saya "; 
 } 
} 
class magister extends mahasiswa 
{ 
 public function getTugasAkhir() 
 { 
 return "G.211.21.0021"; 
 } 
 public function getProgram($postfix) 
 { 
 print "{$postfix} Saya "; 
 } 
 // Jika baris 29-31 dihapus maka akan terjadi error
 // Karena pada class anak yang mewarisi super class harus menuliskan semua method abstrak dari super classnya.
}
?>
