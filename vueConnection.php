<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> ToDoux Liste </title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <header>
    <div class="main">
      <a href="index.php">
        <h1>ToDoux Liste</h1>
      </a>
  <section>
    <div class="main">
      <h2>Connection</h2>
      <div class="formulaire">
        <form class="form-add-list" action="index.php?action=connection" method="post">
          <input type="email" name="adresse_mail" placeholder="Adresse Email">
          <input type="password" name="password" placeholder="Mot de passe">
            <!-- <input type="submit" name="submitConnexion" value="Connexion"> -->
            <!-- <input type="submit" name="action" value="connection">yayaya -->
            <!-- <input type="hidden" name="action" value="connection">yayaya -->
            <!-- <a href="?action=connection"> -->
              <input type="submit" name="submitConnexion" value="Connexion">
            <!-- </a> -->
            
        </form>
      </div>
     
      <a class="butonacueil" href="?action=pageInscription">
        <button type="button" name="button" class="btn btn-primary" id="btn">Inscription</button>
      </a>
      <a class="butonacueil" href="?action=Accueil">
        <button type="button" name="Invité" class="btn btn-primary" id="btn">Invité</button>
      </a>
    <?php
      // require_once(__DIR__.'/controller/inscriptionConnectionController.php');
      // require (__DIR__.'/modeles/indexGateway.php');
      //require_once(__DIR__.'/index.php');
      //$icController = new inscriptionConnectionController();
      //$icController->connection();

      // require_once(__DIR__.'/config/Autoload.php');
      // Autoload::charger();
      // $cont = new frontController($con);
    ?>
    </div>     

  </section>
  <script src="script.js"></script>
</body>
</html>
