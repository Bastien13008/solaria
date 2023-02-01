<?php
session_start();

$profil = file_get_contents("https://mc-heads.net/avatar/Akkranne/100");
$ping = file_get_contents("https://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=play.skysword.fr&port=25565");
?>
<?php
require_once 'config.php'; 
$requete = $bdd->prepare('SELECT * FROM Utilisateur WHERE id = '.$_SESSION['id']);
$requete->execute();
$reponse = $requete->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Profil</title>
    <link rel="stylesheet" href="css/solaria.css" media="screen">
<link rel="stylesheet" href="Profil.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/solaria.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.2, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Solaria"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Profil">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="fr"><header class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-section-row-container" id="sec-0749" style=""><div class="u-section-rows">
        <div class="u-custom-color-1 u-section-row u-section-row-1" id="sec-b8ea">
          <div class="u-clearfix u-sheet u-sheet-1">
          <?php 
            if(!isset($_SESSION['id'])) {
            echo'            
            <a href="Connexion.php" class="u-border-none u-btn u-button-style u-hover-black u-none u-btn-1">Connexion<span style="font-weight: 400;">
                <span style="font-weight: 700;"> &nbsp; </span>
              </span>
            </a>
            <a href="Inscription.php" class="u-border-none u-btn u-button-style u-hover-black u-none u-btn-2">Inscription</a>
          </div>
            ';
            } 
            else
            {
                echo'
                <a href="Profil.php" class="u-border-none u-btn u-button-style u-hover-black u-none u-btn-1">Mon Profil<span style="font-weight: 400;">
                <span style="font-weight: 700;"> &nbsp; </span>
              </span>
            </a>
            <a href="../Login/Deconnexion.php" class="u-border-none u-btn u-button-style u-hover-black u-none u-btn-2">Deconnexion</a>
          </div>
                ';
            }
            ?>
          
          
          
          
          
        </div>
        <div class="u-clearfix u-grey-90 u-section-row u-section-row-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-7e35">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
              <div class="menu-collapse u-custom-font u-font-pt-sans" style="font-size: 1.875rem; letter-spacing: 0px; font-weight: 700;">
                <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-custom-font u-font-pt-sans u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-black u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-white" href="index.php" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-black u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-white" href="vote.php" style="padding: 10px 20px;">Voter</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-black u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-white" href="boutique.php" style="padding: 10px 20px;">Boutique</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-black u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-white" href="wiki.php" style="padding: 10px 20px;">Wiki</a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="vote.php">Voter</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="boutique.php">Boutique</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="wiki.php">Wiki</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="sec-c8c6" data-image-width="1920" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-hover-feature u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/5121.png" alt="" data-image-width="512" data-image-height="512">
        <div class="u-black u-container-style u-group u-opacity u-opacity-45 u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <a href="blog/blog.html" class="u-border-3 u-border-active-custom-color-4 u-border-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-btn u-btn-round u-button-style u-custom-color-3 u-hover-custom-color-3 u-radius-7 u-btn-1">play.solaria-mc.fr</a>
            <h4 class="u-text u-text-default u-text-1"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/44386-1c4cf74d.png" alt=""></span>&nbsp;Rejoins <?php echo'<span style="font-style: italic;" class="u-text-custom-color-3">'.$ping.' </span>';?>joueurs 
            </h4>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-border-10 u-border-custom-color-2 u-border-no-left u-border-no-right u-clearfix u-custom-color-1 u-section-2" id="sec-27d3">
      <div class="u-clearfix u-sheet u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-sheet-1">
        <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-top-sm u-container-layout-1">
            <div class="u-border-3 u-border-black u-container-style u-custom-color-8 u-group u-shape-rectangle u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-border-3 u-border-black u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-color-1 u-expanded-width u-group u-shape-rectangle u-group-3">
                  <div class="u-container-layout u-valign-middle u-container-layout-3">
                    <h6 class="u-text u-text-default u-text-1">Mon Profil</h6>
                  </div>
                </div>
     <?php
     echo'
                <img class="u-image u-image-round u-radius-10 u-image-1" src="https://mc-heads.net/avatar/'. $reponse['pseudo'].'/45" alt="" data-image-width="1280" data-image-height="853">
                <p class="u-custom-font u-heading-font u-text u-text-default u-text-2">'.$reponse['pseudo'].'</p>
                <ul class="u-text u-text-3">
                  <li>Inscription : '.$reponse['date_inscription'].'</li>
                  <li>Argent : '.$reponse['token'].' Euros</li>
                  <li>Email : '.$reponse['email'].'</li>
                </ul>
