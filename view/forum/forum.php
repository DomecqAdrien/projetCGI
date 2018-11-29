<?php $title = "Forum" ?>
<?php if(/*$_SESSION['adherant'] == 1 || */$_SESSION['role'] != "user") : ?>
<link rel="stylesheet" type="text/css" href="<?= Router::components('css/forum.css') ?>">
<h1 class="text-center">Forum</h1>	
<div class="container">
	<a href="<?= Router::url('forum/new') ?>">Créer un post</a>

	<div class="container">
		<h3>Posts Importants</h3>
		<?php foreach ($posts as $post) : ?>
			<?php if($post->important == 1) : ?>
				<?php include "forumContent.php" ?>
			<?php endif ?>
		<?php endforeach ?>
	</div>
	<div class="container">
		<h4>Autres posts</h4>
		<?php foreach ($posts as $post) : ?>
			<?php if($post->important == 0) : ?>
				<?php include "forumContent.php" ?>
			<?php endif ?>
		<?php endforeach ?>
	</div>		
</div>
<?php else : ?>
<h1 class="text-center">Veuillez adhérer pour accéder au <?= $title ?></h1>
<?php endif ?>