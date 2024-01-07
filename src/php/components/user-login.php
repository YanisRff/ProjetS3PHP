<?php
    function loginUI($pdo){
        if (checklogin()){
            $token = tokenDecode();
            $patient = Patient::getPatientFromId($pdo, $token[1]);
            echo '<div class="d-flex flex-row align-items-center gap-3 me-2">
            <img src="src/img/avatar.png" alt="avatar" id="avatar" style="width: 14.3%; height: auto; border-radius: 50%">
            <div>
                <a class="text-white fw-bold mt-3 link-underline-opacity-75-hover link-underline link-underline-opacity-0 link-offset-3-hover link-underline-light">'.$patient["p_surname"]." ".$patient["p_name"].'</a>
            </div>
        </div>';
        } else {
            echo '<a href="login-praticien.php"> <button type="button" class="btn btn-light" style="top: 0.4375em;">Vous êtes praticien ?</button></a><div id="login"><p class="text-white fw-bold">Se connecter</p></div><p>   </p>';
        }
    }
?>