<h1 class="text-center">Forum</h1>	
<div class="container">
	<a href="new">Créer un post</a>

	<div class="container">
		<h3>Posts Importants</h3>
		<?php foreach ($posts as $post) : ?>
			<div class="card">
				<section class="row panel-body">
		            <section class="col-md-6">
		              <h4> <a href="#"><i class="glyphicon glyphicon-th-list"> </i> <?= $post->titre ?></a></h4> <hr>
		              <h6>In This section You lean Web design ! </h6>
		              
		            </section>
		            <section class="col-md-2">
		              <ul id="post-topic">
		                <li class="list-unstyled"> Topics:62 </li>
		                <li class="list-unstyled"> Posts:445 </li>
		              </ul>
		            </section>
		            <section class="col-md-3">
		              <h4> <a href="#"><i class="glyphicon glyphicon-link"> </i> Last Post Goes from here! </a></h4> <hr>
		              <a href="#"><i class="glyphicon glyphicon-user"></i> <?= $post->id_user ?> </a><br>
		              <a href="#"><i class="glyphicon glyphicon-calendar"></i> <?= $post->dateCreation ?>  </a>
		            </section>
		        </section>
			</div>
			
		<?php endforeach ?>
	</div>
	<div class="container">
		
	</div>		
</div>