';
?>
         
                <a href="discord.solaria-mc.fr" class="u-border-3 u-border-active-custom-color-4 u-border-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-btn u-btn-round u-button-style u-custom-color-3 u-hover-custom-color-3 u-radius-7 u-btn-1">Espace Discord</a>
                <a href="#sec-83da" class="u-border-3 u-border-active-custom-color-4 u-border-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-btn u-btn-round u-button-style u-custom-color-3 u-dialog-link u-hover-custom-color-3 u-radius-7 u-btn-2">Créditer mon compte</a>
         
                
                <div class="u-container-style u-custom-color-7 u-group u-radius-4 u-shape-round u-group-4">
                  <div class="u-container-layout u-container-layout-4">
  
             <p class="u-text u-text-body-color u-text-default u-text-4">Membre</p>
                  </div>
                </div>
                <?php
                if($reponse['Rangs'] == 1) {
                echo'
                <a href="/panel" class="u-border-3 u-border-active-custom-color-4 u-border-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-btn u-btn-round u-button-style u-custom-color-3 u-hover-custom-color-3 u-radius-7 u-btn-3">Espace Admin</a>
                ';
                } else {
                echo'
                ';
                }
?>
            </div>
            </div>
            <div class="u-border-3 u-border-black u-container-style u-custom-color-8 u-group u-shape-rectangle u-group-5">
              <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-5">
                <div class="u-border-3 u-border-black u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-color-1 u-expanded-width u-group u-shape-rectangle u-group-6">
                  <div class="u-container-layout u-container-layout-6">
                    <h6 class="u-text u-text-default u-text-5">Changer le mot de passe</h6>
                  </div>
                </div>
                <div class="u-form u-form-1">
                <form  action="password_post.php" method="post"  source="email" name="form" style="padding: 38px;">
                    <div class="u-form-group u-form-name u-label-top">
                      <label for="name-f580" class="u-label u-label-1">Saisir votre Mot de Passe</label>
                      <input type="password" id="name-f580" name="password" class="u-border-2 u-border-custom-color-2 u-custom-color-6 u-input u-input-rectangle u-text-white u-input-1" required="">
                    </div>
                    <br>

                    <div class="u-form-email u-form-group u-label-top">
                      <label for="email-f580" class="u-label u-label-2">Confirmation du Mot de Passe</label>
                      <input type="password" id="email-f580" name="password_retype" class="u-border-2 u-border-custom-color-2 u-custom-color-6 u-input u-input-rectangle u-text-white u-input-2" required="">
                    </div>
                
                    <div class="u-align-center u-form-group u-form-submit u-label-top">
                      <input type="submit" value="submit" class="u-form-control-hidden">
                      <a href="#" class="u-border-3 u-border-active-custom-color-4 u-border-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-hover-custom-color-3 u-radius-7 u-btn-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Confirmation</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="u-border-3 u-border-black u-container-style u-custom-color-8 u-group u-shape-rectangle u-group-7">
              <div class="u-container-layout u-valign-top-xs u-container-layout-7">
                <div class="u-border-3 u-border-black u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-color-1 u-expanded-width u-group u-shape-rectangle u-group-8">
                  <div class="u-container-layout u-valign-middle u-container-layout-8">
                    <h6 class="u-text u-text-default u-text-6">Envoyez des crédit à un joueur</h6>
                  </div>
                </div>
                <div class="u-form u-form-2">
                <form  action="token_post.php" method="post"  source="email" name="form" style="padding: 38px;">
                    <div class="u-form-group u-form-name u-label-top">
                      <label for="name-f580" class="u-label u-label-3">Pseudo</label>
                      <input type="text" id="name-f580" name="pseudo" class="u-border-2 u-border-custom-color-2 u-custom-color-6 u-input u-input-rectangle u-text-white u-input-3" required="">
                    </div>
                    <br>
                    <div class="u-form-email u-form-group u-label-top">
                      <label for="email-f580" class="u-label u-label-4">Crédit</label>
                      <input type="text" id="email-f580" name="token" class="u-border-2 u-border-custom-color-2 u-custom-color-6 u-input u-input-rectangle u-text-white u-input-4" required="">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit u-label-top">
                      <input type="submit" value="submit" class="u-form-control-hidden">
                      <a href="#" class="u-border-3 u-border-active-custom-color-4 u-border-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-hover-custom-color-3 u-radius-7 u-btn-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Envoyer</a>
                    </div>
                    <div class="u-form-send-message u-form-send-success"></div>
                    <div class="u-form-send-error u-form-send-message"></div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="af7ba5ef84dce00e39fb07f32e4aa305">
                  </form>
                </div>
              </div>
            </div>
            <div class="u-border-3 u-border-black u-container-style u-custom-color-8 u-group u-shape-rectangle u-group-9">
              <div class="u-container-layout u-container-layout-9">
                <div class="u-border-3 u-border-black u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-color-1 u-expanded-width u-group u-shape-rectangle u-group-10">
                  <div class="u-container-layout u-valign-middle u-container-layout-10">
                    <h6 class="u-text u-text-default u-text-7">Saisir votre code cadeaux</h6>
                  </div>
                </div>
                <div class="u-form u-form-3">
                <form  action="giftcode_post.php" method="post"  source="email" name="form" style="padding: 38px;">
                    <div class="u-form-email u-form-group u-label-top">
                      <label for="email-f580" class="u-label u-label-5">Code Cadeaux</label>
                      <input type="text" id="email-f580" name="key" class="u-border-2 u-border-custom-color-2 u-custom-color-6 u-input u-input-rectangle u-text-white u-input-5" required="">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit u-label-top">
                      <input type="submit" value="submit" class="u-form-control-hidden">
                      <a href="#" class="u-border-3 u-border-active-custom-color-4 u-border-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-hover-custom-color-3 u-radius-7 u-btn-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Confirmation</a>
                    </div>
                    <div class="u-form-send-message u-form-send-success"></div>
                    <div class="u-form-send-error u-form-send-message"></div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="af7ba5ef84dce00e39fb07f32e4aa305">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-90 u-section-3" id="sec-723f">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
