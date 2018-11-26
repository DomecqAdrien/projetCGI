<div class="container">
	<?php foreach($a_actualites as $key => $actualite){?>
	<div class="card">
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
			<div class="col"></div>
			<div class="col">
				<a href="update_actualites?id=<?=$key;?>">Editer</a>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="row">
		<a href=""></a>
	</div>
</div>