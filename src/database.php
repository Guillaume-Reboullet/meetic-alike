<?php
class Database {
    
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $pdo;

    public $lastname;
    public $firstname;
    public $birthdate;
    public $gender;
    public $city;
    public $email;
    public $password;
    public $loisir;
    
    public function __construct($db_name, $db_host = "localhost", $db_user = "guillaume", $db_pass ="Loulou97133") {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }
    
    
    private function getPDO(){
        if($this->pdo === NULL){
            try
            {
                $pdo = new PDO("mysql:host=localhost;dbname=meetic",'guillaume','Loulou97133');
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                echo "Error db".$e->getMessage();
                throw new PDOExecption("$e");
            }
            catch(Exception $e)
            {
                echo "General Error".$e->getMessage();
                throw new Execption($e);
            }
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
    
    public function queryRegister($statement, $lastname, $firstname, $birthdate, $gender, $city, $email, $password, $loisir)
    {
        $pwd_hashed = password_hash($password, PASSWORD_DEFAULT);
        
        try
        {
            $request = $this->getPDO()->prepare($statement);
            $request->bindValue(':lastname', $lastname);
            $request->bindValue(':firstname', $firstname);
            $request->bindValue(':birthdate', $birthdate);
            $request->bindValue(':genre', $gender);
            $request->bindValue(':city', $city);
            $request->bindValue(':email', $email);
            $request->bindValue(':password', $pwd_hashed);
            $request->bindValue(':loisir', $loisir);
            $request->execute();
        }
        catch(PDOException $e)
        {
            echo "Error db".$e->getMessage();
            throw new PDOExecption("$e");
        }
        catch(Exception $e)
        {
            echo "General Error".$e->getMessage();
            throw new Execption($e);
        }
    }

    public function queryLogin($statement, $email, $password)
    {
        try
        {
            $request = $this->getPDO()->prepare($statement);
            $request->bindValue(':email', $email);
            $request->execute();
            $datas = $request->fetchAll();

            $pwd_verify = password_verify($password, $pwd_hashed);
            if($pwd_verify)
            {
                if($email == $datas['email'] && $password == $datas['pwd'])
                {
                    echo "<script>alert 'Connexion réussi !'</script>";
                    echo "Connexion réussi !";
                    $user_id = $datas['id']; 
                }
            }else{
                echo "<script>alert 'MDP incorrect !'</script>";
                echo "Password is incorrect !";
            }
        }
        catch(PDOExecption $e)
        {
                echo "Error db".$e->getMessage();
                echo "test message";
        }
        catch(Execption $e)
        {
            echo "General Error".$e->getMessage();
        }
    }
}