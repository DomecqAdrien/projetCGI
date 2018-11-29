<?php $title = $post->getTitre() ?>
<link rel="stylesheet" type="text/css" href="<?= Router::components('css/post.css') ?>">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-default">
                <h5 class="card-header">
          <time class="float-right">
            <i class="fa fa-calendar"></i> <?= $post->getDateCreation() ?>
          </time>
        </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="card-text">
                                <h2> <i class="fa fa-smile-o"></i> <?= $post->getTitre() ?></h2>
                                <hr>
                                <?= $post->getContenu() ?>
                            </p>
                        </div>
                        <div class="col-md-3">

                            <div class="well text-center">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cricle"></i><?= $users[$post->getIdUser()]['prenom']." ".strtoupper($users[$post->getIdUser()]['nom']) ?></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><i class="fa fa-user"></i> See profile</a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i> Send PM</a></li>
                                        <li><a href="#"><i class="fa fa-code"></i>View all Articles</a></li>
                                        <li><a href="#"><i class="fa fa-th-list"></i>View all Posts</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-cogs"></i> Manage User (for adminstrator)</a></li>
                                    </ul>
                                </div>
                                <figure>
                                    <img class="img-rounded img-responsive" src="http://www.webdesignforums.net/img/wdf_avatar.jpg">
                                </figure>
                                <dl class="dl-horizontal">
                                    <dt>joined date:</dt>
                                    <dd>15 September 2014</dd>
                                    <dt>Posts:</dt>
                                    <dd>785</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-4">
                          <?php if($_SESSION['role'] != "user" || $_SESSION['id'] == $post->getIdUser()) : ?>
                            <i class="fa fa-edit "></i><a href="#"> Edit Post </a>
                          <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card bg-default">
        <h5 class="card-header">
          Poster un commentaire
        </h5>
        <div class="card-body">
          <form method="POST">
            <textarea name="commentaire" rows="2" class="form-control"></textarea>
            <br>
            <button type="submit" class="btn btn-outline-primary" value="Envoyer">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

<div class="container-fluid">
  <?php foreach ($commentaires as $commentaire) : ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card bg-default">
          <h6 class="card-header">
            <time class="float-right">
              <i class="fa fa-calendar"></i> <?= $commentaire->date ?>
            </time>
            <?= $users[$commentaire->id_user]['prenom']." ".$users[$commentaire->id_user]['nom'] ?>
          </h6>
          <div class="card-body">
            <?= $commentaire->contenu ?>
          </div>
        </div>
      </div>
    </div>
    <br>
  <?php endforeach ?>
  
</div>


