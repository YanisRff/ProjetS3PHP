<?php

function selectRDVTimeByID($pdo, $id){
    $query = $pdo->prepare("SELECT * FROM rendez_vous WHERE rdv_id = :id");
    $query->bindParam(':id', $id);
    $query->execute();
    $result = $query->fetchAll();

    if (!empty($result)) {
        return $result[0]['rdv_time'];
    } else {
        return null;
    }
}


function selectRDVForDate($pdo, $date, $medecin){
    $availableHours = array();
    $query = $pdo->prepare("SELECT * FROM rendez_vous WHERE rdv_date = :date");
    $query->bindParam(':date', $date);
    $query->execute();
    $outerResult = $query->fetchAll();
    foreach ($outerResult as $row) {
        $innerQuery = $pdo->prepare("SELECT * FROM propose WHERE rdv_id = :rdv_id AND m_id = :m_id");
        $innerQuery->bindParam(':rdv_id', $row['rdv_id']);
        $innerQuery->bindParam(':m_id', $medecin);
        $innerQuery->execute();
        $innerQueryResult = $innerQuery->fetchAll();
        if ($innerQueryResult) {
            foreach ($innerQueryResult as $innerRow) {
                array_push($availableHours, $innerRow['rdv_id']);
            }
        }
    }
    return $availableHours;
}

function displayRDVForDate($pdo, $date, $medecin){
    $availableHours = selectRDVForDate($pdo, $date, $medecin);
    if(!$availableHours){
        echo '<p class="ms-5 mt-2 fw-bold">Aucun rendez-vous disponible</p>';
    }
    else{
        echo '<p class="ms-5 mt-2 fw-bold">Rendez-vous disponible :</p>';
        foreach ($availableHours as $hour){
            $hourValue = selectRDVTimeByID($pdo, $hour);
            $hourValue = substr($hourValue, 0, 5);
            $patient = "4";
            echo '<a href="./src/php/db/scripts/addRDVToDB.php?id='.$hour.'&patient='.$patient.'" class="btn btn-danger w-100">'.$hourValue.'</a>';
        }
    }
}




function DisplayMedecinCard($pdo, $medecin){
    $query = $pdo->prepare("SELECT * FROM medecin WHERE m_id = :id");
    $query->bindParam(':id', $medecin);
    $query->execute();
    $result = $query->fetchAll();
    foreach ($result as $row){
        echo '<div class="card mb-3">';
        echo '<div class="row g-0">';
        echo '<div class="col-md-4">';
        $imageUrl = 'https://thispersondoesnotexist.com';
        echo '<img src="' . $imageUrl . '" alt="doctor" class="img-fluid rounded-start" width="300" height="300">';
        echo '</div>';
        echo '<div class="col-md-8">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$row['m_name'].' '.$row['m_surname'].'</h5>';
        echo '<h6 class="card-subtitle mb-2 text-body-secondary">'.$row['m_specialty'].'</h6>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

function addRDVToDBThenRedirect($pdo, $rdv, $patient){
    $query = $pdo->prepare("UPDATE rendez_vous SET p_id = :p_id WHERE rdv_id = :rdv_id");
    $query->bindParam(':p_id', $patient);
    $query->bindParam(':rdv_id', $rdv);
    $query->execute();
    //Redirect to the rdv.php page
    echo '<meta http-equiv="refresh" content="0;URL=../../../rdv.php">';
}

?>