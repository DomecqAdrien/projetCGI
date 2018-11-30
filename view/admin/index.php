<?php $title = "panneau admin" ?>
<br>
<div class="container">
	<h1 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Liste des utilisateurs</h1>
		<table class="table">
			<thead>
				<tr>
					<?php foreach ($users[0] as $k => $v) :?>
						<th scope="col"><?= $k ?></th>
	           		<?php endforeach ?>
					<th scope="col">Modification</th>
					<th scope="col">Suppression</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user) : ?>
					<tr>
						<td><?= $user->id ?></td>
						<td><?= $user->nom ?></td>
						<td><?= $user->prenom ?></td>
						<td><?= $user->mail ?></td>
						<td><?= $user->dateNaissance ?></td>
						<td><a href="update/<?= $user->id ?>">Modifier</a></td>
						<td>
							<a 
							href="delete/<?= $user->id ?>" onClick="return confirm('êtes vous sûr de vouloir supprimer l\'employé n°<?= $user->id ?>?')">Supprimer</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
</div>
<br>