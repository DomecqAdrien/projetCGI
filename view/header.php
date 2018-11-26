<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title ?></title>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="./components/css/bootstrap.min.css">
        <script type="text/javascript" src="./components/js/boostrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">IPI-Team</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="../employes/read">Actualités</a>
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
                        <a class="nav-link" href="signup">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
