<?php
    require_once '../function.php'; 
    
    session_start();
    $requete = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = '.$_SESSION['id']);
    $requete->execute();
    $reponse = $requete->fetch(PDO::FETCH_ASSOC);



if ($reponse['Rangs'] != 1) {
    header("Location: ../index.php");
    exit;
}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
    <title>Solaria - Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">

        <?php
      include 'navbar.php';
?>


        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
            
       
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  
                  <!-- PROFILE INFO -->
                 
                  <div class="navbar-profile" onclick="window.location.href='../Profil.php'">
                  <?php
                  echo'
                    <img class="img-xs rounded-circle" src="https://mc-heads.net/avatar/'. $reponse['pseudo'].'/45" alt="">
                    <p href="https://google.fr" class="mb-0 d-none d-sm-block navbar-profile-name">'. $reponse['pseudo'].'</p>
                  </div>';
                    ?>




                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <div class="">
                      <div class="">
                      </div>
                    </div>

                  </a>
                
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                 

                </div>
              </div>
            </div>
            <?php             
            require_once '../function.php'; 

            $requetepay = $bdd->prepare('SELECT * FROM Payment');
            $requetepay->execute();
            $reponsepay = $requetepay->fetch(PDO::FETCH_ASSOC);

            $numPeople = getNumPeople();
            $numVote = getNumVote();
            $top_voter_name = get_top_voter_name();
            $top_voter_number = get_top_voter_number();
            $moneyTotal = getMoneyTotal();
            $moneyObject = getMoneyObjectif();
            $Credit = getCredit();
            $lastPrice = getLastPrice();
            
            echo'
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
    
                          <h3 class="mb-0">'.$numPeople.'</h3>
                     
                        </div>
                      </div>
                      <div class="col-3">
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Joueurs Inscrit</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">'.$lastPrice.'$</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="">                
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Dernier Payment</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">'.$numVote.'</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="">
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Vote total</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">'.$top_voter_name['pseudo'].'</h3>
                          <p class="text-success ml-2 mb-0 font-weight-large">'.$top_voter_number['Vote'].' Votes</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="">
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Meilleur Voteur</h6>
                  </div>
                </div>
              </div>
            </div>
           
          
  
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Revenue Total</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">'.$moneyTotal.'$</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Objectif mois prochain</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">'.$moneyObject.'$</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Investisement</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">'.$Credit.'$</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List des Achats</h4>
                    <div class="table-responsive">
<table class="table" id="table-data">
<thead>
<tr>
  <th>
    </div>
  </th>
  <th> Nom du client </th>
  <th> Numéro de commande </th>
  <th> Coût du produit </th>
  <th> Mode de paiement </th>
  <th> Date du paiement </th>
  <th> Statut de paiement </th>
</tr>
</thead>
';
  ?>
<tbody id="messages">





        

                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script>
setInterval('load_messages()', 500);
function load_messages(){
    $('#messages').load("stats.php");
}

    </script>
  </body>
</html>