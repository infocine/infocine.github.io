<?php
  session_start();
//Warning la connexion ne se fait pas 
  include_once(__DIR__.'db/connexionDB.php');

  if(isset($_SESSION['id'])){
    header('Location: /');
  }

  if(!empty($_POST)){
    extract($_POST);
    $valid = (boolean) true;

    if(isset($_POST['connexion'])){
      $mail = (String) trim($mail);
      $password = (String) trim($password);

      if($valid){
        header('Location: /');
        exit;
      }
    }
  }

?>



<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" >

    <title>Connexion</title>
  </head>
  <body>

        <!-- la barre menu intelligente 
     // <php (manque ?)
        require_once('menu.php');
    ?> -->
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><nav class="navbar navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="https://image.freepik.com/vecteurs-libre/cinema-logo_23-2147503279.jpg" alt="" width="30" height="24">
              </a>
            </div>
          </nav></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-md-auto">
            <?php
              if(isset($_SESSION['id'])){
              ?>
                 <li class= "nav-item">
                  <a class="nav-link" href="deconnexion.php">Deconnexion</a>
                  </li>

              <?php
              }else{
                ?> 
                  <li class= "nav-item">
                  <a class="nav-link" href="inscription.php">S'inscrire</a>
                  </li>
                  <li class= "nav-item">
                  <a class="nav-link" href="connexion.php">Se connecter</a>
                </li>
              <?php
                }
              ?>
              
            </ul>
            
          </div>
        </div>
      </nav>
      
    <h1>Se connecter</h1>

    <form method="post">

<section>
  <div>
  <?php
        if(isset($erreur_mail)){
          echo $erreur_mail;
        }
      ?>
    <input type="text" name="mail" placeholder="Mail">
  </div>
  <div>
  <?php
        if(isset($erreur_password)){
          echo $erreur_password;
        }
      ?>

    <input type="password" name="password" placeholder="Mot de passe">
  </div>

<input type="submit" name="connexion" value="Se connecter">
</section>

</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>