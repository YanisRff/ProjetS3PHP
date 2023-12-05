<?php

require_once ('../constants.php');
require_once ('dbconnect.php');

class Patient {
    public static function getPatient($pdo,$mail) {
        $query = $pdo->prepare("SELECT * FROM patient WHERE p_mail = :mail");
        $query->bindParam(':mail', $mail);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

$pdo = dbConnect();

print_r(Patient::getPatient($pdo,"MarlonTheriault@dayrep.com"));

?>