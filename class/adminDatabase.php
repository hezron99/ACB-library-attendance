<?php
class Db{
    
        public function connect(){
        try {
           $host = "localhost";
           $database = "admin1";
           $username = "root";
           $password = "";
          
           
           $conn = new PDO("mysql:host=$host;dbname=$database", $username,$password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $conn;
        }catch(Exception $e){
            print("Error connecting to database".$e->getMessage());
            echo "Error connecting to database";
            die();
        }
        
       

    }
}