<!DOCTYPE html>
<html lang="fr">
 <head>
   <meta charset="utf-8">
   <title> Oui....Stiti </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Just+Me+Again+Down+Here&family=Open+Sans&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="src/css/styles.css">
    <?php
         require('src/php/db/dbconnect.php');
         require('src/php/constants.php');
         require('src/php/db/Login.php');
         ini_set('display_errors', 1);
         error_reporting(E_ALL);
         $pdo = dbConnect();
    ?>
 </head>
 <body>
    <div id="topbar" class="d-flex justify-content-between flex-row">
        <div><p id="DoctISEN" class="w-100" style="position: fixed; top: 0px; left: 0px; font-size: 36px">
                Doct'ISEN
            </p>
        </div>
        <div class="d-flex flex-row align-items-center gap-3 me-2">
            <div class="d-flex flex-row align-items-center gap-3 me-2">
                <?php
                //Affichage du gravatar de l'utilisateur (si il en a un)
                $query = $pdo->prepare("SELECT * FROM patient WHERE p_mail = 'MarlonTheriault@dayrep.com'");
                $query->execute();
                $result = $query->fetchAll();
                foreach ($result as $row) {
                    echo '<img src="https://www.gravatar.com/avatar/' . md5($row['p_mail']) . '?s=64" alt="avatar" id="avatar" style="width: 14.3%; height: auto; border-radius: 50%">';
                }
                ?>
                <div>
                    <a class="text-white fw-bold mt-3 link-underline-opacity-75-hover link-underline link-underline-opacity-0 link-offset-3-hover link-underline-light">
                        <?php
                        $query = $pdo->prepare("SELECT * FROM patient WHERE p_mail = 'MarlonTheriault@dayrep.com'");
                        $query->execute();
                        $result = $query->fetchAll();
                        foreach ($result as $row) {
                            echo $row['p_name'] . ' ' . $row['p_surname'];
                        }
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="h-100">
        <div class="row">
            <div class="col-3 border-end border-dark border-3 h-100 mt-2 text-center d-flex flex-column justify-content-center">
                <div class="d-flex flex-column">
                    <div class="border-bottom pb-3 border-dark border-3 align-self-center">
                        <h5 class="text-center">Vos rendez-vous à venir</h5>
                        <div class="card rounded-4 mx-2 pointer">
                            <div class="card-header bg-danger">
                                <div class="d-flex flex-row justify-content-between text-white">
                                    <p>Jeudi 30 Novembre 2023</p>
                                    <p>16:30</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Camille Frampas</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Masseur-kinésitherapeute</h6>
                            </div>
                            <div class="card-footer">
                                <p>Preparer la consulation</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 align-self-center">
                        <h5 class="text-center">Vos rendez-vous passé</h5>
                        <div class="card rounded-4 mx-2 mt-2">
                            <div class="card-header bg-danger">
                                <div class="d-flex flex-row justify-content-between text-white">
                                    <p>Jeudi 9 Novembre 2023</p>
                                    <p>16:30</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Camille Frampas</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Masseur-kinésitherapeute</h6>
                            </div>
                            <div class="card-footer">
                                <p>Reprendre rendez-vous</p>
                            </div>
                        </div>
                        <div class="card rounded-4 mx-2 mt-2">
                            <div class="card-header bg-danger">
                                <div class="d-flex flex-row justify-content-between text-white">
                                    <p>Jeudi 16 Novembre 2023</p>
                                    <p>16:30</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Camille Frampas</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Masseur-kinésitherapeute</h6>
                            </div>
                            <div class="card-footer">
                                <p>Reprendre rendez-vous</p>
                            </div>
                        </div>
                        <div class="card rounded-4 mx-2 mt-2">
                            <div class="card-header bg-danger">
                                <div class="d-flex flex-row justify-content-between text-white">
                                    <p>Jeudi 23 Novembre 2023</p>
                                    <p>16:30</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Camille Frampas</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Masseur-kinésitherapeute</h6>
                            </div>
                            <div class="card-footer">
                                <p>Reprendre rendez-vous</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border-end border-dark border-3 h-100 mt-2 text-center d-flex flex-column justify-content-center">
                <div class="card rounded-4 mx-2">
                    <div class="card-header bg-danger">
                        <div class="d-flex flex-row justify-content-between text-white">
                            <p>Jeudi 30 Novembre 2023</p>
                            <p>16:30</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Camille Frampas</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Masseur-kinésitherapeute</h6>
                        <a href="#" class="card-link">Déplacer le RDV</a>
                        <a href="#" class="card-link text-danger">Annuler le RDV</a>
                    </div>
                </div>
                <div class="card rounded-4 mx-2 mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Préparer la consulation</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Pour gagner du temps et améliorer votre prise en charge.</h6>
                        <a href="#" class="card-link">Envoyer les documents</a>
                    </div>
                </div>
                <div class="card rounded-4 mx-2 mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Patient</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Félix MARQUET</h6>
                    </div>
                </div>
                <div class="card rounded-4 mx-2 mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Lieu de la consulation</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Ekilibre<br>
                            1bis Rue du Metropolitain<br>
                            44470 Carquefou<br></h6>
                    </div>
                </div>
            </div>
            <div class="col h-100">
                <form class="input-group mt-5" method="post">
                    <input type="text" aria-label="First name" class="form-control" placeholder="Nom, spécialité, établissement ...">
                    <input type="text" aria-label="Last name" class="form-control" placeholder="Où ?">
                    <button class="btn btn-danger me-3" type="submit" id="button-addon2">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </body>
</html>