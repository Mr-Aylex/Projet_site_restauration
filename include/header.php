<?php session_start();

require ($_SERVER['DOCUMENT_ROOT']) . '/Projet_site_restauration/traitement/model/class_profil.php';
if (isset($_SESSION['profil']))
{
  $profil = unserialize($_SESSION['profil']);
}?>
<header>

        <div class="container">
                <a class="logo" href=""><img src="/Projet_site_restauration/images/logo-white.png" alt="Logo"></a>
                <?php
                 if (empty($_SESSION)) { ?>
                <div class="right-area">
                        <a class="btn btn-danger" href="\Projet_site_restauration\vu\inscription_connexion\connexion.php">Se Connecter</a>
                    <a class="btn btn-danger" href="\Projet_site_restauration\vu\inscription_connexion\inscription.php">S'inscrire</a>
                </div><!-- right-area -->
              <?php }
              else { ?>
                <div class="right-area">
                        <a class="btn btn-danger" href="\Projet_site_restauration\traitement\deconnexion.php">Se déconnecter</a>
                </div><!-- right-area -->

              <?php } ?>

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <ul class="main-menu font-mountainsre" id="main-menu">
                        <li><a href="/Projet_site_restauration/index.php">Menu</a></li>
                        <?php if (isset($_SESSION['profil'])) {?>
                        <li><a href="/Projet_site_restauration/vu/reservation.php">Reservation</a></li>
                        <?php    if($profil->Get_admin()=="oui" or 'root') {
                          ?>
                        <li><a href="/Projet_site_restauration/vu/admin.php">Admin</a></li>
                        <?php }
                            } ?>
                        <li><a href="/Projet_site_restauration/vu/02_about_us.php">Notre restaurant</a></li>
                        <li><a href="/Projet_site_restauration/vu/03_menu.php">Nos menus</a></li>
                        <li><a href="/Projet_site_restauration/vu/05_contact.php">Contact</a></li>
                </ul>

                <div class="clearfix"></div>
        </div><!-- container -->
</header>
