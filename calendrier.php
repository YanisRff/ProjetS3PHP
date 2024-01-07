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
    require('src/php/db/Calendrier.php');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $pdo = dbConnect();
    ?>
</head>
<body>
<div id="topbar" class="d-flex justify-content-between flex-row">
    <div>
        <a href="index.php">
            <p id="DoctISEN" class="top-0">
                Doct'ISEN
            </p>
        </a>
    </div>
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
<div id="searchbar">
    <form action="search.php" class="input-group p-5" method="post">
        <input type="text" aria-label="First name" class="form-control" id="nom" name="nom" placeholder="Nom, spécialité, établissement ...">
        <input type="text" aria-label="Last name" class="form-control" id="postal" name="postal" placeholder="Où ?">
        <button class="btn btn-danger" type="submit" id="button-addon2">Rechercher</button>
    </form>
</div>
<div class="h-100">
    <div class="row">
        <div class="col h-100 border-dark border-3 justify-content-center text-center ms-3 ">
            <div class="d-flex flex-column justify-content-center gap-6">
                <div>
                    <form class="mt-3" method="post">
                        <label for="date">Choisissez une date :</label>
                        <br>
                        <?php
                        echo '<input type="hidden" name="id" id="id" value="' . $_POST['id'] . '">';
                        echo '<input type="date" name="start" id="date" class="mt-2" value="' . $_POST['start'] . '">';
                        ?>
                        <br>
                        <input type="submit" value="Valider" class="mt-2">
                    </form>
                </div>
                <div>
                    <?php
                    DisplayMedecinCard($pdo, $_POST['id']);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-8 h-100 border-start border-dark border-3 me-3">
            <div class="mt-3 d-flex flex-column gap-3">
                <?php
                if(!isset($_POST['start']) || $_POST['start'] == null){
                    echo '<p class="ms-5 mt-2 fw-bold">Veuillez choisir une date</p>';
                }
                else{
                    displayRDVForDate($pdo, $_POST['start'], $_POST['id']);
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>