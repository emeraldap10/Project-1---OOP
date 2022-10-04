<?php 
interface a 
{ 
 public function foo(); 
} 
interface b 
{ 
 public function bar(); 
} 
interface c extends a, b 
{ 
 public function baz(); 
} 
class d implements c 
{ 
 public function foo() 
 { 
 } 
 public function bar() 
 {

 } 
 public function baz() 
 { 
 } 
 //Jika baris 27-29 public function baz() dihapus maka akan terjadi error,
 //karena pada object interface, ketika kita mengimplementasikan object tersebut, 
 //seluruh method pada interface harus diimplementasikan seluruhnya. 
 //Karena class d mengimplementinterface c, maka method-method pada interface c harus diimplementasikan seluruhnya.
} 
?>
