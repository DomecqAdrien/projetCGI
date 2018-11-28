<link rel="stylesheet" type="text/css" href="<?= Router::components('css/post.css') ?>">
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12 well">
            <time class="float-right">

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
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="fa-stack">
                          <i class="fa fa-quote-right fa-stack-1x"></i>
                          <i class="fa fa-comment-o fa-lg fa-stack-1x"></i>
                          </span><a href="#"> Reply With Quote </a> |
                            <i class="fa fa-mail-reply "></i><a href="#"> Reply </a>|
                            <i class="fa fa-edit "></i><a href="#"> Edit Post </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-8">
        <div class="media g-mb-30 media-comment">
            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
              <div class="g-mb-15">
                <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
              </div>
        
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
        
              <ul class="list-inline d-sm-flex my-0">
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                    178
                  </a>
                </li>
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                    34
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                    Reply
                  </a>
                </li>
              </ul>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="media g-mb-30 media-comment">
            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Image Description">
            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
              <div class="g-mb-15">
                <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
              </div>
        
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
        
              <ul class="list-inline d-sm-flex my-0">
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                    178
                  </a>
                </li>
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                    34
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                    Reply
                  </a>
                </li>
              </ul>
            </div>
        </div>
    </div>
</div>