<?php
function checklogin(){
    if(isset($_SESSION['token'])){
        return true;
    } else {
        return false;
    }
}
?>