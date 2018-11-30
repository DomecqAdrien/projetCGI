<br>
<?php $title = "Forum" ?>
<link rel="stylesheet" type="text/css" href="<?= Router::components('css/forum.css') ?>">
<h1 class="text-center">Forum</h1>	
<div class="container">
	<?php if($_SESSION && $_SESSION['role'] != 'user') : ?>
		<a href="<?= Router::url('forum/new') ?>">Créer un post</a>
	<?php endif ?>

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
<br>