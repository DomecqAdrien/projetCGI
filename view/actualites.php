<link rel="stylesheet" href="./components/css/actualites.css">	
<div class="container">
	<?php foreach($a_actualites as $key => $actualite){?>
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
					<div class="col">
						<a href="update_actualites?id=<?=$key;?>">Editer</a>
					</div>
					<div class="col">
						<a href="delete_actualites?id=<?=$key;?>">Supprimer</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="card">
			<a href="create_actualites.php">Créer actualite</a>
		</div>
</div>