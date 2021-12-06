<?php
   class Conexion{
      static public function CBD(){
        $bd = new PDO("mysql:host=localhost;dbname=carrito","root","");
        return $bd;
      }
   }
?>