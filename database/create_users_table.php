<?php

require "Config.php";

class Users extends Config{

    function create_user_table(){
        try {
            $sql = "CREATE TABLE users(`id` bigint AUTO_INCREMENT PRIMARY KEY,
                `name` varchar(200) NOT NULL,`email` varchar(200) UNIQUE NOT NULL,
                 `password` varchar(200) NOT NULL, `confirm_pass` varchar(200) NOT NULL,
                 `type` varchar(100) NOT NULL, `created_at` TIMESTAMP , `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP )";

            $result= mysqli_query($this->dbconect(),$sql);
            if (!$result){
                echo "<br>Error creating table: ";
            }
            return "return statement".$result;
        }catch (Exception $e){
            echo $e->getMessage();
        }

    }
}

$a = new Users();
$a->create_user_table();

