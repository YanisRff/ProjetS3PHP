<?php

require('../dbconnect.php');
require('../../constants.php');
require('../Login.php');
require('../Rdv.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);
$pdo = dbConnect();


if (isset($_POST['cancel_button'])) {
    $rdv_id = $_POST['rdv_id'];
    CancelRDV($pdo, $rdv_id);
    header("Location: ../../../../rdv.php");
    exit();
}


if (isset($_POST['move_button'])) {
    $rdv_id = $_POST['rdv_id'];
    $MedID = $_POST['medecin_id'];
    $date = $_POST['date'];
    CancelRDV($pdo, $rdv_id);

    echo '<form method="post" action="../../../../calendrier.php">';
    echo '<input type="hidden" name="id" id="id" value="'.$MedID.'">';
    echo '<input type="hidden" name="start" id="start" value="'.date("Y-m-d").'">';
    echo '<button type="submit" class="btn btn-danger">Sélectionner un nouveau rendez-vous</button>';
    echo '</form>';
    exit();
}
?>
