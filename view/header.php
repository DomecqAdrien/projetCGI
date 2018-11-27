<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $title ?></title>

        <!-- Bootstrap core CSS -->
        <link href="./components/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="./components/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="./components/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="./components/css/freelancer.min.css" rel="stylesheet">
    

    </head>

    <?php if (session_status() == PHP_SESSION_NONE) session_start() ?>
    <?php //var_dump($_SERVER); ?>
    

    <body>

        <!-- Navbar -->
        <!--    <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="accueil">Accueil</a>
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
                </ul> -->
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?=$dir ?>/accueil">Accueil</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand js-scroll-trigger" href=<?=$dir ?>/actualites>Actualités</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand js-scroll-trigger" href="accueil">Evenements</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand js-scroll-trigger" href="accueil">Média</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand js-scroll-trigger" href="accueil">Discussions</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand js-scroll-trigger" href="accueil">Dons</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                  <?php if($_SESSION) : ?>
                    <span class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">Bonjour, <?= $_SESSION['prenom']." ".$_SESSION['nom'] ?></span>
                      <?php else : ?>
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="signup">Sign up</a>
                      <?php endif ?>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                  <?php if($_SESSION) : ?>
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout">Log out</a>
                  <?php else : ?>
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login">Log in</a>
                  <?php endif ?>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Alerts -->
        <?php if(isset($message)) : ?>
            <div class="alert alert-<?= $message['type'] ?> text-center" role="alert">
                <?= $message['message'] ?>
            </div>
        <?php endif ?>

        <br><br><br><br>
        <!-- Vue principale -->
        <?php include $path ?>

        <!-- Footer -->
        <!-- Bootstrap core JavaScript -->
        <script src="./components/vendor/jquery/jquery.min.js"></script>
        <script src="./components/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="./components/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="./components/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="./components/js/jqBootstrapValidation.js"></script>
        <script src="./components/js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="./components/js/freelancer.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="./components/js/script.js"></script>

    </body>

    
</html>
