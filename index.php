<?php

session_start();

include_once("controller/Controller.php");
$action = isset($_GET['action']) ? $_GET['action'] : '';
$controller = new Controller();

if($action == 'register'){
    $controller->registerUser();
}
elseif ($action == '404'){
    $controller->errorPage();
}
elseif ($action == 'login'){
    $controller->loginUser();
}
elseif($action == 'index') {
    $controller->homePage();
}
elseif ($action == 'admin') {
    if (isset($_GET['sort'])){
        $controller->adminPage($_GET['sort']);
    }
    elseif (isset($_GET['search'])) {
        $controller->adminPage('search');
    }
    else{
        $controller->adminPage(0);
    }
}
elseif ($action == 'edituser') {
    if (isset($_SESSION['loggedInUser']['type']) && $_SESSION['loggedInUser']['type'] == 'admin') {
        if (isset($_GET['id'])){
            $_SESSION['editId'] = $_GET['id'];
            $controller->updateUser($_SESSION['editId']);
        }else{
            $controller->updateUser($_SESSION['editId']);
        }
    }
}
elseif ($action == 'deleteuser') {
    $controller->deleteUser($_GET['id']);
}
else {
    if (isset($_SESSION['loggedInUser']['type'])){
        header("Location: http://localhost/ClothingStore/index.php?action=404");
    }else{
        Controller::loginPage();
    }
}
