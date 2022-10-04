<?php

class LibraryModel{

   function __construct()  
   {
      $this->connection = new mysqli(
         'localhost:8080', 'root','', 'library'
      );
   }

   public function getLibrary(){
      $query = "SELECT * FROM book";
      $result = $this->connection->query($query);
      return $result;
   }
}
