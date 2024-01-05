<?php
function getRdvByPatient($pdo){
    $statement = $pdo->prepare("SELECT rdv_date, rdv_time, concat(m_name, ' ', m_surname) as medecin, medecin.m_specialty, medecin.m_id, concat(p_name, ' ', p_surname) as patient, l_adress as adresse, concat(l_postal, ' ', l_city) as ville
    FROM rendez_vous
    INNER JOIN patient ON rendez_vous.p_id = patient.p_id
    INNER JOIN propose ON rendez_vous.rdv_id = propose.rdv_id
    INNER JOIN medecin ON propose.m_id = medecin.m_id
    INNER JOIN lieu on lieu.l_id = rendez_vous.l_id
    
    WHERE NOW() <= (rdv_date + rdv_time) AND p_mail = 'felix.marquet@isen-ouest.yncrea.fr'
    ORDER BY rdv_date, rdv_time ASC");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        return $result;
    } else {
        return null;
    }
}

function getPastRdvByPatient($pdo){
    $statement = $pdo->prepare("SELECT rdv_date, rdv_time, concat(m_name, ' ', m_surname) as medecin, medecin.m_specialty, medecin.m_id, concat(p_name, ' ', p_surname) as patient, l_adress as adresse, concat(l_postal, ' ', l_city) as ville
    FROM rendez_vous
    INNER JOIN patient ON rendez_vous.p_id = patient.p_id
    INNER JOIN propose ON rendez_vous.rdv_id = propose.rdv_id
    INNER JOIN medecin ON propose.m_id = medecin.m_id
    INNER JOIN lieu on lieu.l_id = rendez_vous.l_id
    
    WHERE NOW() > (rdv_date + rdv_time) AND p_mail = 'felix.marquet@isen-ouest.yncrea.fr'
    ORDER BY rdv_date, rdv_time ASC");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        return $result;
    } else {
        return null;
    }
}

function getNextRdvByPatient($pdo){
    $statement = $pdo->prepare("SELECT rdv_date, rdv_time, rendez_vous.rdv_id, concat(m_name, ' ', m_surname) as medecin, medecin.m_specialty, concat(p_name, ' ', p_surname) as patient, l_adress as adresse, concat(l_postal, ' ', l_city) as ville
    FROM rendez_vous
    INNER JOIN patient ON rendez_vous.p_id = patient.p_id
    INNER JOIN propose ON rendez_vous.rdv_id = propose.rdv_id
    INNER JOIN medecin ON propose.m_id = medecin.m_id
    INNER JOIN lieu on lieu.l_id = rendez_vous.l_id
    
    WHERE NOW() <= (rdv_date + rdv_time) AND p_mail = 'felix.marquet@isen-ouest.yncrea.fr'
    ORDER BY rdv_date, rdv_time ASC");
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        return $result;
    } else {
        return null;
    }
}

function CancelRDV($pdo, $id){
    $statement = $pdo->prepare("DELETE FROM propose WHERE rdv_id = :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
    $statement = $pdo->prepare("DELETE FROM rendez_vous WHERE rdv_id = :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
}
