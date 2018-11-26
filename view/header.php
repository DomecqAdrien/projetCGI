<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title ?></title>
        <!-- Bootstrap -->
        <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Projet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="../employes/read">Liste des employés</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../employes/create">Ajouter un employé</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../tickets/read">Liste des tickets</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../tickets/create">Ajouter un ticket</a>
                </li>
                </ul>
            </div>
        </nav>
