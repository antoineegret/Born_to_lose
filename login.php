<?php require 'controller/loginController.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <!--ligne pour responsive-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--ligne pour bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--liens vers les pages css puis javascript-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap');
  </style>
  <title>Born to lose</title>
</head>
<body>
  <div class="hero-image col-sm-12">
    <div class="hero-text">
        <h1>Se connecter</h1>

    <form action="" method="POST">

        <div class="form-group">
            <label for="">Pseudo ou email</label>
            <input type="text" name="pseudo" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="">Mot de passe <a href="forgetPassword.php">(J'ai oublié mon mot de passe)</a></label>
            <input type="password" name="userPassword" class="form-control"/>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="remember" value="1"/> Se souvenir de moi
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>
        <p><br></p>
        <a href="index.php">revenir a l'acueil</a>

    </form>     
    <!--lien vers fichier javascript pour faire du jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
  </html>
