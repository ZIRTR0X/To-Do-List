<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> ToDoux Liste </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <p class="logo_name">ToDoux Liste</p>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
         <i class='bx bx-search' ></i>
         <input type="text" placeholder="Recherche...">
         <span class="tooltip">Rechercher</span>
      </li>
      <li>
        <a href="?action=Deconnexion">
         <i class='bx bx-log-out' ></i>
         <p class="links_name">Déconecter</p>
        </a>
         <p class="tooltip">Déconecter</p>
      </li>
      <li>
        <a href="?action=Accueil">
         <i class='bx bx-home-alt' ></i>
         <p class="links_name">Accueil</p>
        </a>
         <p class="tooltip">Accueil</p>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <p class="links_name">Compte utilisateur</p>
       </a>
       <p class="tooltip">Compte utilisateur</p>
     </li>
     <li>
       <a href="#">
        <i class='bx bxs-graduation' ></i>
        <p class="links_name">Espace de travail</p>
       </a>
       <p class="tooltip">Espace de travail</p>
     </li>
     <?php
      $sidebar = new sidebarController();
      $sidebar->afficherListesPrivees();
      $sidebar->afficherListesPubliques();
      ?>
     <li>
       <a href="?action=NewListePage">
        <i class='bx bx-plus' ></i>
        <p class="links_name">Ajouter liste</p>
       </a>
       <p class="tooltip">Ajouter liste</p>
     </li>
     <li>
       <a href="#">
        <i class='bx bx-cog' ></i>
        <p class="links_name">Setting</p>
       </a>
       <p class="tooltip">Setting</p>
     </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="main">
        <!-- <h1>Nom de la liste</h1> -->


	<?php
    $listgw = new listeController();
    $listgw->afficherTitre();
    $listgw->ajouterTache();

    
      ?>
    </div>


        <!-- echo '<div class="flexboxitem">';
        echo "<h3>".$row['nomTache']."</h3>";
        echo "<p>".$row['descriptionTache']."</p>";
        echo '<div class="itemlist">';
        echo '<form class="fromliste"><input type="checkbox" name="checkbox" value="checkbox"></form>';
        echo "<button><i class='bx bx-trash'></i></button>";
        echo "</div>";
        echo "</div>"; -->



    <!-------------->
      
    </div>     
  </section>
  <script src="script.js"></script>
</body>
</html>

