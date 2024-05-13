<?php 
if(isset($_POST['action'])) {
    include_once '../connection/connect.php';
    include_once '../model/index_model.class.php';
    $savingClasses = new savingClass();
    $action = trim($_POST['action']);

    switch($action){
        case 'submitFunction':
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            echo $savingClasses->submitFunction($connection,$username,$password);
            break;
        case '':
            break;
    }
}
?>