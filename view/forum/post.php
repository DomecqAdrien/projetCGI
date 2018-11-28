<link rel="stylesheet" type="text/css" href="<?= Router::components('css/post.css') ?>">
<div class="container">
  <section class="row clearfix">
    <section class="col-md-12 column">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <section class="panel-title">
                            <time class="pull-right">
                                <i class="fa fa-calendar"></i> 2014-09-15 , <i class="fa fa-clock-o"></i> 1:35 pm
                            </time>
                            <section class="pull-left" id="id">
                                <abbr title="count of posts in this topic">#1</abbr>
                            </section>
                        </section>
                    </div>
                    <section class="row panel-body">
                        <section class="col-md-9">
                            <h2> <i class="fa fa-smile-o"></i> <?= $post->getTitre() ?></h2>
                            <hr> <?= $post->getContenu() ?>
                        </section>

                        <section id="user-description" class="col-md-3 ">
                            <section class="well">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cricle"></i>MOHAMMAD SHARIFI<span class="caret"></span></a>
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
                                    <img class="img-rounded img-responsive" src="http://www.webdesignforums.net/img/wdf_avatar.jpg" alt="Mohammad Sharifi's avatar">
                                    <figcaption class="text-center">مدیر کل سایت
                                        <br><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i> </figcaption>
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
                    <div class="panel-footer">
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
