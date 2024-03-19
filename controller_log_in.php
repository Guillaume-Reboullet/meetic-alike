<?php
include_once 'src/database.php';
include_once 'src/verif.php';

header('Location: templates/homepage.php');

function verifDataLogin(){
    $validity = true;
    $datas = new Verif($_POST);
    if($datas->verifyEmpty() === false || 
    $datas->verifyPassword($_POST["password"]) === false ||
    $datas->verifyEmail($_POST["email"]) === false)
    {
        $validity = false;
    }
    return $validity;
}

if(verifDataLogin())
{
    $stmt = "SELECT id, email, pwd FROM user WHERE email LIKE :email";
    $email=$_POST['email'];
    $password=$_POST['password'];

    $db = new Database('meetic');
    $db->queryLogin($stmt, $email, $password);
}
?>

