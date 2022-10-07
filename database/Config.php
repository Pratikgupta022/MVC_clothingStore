<?php

class Config{
    private $serverName;
    private $username;
    private $password;
    private $database;

    function dbconect(){
        $this->serverName= "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "clothingStore";

        $conn=mysqli_connect($this->serverName,$this->username,$this->password,$this->database);
        if (!$conn){
            echo "Database connection error";
        }
//        else{
//            echo "Database connected <br>";
//        }
        return $conn;
    }

}