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
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
            
       
         
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
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Crée un compte</h4>

                    <form action="createuser_post.php" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Pseudo</label>
                        <input type="text" class="form-control" name="pseudo" placeholder="Le pseudo">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="L'email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mot de passe</label>
                        <input type="password" class="form-control" name="password" placeholder="Le mot de passe">
                      </div>  
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mot de passe</label>
                        <input type="password" class="form-control" name="password_retype" placeholder="Le mot de passe">
                      </div> 
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" id="newsletter" name="newsletter" value="1" class="form-check-input"> Administrateur - Panel </label>
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Valider</button>
                    </form>

                  </div>
                </div>
              </div>

        
              <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List des joueurs</h4>
                    <div class="table-responsive">
<table class="table" id="table-data">
<thead>
<tr>
  <th>
    </div>
  </th>
  <th> Pseudonyme </th>
  <th> E-mail </th>
  <th> Token </th>
  <th> Vote </th>
  <th> Rangs </th>
  <th> Adresse IP </th>
  <th> Date d'inscription </th>
  <th> Options </th>

</tr>
</thead>
  <?php
  
  $pdo = new PDO('mysql:host=localhost;dbname=solaria_bdd', 'solaria', 'Cjv_j7197');
  $stmt = $pdo->prepare('SELECT * FROM Utilisateur');
  $stmt->execute();
  
  while ($reponsepay = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                        </label>
                      </div>
                    </td>
                    <td>
                    <img src="https://mc-heads.net/avatar/'. $reponsepay['pseudo'].'/45" alt="image" />
                    <span class="pl-2">'.$reponsepay['pseudo'].'</span>
                    </td>
                    <td> '.$reponsepay['email'].'</td>
                    <td> '.$reponsepay['token'].'</td>
                    <td> '.$reponsepay['Vote'].'</td>
                    ';

              if($reponsepay['Rangs']== 0) { 
                    echo'
                    <td>
                    <label class="badge badge-success">Utilisateur</label>
                    </td>';
                  } 
              elseif($reponsepay['Rangs'] == 1) { 
                    echo'
                    <td>
                    <label class="badge badge-danger">Admin</label>
                    </td>';
                  } 
                  


                    echo'
                    <td> '.$reponsepay['ip'].'</td>
                    <td> '.$reponsepay['date_inscription'].'</td>
                    <td>
                    <a href="deleteplayer.php?id='.$reponsepay['ID'].'">
                    <button type="button" class="btn btn-danger btn-icon-text">
                    <i class="mdi mdi-delete-forever  btn-icon-prepend" ></i> Supprime </button>   
                    </a>                 
                    </td>

                </tr>';
  }
  ?>


                 
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
  </body>
</html>