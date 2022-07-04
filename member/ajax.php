<?php 

$action = $_GET['action'];
include 'action_classes.php';
$crud = new Action();
if($action == 'save_borrower'){
    $save = $crud->save_borrower();
    if($save)
        echo $save;
}
if($action == 'save_borrow'){
    $save = $crud->save_borrow();
    if($save)
        echo $save;
}
if($action == 'login'){
    $login = $crud->login();
    if($login) 
    echo $login;
}
if($action == 'logout'){
    $logout = $crud->logout();
    if($logout) 
    echo $logout;
}