<section class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-6" id="sec-83da">
  <div class="u-align-center u-container-style u-dialog u-shape-rectangle u-white u-dialog-1">
    <div class="u-container-layout u-container-layout-1">
      <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1920" data-image-height="1080" src="images/wallpaper-02.jpg">
      <div class="u-container-style u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-container-layout-2">
        <?php
                require_once 'config.php'; 
                $requete = $bdd->prepare('SELECT * FROM dedipass');
                $requete->execute();
                $reponse = $requete->fetch(PDO::FETCH_ASSOC);
                echo'
              <div data-dedipass="'.$reponse['public_key'].'" data-dedipass-custom=""></div>
              <script src="//api.dedipass.com/v1/pay.js"></script>
              ';
?>            </div>
      </div>
    </div><button class="u-border-1 u-border-grey-25 u-dialog-close-button u-icon u-icon-circle u-text-custom-color-1 u-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6e8b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-6e8b"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
  </div>
</section><style>.u-dialog-section-6 .u-dialog-1 {
width: 1111px;
min-height: 707px;
height: auto;
background-image: none;
margin: 68px calc(((100% - 1140px) / 2)) 60px auto;
}

.u-dialog-section-6 .u-container-layout-1 {
padding: 0;
}

.u-dialog-section-6 .u-image-1 {
height: 390px;
margin-top: 0;
margin-bottom: 0;
}

.u-dialog-section-6 .u-group-1 {
width: 609px;
min-height: 222px;
height: auto;
margin: 53px auto 0;
}

.u-dialog-section-6 .u-container-layout-2 {
padding: 30px;
}

.u-dialog-section-6 .u-text-1 {
margin-bottom: 0;
margin-top: 0;
}

.u-dialog-section-6 .u-icon-1 {
width: 31px;
height: 31px;
background-image: none;
left: auto;
top: 20px;
position: absolute;
right: 20px;
padding: 2px;
}

@media (max-width: 1199px) {
.u-dialog-section-6 .u-dialog-1 {
width: 940px;
margin-right: calc(((100% - 940px) / 2));
}

.u-dialog-section-6 .u-image-1 {
height: 390px;
}

.u-dialog-section-6 .u-group-1 {
width: 609px;
min-height: 222px;
height: auto;
}
}

@media (max-width: 991px) {
.u-dialog-section-6 .u-dialog-1 {
width: 720px;
min-height: 683px;
margin-right: auto;
}

.u-dialog-section-6 .u-group-1 {
margin-top: 32px;
}
}

@media (max-width: 767px) {
.u-dialog-section-6 .u-dialog-1 {
width: 540px;
min-height: 730px;
}

.u-dialog-section-6 .u-group-1 {
width: 540px;
margin-top: 118px;
}

.u-dialog-section-6 .u-container-layout-2 {
padding-left: 10px;
padding-right: 10px;
}
}

@media (max-width: 575px) {
.u-dialog-section-6 .u-dialog-1 {
width: 340px;
min-height: 362px;
}

.u-dialog-section-6 .u-image-1 {
height: 178px;
}

.u-dialog-section-6 .u-group-1 {
min-height: 148px;
width: 308px;
margin-top: 7px;
}

.u-dialog-section-6 .u-text-1 {
margin-top: 30px;
}
}</style>
</body></html>