<div class="container">
  <h1 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Créer un post</h1>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <form method="post">
            <div class="form-group" style="margin-bottom: 20px">
              <label for="nom">Titre : </label>
              <input class="form-control" type="text" name="titre">
            </div>

            <div class="form-group" style="margin-bottom: 20px">
              <label for="nom">Contenu : </label>
              <textarea class="form-control" rows="8" name="contenu"></textarea>
            </div>
            <?php debug($_SESSION); ?>
            <?php if($_SESSION['role'] != "user") : ?>
              <div class="form-group" style="margin-bottom: 20px">
                <label for="important">Important : </label>
                  <select class="form-control" name="important">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                  </select>
              </div>
            <?php endif ?>

            <input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Envoyer"/>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>