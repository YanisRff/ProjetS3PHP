<?php

require_once ('../constants.php');
require_once ('dbconnect.php');

class LoginPatient {

    public static function checkMail($pdo,$mail) {
        $query = $pdo->prepare("SELECT count(*) FROM patient where p_mail = :mail");
        $query->bindParam(':mail', $mail);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function Login($pdo,$mail,$password) {
        
        if(LoginPatient::checkMail($pdo,$mail)){
            $query = $pdo->prepare("SELECT p_password FROM patient where p_mail = :mail");
            $query->bindParam(':mail', $mail);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if(password_verify($password,$result['p_password'])){
                echo "Login success";
                return true;
            } else {
                echo "Login failed";
                return false;
            }

        } else {
            echo "Mail not found";
            return false;
        }
    }
    
}

$pdo = dbConnect();

?>