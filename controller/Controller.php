<?php
include "model/Model.php";

class Controller{
    public $model;
    function __construct(){
        $this->model = new Model();
    }

    static function authenticate($type){
        if ($type=='admin'){
            return 'admin';
        }elseif ($type=='user'){
            return 'user';
        }else{
            header("Location: http://localhost/ClothingStore/index.php?action=404");
        }
    }

    static function errorPage(){
        include "view/404.php";
    }

    static function loginPage(){
        include "view/login.php";
    }

    function adminPage($sort){
        $authentication = self::authenticate($_SESSION['loggedInUser']['type']);
        if ($authentication=='admin'){
            $data_per_page=5;
            if (isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }
            $start_from=($page-1)*5;
            if (isset($_POST['search'])) {
                if (isset($_POST['column']) && $_POST['column']!= "Select column to search") {
                    $data = $this->model->adminSearch($_POST['column'], $_POST['search']);
                    die;
                }else{
                    $data = $this->model->adminSearch('name', $_POST['search']);
                    die;
                }
            }else{
                $data = $this->model->allUsersData($sort,$start_from,$data_per_page);
            }
            $pag_data = $this->model->allUsersCount();
            $total_pages=ceil($pag_data/$data_per_page);
            include "view/admin/index.php";
        }
        else{
            header("Location: http://localhost/ClothingStore/index.php?action=404");
        }
    }

    function updateUser($editid){
        if (isset($_POST['name'])){
            $id = $editid;
            $name= trim($_POST['name']);
            $email = trim($_POST['email']);
            $type = trim($_POST['type']);
            $formData = ['id'=>$id,'name'=>$name,'email'=>$email,'type'=>$type];
            $updateQuery = $this->model->editUser($formData);
        }else{
            $data = $this->model->getDataById($editid);
            include "view/admin/editUser.php";
        }
    }

    function deleteUser($editid){
        $this->model->deleteUser($editid);
    }

    static function homePage(){
        $authentication = self::authenticate($_SESSION['loggedInUser']['type']);
        if ($authentication=='user'){
            include "view/home.php";
        }
        else{
            self::errorPage();
        }
    }

    function registerUser(){
        try {
            if(isset($_POST['name']) ){

                $errors = [];
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $cPassword = trim($_POST['cpassword']);

                $formElements = ['name' => $name, 'email' => $email, 'password' => $password, 'cpassword' => $cPassword];
                foreach ($formElements as $key => $value) {
                    if (empty($value)) {
                        $errors[$key] = $key . " is required";
                    }
                }
                if ($password != $cPassword){
                    $errors["mpass"] = " Passwords do not match";
                }
                if (empty($errors)) {
                    $res = $this->model->registerUser($formElements);
                    if ($res){
                        if (isset($_SESSION['loggedInUser']['type']) && $_SESSION['loggedInUser']['type'] == 'admin'){
                            echo json_encode(array("statusCode" => $_SESSION['loggedInUser']['type']));
                        }else{
                            echo json_encode(array("statusCode" => 'user'));
                        }
                        die;
                    }else{
                        echo json_encode(array("emailExists" => "Please use different email"));
                        die;
                    }
                } else {
                    $errors['msg'] = "Sorry! something went wrong.";
                    echo json_encode($errors);die;
                }
            }else{
                include "view/register.php";
            }
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    function loginUser(){
        if (isset($_SESSION['loggedInUser'])){
            self::errorPage();
        }else{
            try {
                if(isset($_POST['email']) ){
                    $email = trim($_POST['email']);
                    $password = trim($_POST['password']);
                    $formElements = ['email' => $email, 'password' => $password];
                    foreach ($formElements as $key => $value) {
                        if (empty($value)) {
                            $errors[$key] = $key . " is required";
                        }
                    }
                    if (empty($errors)) {
                        $res = $this->model->loginCheck($formElements);
                        if ($res){
                            $_SESSION['loggedInUser']=$res;
//                        $_SESSION['login_id']=$res['id'];
//                        $_SESSION['login_type']=$res['type'];
                            echo json_encode($res);
//                        echo json_encode(array("statusCode"=>200));
                            die;
                        }else{
                            echo json_encode(array("error"=>"Wrong credentials"));
                            die;
                        }
                    }else{
                        echo json_encode($errors);
                    }
                }else{
                    self::loginPage();
                }
            }catch (Exception $e){
                echo $e->getMessage();
            }
        }
    }

}