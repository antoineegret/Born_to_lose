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
        <link rel="stylesheet" type="text/css" href="assets/css/game.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap');
        </style>
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <!-- début navbar -->
            <div id="navbar" class="bg-white">
                <!-- début navbar partie navigation jeu --> 
                <ul class="justify-content-center">
                    <li><button type="button" class="navbarButton">Héro</button></li>
                    <li><button type="button" class="navbarButton">Quartier</button></li>
                    <li><button type="button" class="navbarButton">Refuge</button></li>
                    <li><button type="button" class="navbarButton">Statistique</button></li>
                    <li><button type="button" class="navbarButton">Message</button></li>
                </ul>
                <!-- fin navbar partie navigation jeu -->
                <!-- début navbar partie ressource -->
                <div class="mr-5">
                    <ul class="stock">
                    <li><p>Dépôt de ressources : </p></li>
                    <li><img src="assets/img/fruit.svg" class="eatSVG" alt="Stock nourriture"></li>
                    <li><img src="assets/img/water.svg" class="eatSVG" alt="Stock eau"></li>
                    <li><img src="assets/img/chip.svg" class="eatSVG" alt="Consommation eau"></li>
                </ul>
                </div>
                <!-- fin navbar partie ressource -->
            </div>
            <!-- fin navbar -->
            <img src="assets/img/city.jpg" id="city" alt="city"/>
            <div class="production text-white">
                <ul>
                    <li>Productions :</li>
                </ul>
                <ul>
                    <li>Nourriture</li>
                </ul>
                <ul>
                    <li>Eau</li>
                </ul>
                
            </div>
        </div>
        <!--lien vers fichier javascript pour faire du jquery-->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
        </script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
