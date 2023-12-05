<?php

class Patient {
    public static function getPatient($pdo,$mail) {
        $query = $pdo->prepare("SELECT * FROM patient WHERE p_mail = :mail");
        $query->bindParam(':mail', $mail);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function GetRDV($pdo,$mail){
        $query = $pdo->prepare("SELECT * FROM rdv WHERE p_mail = :mail");
        $query->bindParam(':mail', $mail);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
}
?>