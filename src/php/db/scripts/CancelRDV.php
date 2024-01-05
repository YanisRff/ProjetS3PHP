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
    CancelRDV($pdo, $rdv_id);

    header("Location: ../../../../calendrier.php");
    exit();
}
?>
