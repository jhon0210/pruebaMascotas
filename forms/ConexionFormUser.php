<?php

   class Conexion{
     private $host = 'localhost';
     private $user = 'root';
     private $password = '';
     private $db = 'mascotas';
     private $conexion;

     public function __construct(){
       $connectionString = 'mysql:hos='.$this->host.';dbname='.$this->db.';charset=utf8';
       try {
           $this->connect = new PDO($connectionString,$this->user,$this->password);
           $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch (Exception $e) {
         $this->connect = 'Error en la conexion';
         echo "ERROR: ". $e->getMessage();
       }

           }
           public  function connect(){
             return $this->connect;
           }

   }




 ?>
