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
 </head>
 <body>
     <div id="topbar" class="d-flex justify-content-between flex-row">
         <div>
             <p id="DoctISEN" class="w-100" style="position: fixed; top: 0px; left: 0px; font-size: 36px">
                 Doct'ISEN
             </p>
         </div>
         <div class="d-flex flex-row align-items-center gap-3 me-2">
             <img src="src/img/avatar.png" alt="avatar" id="avatar" style="width: 14.3%; height: auto; border-radius: 50%">
             <div>
                 <a class="text-white fw-bold mt-3 link-underline-opacity-75-hover link-underline link-underline-opacity-0 link-offset-3-hover link-underline-light">Félix MARQUET</a>
             </div>
         </div>
     </div>
     <div id="searchbar">
         <form class="input-group p-5" method="post">
             <input type="text" aria-label="First name" class="form-control" placeholder="Nom, spécialité, établissement ...">
             <input type="text" aria-label="Last name" class="form-control" placeholder="Où ?">
             <button class="btn btn-danger" type="submit" id="button-addon2">Rechercher</button>
         </form>
     </div>
     <p class="ms-5 mt-2 fw-bold">
         6 Résultats
     </p>
     <div class="d-flex flex-row flex-wrap mx-5 gap-5">
         <div class="card mb-3">
             <div class="row g-0">
                 <div class="col-md-4">
                     <img src="src/img/docteur.png" alt="doctor" class="img-fluid rounded-start">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title">Dr. Marc HENOCQ</h5>
                         <h6 class="card-subtitle mb-2 text-body-secondary">Médecin généraliste</h6>
                         <p class="card-text">Disponiblilité :</p>
                         <button type="button" class="btn btn-danger">Prendre rendez-vous</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card mb-3">
             <div class="row g-0">
                 <div class="col-md-4">
                     <img src="src/img/docteur1.jpg" alt="doctor" class="img-fluid rounded-start" style="max-height: 325px;">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title">Dr. Marc HENOCQ</h5>
                         <h6 class="card-subtitle mb-2 text-body-secondary">Médecin généraliste</h6>
                         <p class="card-text">Disponiblilité :</p>
                         <button type="button" class="btn btn-danger">Prendre rendez-vous</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card mb-3">
             <div class="row g-0">
                 <div class="col-md-4">
                     <img src="src/img/IMG_1713.jpg" alt="doctor" class="img-fluid rounded-start" style="max-height: 325px;">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title">Dr. Nirina MACON</h5>
                         <h6 class="card-subtitle mb-2 text-body-secondary">Médecin généraliste</h6>
                         <p class="card-text">Disponiblilité :</p>
                         <button type="button" class="btn btn-danger">Prendre rendez-vous</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card mb-3">
             <div class="row g-0">
                 <div class="col-md-4">
                     <img src="src/img/docteur1.jpg" alt="doctor" class="img-fluid rounded-start" style="max-height: 325px;">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title">Dr. Marc HENOCQ</h5>
                         <h6 class="card-subtitle mb-2 text-body-secondary">Médecin généraliste</h6>
                         <p class="card-text">Disponiblilité :</p>
                         <button type="button" class="btn btn-danger">Prendre rendez-vous</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card mb-3">
             <div class="row g-0">
                 <div class="col-md-4">
                     <img src="src/img/docteur1.jpg" alt="doctor" class="img-fluid rounded-start" style="max-height: 325px;">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title">Dr. Marc HENOCQ</h5>
                         <h6 class="card-subtitle mb-2 text-body-secondary">Médecin généraliste</h6>
                         <p class="card-text">Disponiblilité :</p>
                         <button type="button" class="btn btn-danger">Prendre rendez-vous</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card mb-3">
             <div class="row g-0">
                 <div class="col-md-4">
                     <img src="src/img/docteur1.jpg" alt="doctor" class="img-fluid rounded-start" style="max-height: 325px;">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title">Dr. Marc HENOCQ</h5>
                         <h6 class="card-subtitle mb-2 text-body-secondary">Médecin généraliste</h6>
                         <p class="card-text">Disponiblilité :</p>
                         <button type="button" class="btn btn-danger">Prendre rendez-vous</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </body>
</html>