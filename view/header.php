<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title ?></title>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" media="all"
         href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="./components/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" />
    

    </head>

    <?php if (session_status() == PHP_SESSION_NONE) session_start() ?>
    

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">IPI-Team</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actualites">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../employes/create">Evènement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tickets/read">Média</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tickets/create">Discussions</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <?php if($_SESSION) : ?>
                            <span class="nav-link text-light">Bonjour, <?= $_SESSION['prenom']." ".$_SESSION['nom'] ?></span>
                        <?php else : ?>
                            <a class="nav-link" href="signup">Sign Up</a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item">
                        <?php if($_SESSION) : ?>
                            <a class="nav-link" href="logout">Logout</a>
                        <?php else : ?>
                            <a class="nav-link" href="login">Login</a>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
        </nav>

        <?php include $path ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="./components/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="./components/js/script.js"></script>

    </body>

    
</html>
