<link rel="stylesheet" href="<?=Router::components('css/actualites.css');?>">
<?php $title = "Actualites" ?>
<br>	
<div class="container">
	<?php foreach($a_actualites as $key => $actualite) : ?>
		<div class="card">
			<div class="bloc">
				<div class="row">
					<div class="col">
						<h2><?= $actualite['titre']; ?></h2>
					</div>
					<div class="col">
						<h3><?= $actualite['date']; ?></h3>
					</div>
				</div>
				<div class="row">
					<p><?= $actualite['description'] ?></p>
				</div>
				<div class="row">
					<div class="col-5"></div>
					<div class="col">
						<a href="<?= Router::url("actualites/update?id={$key}") ?>"><input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Editer"/></a>
					</div>
					<div class="col">
						<a href="<?= Router::url("actualites/delete?id={$key}")?>"><input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Supprimer"/></a>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ?>
		<div class="card">
			<a href="<?= Router::url('actualites/create') ?>"><input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Créer actualité"/></a>
		</div>
</div>
<br>
</section>