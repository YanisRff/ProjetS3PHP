<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title> Oui....Stiti </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Just+Me+Again+Down+Here&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
 <body style="background-color: #EEF2F7">
 <div id="topbar">
     <p id="DoctISEN" class="w-100" style="position: fixed; top: 0px; left: 0px; font-size: 36px">
         Doct'ISEN
     </p>
 </div>

 <div class="signInSecondaryCard p-3 m-0 border-0 bd-example m-0 border-0 text-center justify-content-center mt-5">
     <div class="dropdown-menu text-center align-content-center">
         <h5 class="fw-bold">J'ai déjà un compte Doct'ISEN?</h5>
         <a href="login.php" class="">
             <button class="btn btn-danger logButton">Se connecter</button>
         </a>
     </div>
 </div>

 <div class="SignInPrimaryCard p-3 m-0 border-0 bd-example m-0 border-0 text-center justify-content-center">
     <div class="loginInsideCard dropdown-menu">
         <h5 class="text-center fw-bold">Nouveau sur Doct'ISEN ?</h5>
         <form class="px-4 py-3">
             <div class="align-content-center">
             <div class="mb-3">
                 <label for="Name" class="form-label align-baseline">Nom</label>
                 <input type="text" class="form-control" id="Name" placeholder="Veuillez mettre votre nom">
             </div>
             <div class="mb-3">
                 <label for="FirstName" class="form-label">Prénom</label>
                 <input type="text" class="form-control" id="FirstName" placeholder="Veuillez mettre votre prénom">
             </div>
             <div class="mb-3">
                 <label for="Num" class="form-label">Numéro de téléphone</label>
                 <input type="tel" pattern="[0-9]{10}" class="form-control" id="Num" placeholder="Numéro de téléphone">
             </div>
             <div class="mb-3">
                 <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                 <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
             </div>
             <div class="mb-3">
                 <label for="exampleDropdownFormEmailConfirmation1" class="form-label">Email address confirmation</label>
                 <input type="email" class="form-control" id="exampleDropdownFormEmailConfirmation1" placeholder="email@example.com">
             </div>
             <div class="mb-3">
                 <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                 <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
             </div>
             <div class="mb-3">
                 <label for="exampleDropdownFormPasswordConfirmation1" class="form-label">Password Confirmation</label>
                 <input type="password" class="form-control" id="exampleDropdownFormPasswordConfirmation1" placeholder="Password">
             </div>
             <div class="align-content-center text-center ">
                 <button type="submit" class="btn btn-danger logButton">Se connecter</button>
             </div>
         </form>
     </div>
 </div>


 </body>
</html>