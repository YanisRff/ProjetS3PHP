<?php
    function loginUI($pdo){
        if (checklogin()){
            $token = tokenDecode();
            $patient = Patient::getPatientFromId($pdo, $token[1]);
            echo '<div class="d-flex flex-row align-items-center gap-3 me-2">
            <img src="https://www.gravatar.com/avatar/' . md5($patient['p_mail']) . '?s=64" alt="avatar" id="avatar" style="width: 14.3%; height: auto; border-radius: 50%">
            <div>
                <a href="src/php/db/scripts/deconnexion.php" class="text-white fw-bold mt-3 link-underline-opacity-75-hover link-underline link-underline-opacity-0 link-offset-3-hover link-underline-light">'.$patient["p_surname"]." ".$patient["p_name"].'</a>
            </div>
        </div>';
        } else {
            echo '<a href="login-praticien.php"> <button type="button" class="btn btn-danger" style="top: 0.4375em;">Vous êtes praticien ?</button> </a><a href="login.php"> <button type="button" class="btn btn-danger" style="top: 0.4375em;">Se connecter</button></a><p>   </p>';
        }
    }
?>