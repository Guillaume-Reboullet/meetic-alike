<?php
header('Location: templates/log_in.php');

include_once 'src/database.php';
include_once 'src/verif.php';


function verifDataRegister() {
    $validity = true;
    $datas = new Verif($_POST);
    if($datas->verifyEmpty() === false || 
    $datas->verifyChar($_POST["lastname"], $_POST["firstname"], $_POST["city"]) === false ||
    $datas->verifyPassword($_POST["password"]) === false ||
    $datas->verifyEmail($_POST["email"]) === false)
    {
        $validity = false;
    }
    return $validity;
}

if(verifDataRegister())
{
    $stmt = "INSERT INTO user (lastname, firstname, birthdate, gender, city, email, pwd, loisir) VALUES (:lastname, :firstname, :birthdate, :genre, :city, :email, :password, :loisir)";
    $lastname = $_POST['lastname'];
    $firstname =$_POST['firstname'];
    $date = $_POST['date'];
    $genre=$_POST['genre'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $loisir=$_POST['loisir'];
    
    $db = new Database("meetic");
    $db->queryRegister($stmt, $lastname, $firstname, $date, $genre, $city, $email, $password, $loisir);
}