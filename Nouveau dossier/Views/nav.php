<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark info-color mb-5">
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">La Manu</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (!isset($_SESSION['auth']['login'])) { ?>
                    <li class="nav-item"><a href="register.php" class="nav-link btn btn-default">Inscription</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link btn btn-default">Connexion</a></li>
                <?php } else { ?>
                    <!-- Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link" href="">Bonjour <?= ucfirst(strip_tags($_SESSION['auth']['lastname']))[0] ?> </a>                       
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>                       
                    </li>
                <?php } ?>

            </ul>
            <!-- Links -->
        </div>
        <!-- Collapsible content -->
    </div>
</nav>
<!--/.Navbar-->