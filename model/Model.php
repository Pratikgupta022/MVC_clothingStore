<?php

require "database/Config.php";

class Model extends Config {
    function __construct(){
        //
    }

    function registerUser($data){
        $name = $data['name'];
        $email = $data['email'];
        $password = md5($data['password']);
        $cpassword = md5($data['cpassword']);
        $sql = "SELECT * FROM users WHERE email='$email'";
        $res = $this->dbconect()->query($sql);
        if (mysqli_num_rows($res)>0){
            return $res=false;
        }else{
            $insertQuery = "INSERT INTO users (name,email,password,confirm_pass,type) VALUES('$name','$email','$password','$cpassword','user')";
            return $res = $this->dbconect()->query($insertQuery);
        }
    }

    function loginCheck($data){
        $email = $data['email'];
        $password = md5($data['password']);
        $sql = "SELECT *  FROM users WHERE email='$email' AND password = '$password'";
        $res = $this->dbconect()->query($sql);
        $row = mysqli_fetch_assoc($res);
        $check = mysqli_num_rows($res);
        if ($check){
            return $row;
        }else{
            return $check=false;
        }
    }

    function allUsersData($sort,$start_from,$data_per_page){
        if ($sort=='1'){
            $sql = "SELECT * FROM users ORDER BY created_at ASC limit $start_from,$data_per_page ";
        }
        elseif ($sort=='0'){
            $sql = "SELECT * FROM users ORDER BY created_at DESC limit $start_from,$data_per_page ";
        }
        else{
            $sql = "SELECT * FROM users ORDER BY $sort ASC  limit $start_from,$data_per_page";
        }
        $res = $this->dbconect()->query($sql);
        $data=array();
        if (mysqli_num_rows($res)>0){
            while ($row = mysqli_fetch_assoc($res)){
                $data[]= $row;
            }
        }
        return $data;
    }

    function getDataById($id){
        $sql = "SELECT *  FROM users WHERE id=$id";
        $res = $this->dbconect()->query($sql);
        $row = mysqli_fetch_assoc($res);
        return $row;
    }

    function editUser($data){
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $type = $data['type'];
        $sql = "UPDATE users SET name = '$name', email= '$email' , type = '$type' WHERE id = '$id'";
        $res = $this->dbconect()->query($sql);
        if ($res){
            header("location:http://localhost/ClothingStore/index.php?action=admin");
        }else{
            print_r("error occurred while inserting"); die;
        }
    }

    function deleteUser($id){
        $sql = "DELETE FROM users WHERE id='$id'";
        $res = $this->dbconect()->query($sql);
        if ($res){
            header("location:http://localhost/ClothingStore/index.php?action=admin");
        }else{
            echo "error occurred"; die;
        }
    }

    function allUsersCount(){
        $sql = "SELECT * FROM users ";
        $res = $this->dbconect()->query($sql);
        $total_records = mysqli_num_rows($res);
        return $total_records;
    }

    function adminSearch($column,$search){
        $sql = "SELECT $column FROM users WHERE $column LIKE '%$search%' ORDER BY $column ASC  LIMIT 5 ";
        $res = $this->dbconect()->query($sql);
        while ($Result = MySQLi_fetch_array($res)) {
            ?>
            <a> <li onclick='fill("<?php print_r($Result[$column]); ?>")'><?php print_r($Result[$column]); ?></li></a>
            <?php
        }
    }
}

