<?php
class Verif {

    public $lastname;
    public $firstname;
    public $birthdate;
    public $gender;
    public $city;
    public $email;
    public $password;
    public $loisir;
    
    public function __construct($post) {
        $this->post = $post;
    }
    
    public function verifyEmpty(){
        $userinfo = true;
        foreach($this->post as $data)
        {
            if(empty($data))
            {
                $userinfo = false;
            }
        }
        return $userinfo;
    }
    
    public function verifyChar($lastname,$firstname,$city){
        $userinfo = true;
        $regex = "/^[a-z ,.'-]+$/";
        if(preg_match($regex, $lastname) === 0){
            $userinfo = false;
        }elseif(preg_match($regex, $firstname) === 0){
            $userinfo = false;
        }elseif(preg_match($regex, $city) === 0){
            $userinfo = false;
        }else{
            return $userinfo;
        }
    }

    public function verifyPassword($password){
        $userinfo = true;
        $regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
        if(preg_match($regex, $password) === 0){
            $userinfo = false;
        }
        return $userinfo;
    }

    public function verifyEmail($email){
        $userinfo = true;
        if(filter_var($email, FILTER_VALIDATE_EMAIL) != $email){
            $userinfo = false;
        }
        return $userinfo;
    }
}