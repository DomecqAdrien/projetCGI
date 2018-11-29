<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $title ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?= Router::components('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="<?= Router::components('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="<?= Router::components('vendor/magnific-popup/magnific-popup.css') ?>" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="<?= Router::components('css/freelancer.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= Router::components('css/bootstrap-theme.min') ?>">

    

    </head>

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
                        <a class="nav-link" href=".<?= Router::components('employes/create') ?>">Evènement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=".<?= Router::components('tickets/read') ?>">Média</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=".<?= Router::components('tickets/create') ?>">Discussions</a>
                    </li>
                </ul> -->
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
          <div class="container">
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand js-scroll-trigger" href="<?=Router::url('accueil') ?>">Accueil</a>
            <a class="navbar-brand js-scroll-trigger" href="<?=Router::url('actualites') ?>">Actualités</a>
            <a class="navbar-brand js-scroll-trigger" href="<?=Router::url('forum') ?>">Forum</a>
            <a class="navbar-brand js-scroll-trigger" href="<?=Router::url('chat') ?>">Discussions</a>
            <a class="navbar-brand js-scroll-trigger" href="<?=Router::url('dons') ?>">Dons</a>
            <a class="navbar-brand js-scroll-trigger" href="<?=Router::url('user/adherer') ?>">Adhérer</a>
            <?php if($_SESSION && $_SESSION['role'] == 'admin') : ?>
              <a class="navbar-brand js-scroll-trigger" href="<?=Router::url('admin/index') ?>">Admin</a>
            <?php endif ?>



            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                  <?php if($_SESSION) : ?>
                    <span class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-info" ><?= $_SESSION['prenom']." ".$_SESSION['nom'];
                    if($_SESSION['role'] == 'admin'){ echo '[Admin]'; } ?></span>
                      <?php else : ?>
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=Router::url('user/signup') ?>">Sign up</a>
                      <?php endif ?>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                  <?php if($_SESSION) : ?>
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=Router::url('user/logout') ?>">Log out</a>
                  <?php else : ?>
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=Router::url('user/login') ?>">Log in</a>
                  <?php endif ?>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Alerts -->
        <?php if(isset($message)) :  var_dump($message) ;?>
            <div class="alert alert-<?= $message['type'] ?> text-center" role="alert">
                <?= $message['message'] ?>
            </div>
        <?php endif ?>

        <br><br><br><br>
        <!-- Vue principale -->
        <?= $content ?>

        <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">2215 John Daniel Drive
              <br>Clark, MO 65243</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About IPI-Team</h4>
            <p class="lead mb-0">BLablabla
              <a href="http://startbootstrap.com">Start Football</a>.</p>
          </div>
        </div>
      </div>
    </footer>
        <!-- Bootstrap core JavaScript -->
        <script src="<?= Router::components('vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?= Router::components('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

        <!-- Plugin JavaScript -->
        <script src="<?= Router::components('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
        <script src="<?= Router::components('vendor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>

        <!-- Contact Form JavaScript -->
        <script src="<?= Router::components('js/jqBootstrapValidation.js') ?>"></script>

        <!-- Custom scripts for this template -->
        <script src="<?= Router::components('js/freelancer.min.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?= Router::components('js/script.js') ?>"></script>
        <script type="text/javascript" src="<?= Router::components('js/chat.js') ?>"></script>

    </body>

    
</html>
