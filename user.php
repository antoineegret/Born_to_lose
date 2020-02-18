<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <!--ligne pour responsive-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--ligne pour bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--liens vers les pages css puis javascript-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap');
  </style>
  <title>Document</title>
</head>
<body>
  <div class="hero-image">
    <div class="hero-text">
      <h1>Born to lose.</h1>
      <h2>inscrit toi des maintenant</h2>
      <button type="button" id="btn_connexion" class="btn btn-primary" data-toggle="modal" data-target="#connection">
        Connexion
      </button>
      <button type="button" id="btn_inscription" class="btn btn-primary" data-toggle="modal"
      data-target="#subscriptionButton">
      Inscription
    </button>
      <div id="texte_presentation"><p>Born to lose<br> est un jeux de survie par navigateur, vous faites partie des rares
          survivants d'une catastrophe majeure.Votre but dans le jeu est simple: SURVIVRE. pour ce faire vous devrez vous
              nourrir vous protéger des danger mais également vous entourer d'autres survivants.</p></div>
    </div>
  </div>
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal" id="connection" tabindex="-1" role="dialog" aria-labelledby="connectionButton" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="connectionButton">Connect-toi!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="game.php" method="post">
            <div>
                <label for="pseudo">pseudo :</label><input id="pseudo" name="pseudo" type="text" placeholder="Gérard"></div>
              <div>
                  <label for="mot_de_passe">mot de passe :</label><input id="mot_de_passe" name="mot_de_passe" type="password"
                placeholder="btvN56">
              </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-danger" value="connexion">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal" id="subscriptionButton" tabindex="-1" role="dialog" aria-labelledby="subscriptionButton"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="subscriptionBtn">Inscrit-toi!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="user.php" method="post">
            <div>
              <label for="pseudo">pseudo :</label><input id="pseudo" type="text" placeholder="Gérard"/></div>
              <div>
                <label for="password">mot de passe :</label><input id="password" type="password"
                placeholder="btvN56" name="password"/>
              </div>
              <div>
                <label for="Confirmation">Confirmation :</label><input id="Confirmation" type="password"
                placeholder="btvN56"/>
              </div>
              <div>
                <label for="mail">adresse mail:</label><input id="mail" type="email" placeholder="Billy@orange.com">
              </div>
              <div>
                <label for="Confirmation_mail">Confirmation :</label><input id="Confirmation_mail" type="email"
                placeholder="Billy@orange.com">
              </div>
              <div class="modal-footer" action="user.php">
                <!-- toujour faire un input type submit pour le bouton de validation d'un bouton -->
                <input type="submit" class="btn btn-danger" value="Jouer"/>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!--lien vers fichier javascript pour faire du jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
  </body>
  </html>
