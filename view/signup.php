<?php include "./view/header.php" ?> 
  <body>
    <div class="container">
      <h1 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Créer un compte</h1>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 offset-2">
              <form method="post">
                <div class="form-group" style="margin-bottom: 20px">
                  <label for="nom">Nom : </label>
                  <input class="form-control" type="text" name="nom" value="">
                </div>

                <div class="form-group" style="margin-bottom: 20px">
                  <label for="nom">Prénom : </label>
                  <input class="form-control" type="text" name="prenom" value="">
                </div>

                <div class="form-group" style="margin-bottom: 20px">
                  <label for="email">Date de naissance :</label>
                  <input id="email" class="form-control" type="text" name="mail" value="">
                </div>

                <div class="form-group" style="margin-bottom: 20px">
                  <label for="email">Email :</label>
                  <input id="email" class="form-control" type="text" name="mail" value="">
                </div>

                <div class="form-group" style="margin-bottom: 40px">
                  <label for="sujet">Mot de passe :</label>
                  <input class="form-control" type="text" name="taux" value="">
                </div>

                <input type="submit" class="btn btn-outline-info btn-block btnsubmit" value="Envoyer"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
