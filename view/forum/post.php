<link rel="stylesheet" type="text/css" href="<?= Router::components('css/post.css') ?>">
<div class="container-fluid">
  <div class="row">

    <div class="col-md-12 well">
      <time class="float-right">
        <i class="fa fa-calendar"></i> <?= $post->getDateCreation() ?>
      </time>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9">
    </div>
    <div class="col-md-3">
    </div>
  </div>
</div>


<div class="container">
  <section class="row clearfix">
    <section class="col-md-12 column">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="card card-default">
                    <div class="card-heading">
                        <section class="card-title well">
                            <time class="float-right">
                                <i class="fa fa-calendar"></i> 2014-09-15 , <i class="fa fa-clock-o"></i> 1:35 pm
                            </time>
                            <section class="float-left" id="id">
                                <abbr title="count of posts in this topic">#1</abbr>
                            </section>
                        </section>
                    </div>
                    <section class="row card-body">
                        <section class="col-md-9">
                            <h2> <i class="fa fa-smile-o"></i> <?= $post->getTitre() ?></h2>
                            <hr> <?= $post->getContenu() ?>
                        </section>

                        <section id="user-description" class="col-md-3 ">
                            <section class="well">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cricle"></i><?= $user->getPrenom()." ".strtoupper($user->getNom()) ?></a>
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
                            </section>
                        </section>

                    </section>
                    <div class="card-footer">
                        <div class="row">
                            <section class="col-md-4">
                                <span class="fa-stack">
                          <i class="fa fa-quote-right fa-stack-1x"></i>
                          <i class="fa fa-comment-o fa-lg fa-stack-1x"></i>
                          </span><a href="#"> Reply With Quote </a> |
                                <i class="fa fa-mail-reply "></i><a href="#"> Reply </a>|
                                <i class="fa fa-edit "></i><a href="#"> Edit Post </a>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>
</div>


