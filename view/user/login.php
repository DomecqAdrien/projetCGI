<?php $title = "Se connecter" ?>
<br>
<div class="container">
   <h1 style="text-align: center; margin-bottom: 25px; margin-top: 10px;">Se connecter</h1>
   <div class="row">
      <div class="col-md-6 mx-auto">
         <form method="post">
            <div class="form-group" style="margin-bottom: 20px">
               <label for="mail">Adresse mail : </label>
               <input class="form-control" type="text" name="mail" value="">
            </div>
            <div class="form-group" style="margin-bottom: 20px">
               <label for="password">Mot de passe : </label>
               <input class="form-control" type="password" name="password" value="">
            </div>
            <input class="alert alert-success alert-link" type="submit" value="Valider">
            <div class="float-right">
               <button class="alert alert-info"><a class="alert-link" href="<?= Router::url('user/signup') ?>">S'inscrire ?</a></button>
            </div>
         </form> 

      </div>
   </div>
</div>
<br>