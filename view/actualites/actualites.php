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
<<<<<<< HEAD:view/actualites/actualites.php
						<a href="update?id=<?=$key;?>">Editer</a>
					</div>
					<div class="col">
						<a href="delete?id=<?=$key;?>">Supprimer</a>
=======
						<a href="update_actualites?id=<?=$key;?>"><input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Editer"/></a>
					</div>
					<div class="col">
						<a href="delete_actualites?id=<?=$key;?>"><input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Supprimer"/></a>
>>>>>>> 510916fcbf3b95e617b20abfee9e39d702bc76f2:view/actualites.php
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="card">
<<<<<<< HEAD:view/actualites/actualites.php
			<a href="create">Créer actualite</a>
=======
			<a href="create_actualites.php"><input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Créer actualité"/></a>
>>>>>>> 510916fcbf3b95e617b20abfee9e39d702bc76f2:view/actualites.php
		</div>
</div>