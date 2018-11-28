<?php $title = "Modifier Actualité" ?>
<div class="container">
  <h1 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Update une actualite</h1>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <form method="post">
            <input type="hidden" name="id" value="<?=$actualite->getId();?>">
            <div class="form-group" style="margin-bottom: 20px">
              <label for="nom">Titre : </label>
              <input class="form-control" type="text" name="titre" value="<?=$actualite->getTitre()?>">
            </div>
            <div class="form-group" style="margin-bottom: 20px">
              <label for="nom">Description : </label>
              <textarea class="form-control" rows="8" name="description"><?=$actualite->getDescription()?></textarea>
            </div>
            <input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Envoyer"/>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>