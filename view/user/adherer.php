<link href="<?= Router::components('css/adherer.css') ?>" rel="stylesheet">

<!-- Contact Section -->
<?php $title = "Adhérer" ?>
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Adhérer</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
 
            <p><strong>Comment adhérer ? Tout d'abord, choisir un mode de paiement !</strong></p>
            <fieldset>
              <legend>Mode de paiement</legend>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <ul>
                      <li><a a href="#CB">CB</a></li>
                      <li><a a href="#Paypal">Paypal</a></li>
                      <li><a a href="#Cheque">Chèque</a></li>
                    <ul>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
            </fieldset>
            
          <div id="CB" class="hidden">
            <fieldset>
              <ol>
                <li>
                  <fieldset>
                    <legend>Type de carte bancaire</legend>
                    <ol>
                      <li>
                        <input id="visa" name="type_de_carte" type="radio">
                        <label for="visa">VISA</label>
                      </li>
                      <li>
                        <input id="mastercard" name="type_de_carte" type="radio">
                        <label for="mastercard">Mastercard</label>
                      </li>
                    </ol>
                  </fieldset>
                </li>
                <li>
                  <label for="numero_de_carte">Numéro de carte</label><br>
                  <input id="numero_de_carte" name="numero_de_carte" type="text" placeholder="1111-2222-3333-4444" required/>
                </li>
                <li>
                  <label for="securite">Code sécurité</label><br>
                  <input id="securite" name="securite" type="text" placeholder="999" required/>
                </li>
                <li>
                  <label for="nom_porteur">Nom du porteur</label><br>
                  <input id="nom_porteur" name="nom_porteur" type="text" placeholder="Même nom que sur la carte" required/>
                </li>
              </ol>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" value="Adhérer"/>
              </div>
            </fieldset>
          </div>

          <div id="Paypal" class="hidden">
            <p>Prout</p>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" value="Adhérer"/>
              </div>
          </div>

          <div id ="Cheque" class="hidden">
            <p>La première étape de l'adhésion commence par le paiement de l'adhérent. Il vous suffit d'envoyer ou de venir déposer un cheque d'un montant de  € a l'adresse suivant. blabla</p>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" value="Adhérer"/>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>


