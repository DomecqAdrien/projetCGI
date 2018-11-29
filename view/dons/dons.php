<!-- Contact Section -->
<?php $title = "Faire un don" ?>
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Faire un don</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" method="POST">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Adresse Email</label>
                  <input class="form-control" name="email" type="email" placeholder="Adresse email" required="required" data-validation-required-message="Please enter your email address." >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Civilite</label>
                  <input type="radio" data-validation-required-message="Please enter your civilite" name="civilite" value="Mr">  Monsieur  
                  <input type="radio" data-validation-required-message="Please enter your civilite" name="civilite" value="Mme">  Madame
                  <input type="radio" data-validation-required-message="Please enter your civilite" name="civilite" value="Mlle">  Mademoiselle
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nom</label>
                  <input class="form-control" name="nom" type="text" placeholder="Nom" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Prenom</label>
                  <input class="form-control" name="prenom" type="text" placeholder="Prenom" required="required" data-validation-required-message="Please enter your name." >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Adresse</label>
                  <input class="form-control" name="adresse" type="text" placeholder="Adresse" required="required" data-validation-required-message="Please enter your adress." >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Ville</label>
                  <input class="form-control" name="ville" type="text" placeholder="Ville" required="required" data-validation-required-message="Please enter your city." >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Code Postal</label>
                  <input class="form-control" name="codePostal" type="text" placeholder="Code Postal" required="required" data-validation-required-message="Please enter your CP." >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Montant</label>
                  <input class="form-control" name="montant" type="number" placeholder="Montant" required="required" data-validation-required-message="Please enter your money.">
                  <p class="help-block text-danger" ></p>
                </div>
              </div>
            <br> 
           <fieldset>
              <legend>Informations CB</legend>
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
                  <label for="numero_de_carte">Numéro de carte</label>
                  <input id="numero_de_carte" name="numero_de_carte" type="text" placeholder="1111-2222-3333-4444" required/>
                </li>
                <li>
                  <label for="securite">Code sécurité</label>
                  <input id="securite" name="securite" type="text" placeholder="999" required/>
                </li>
                <li>
                  <label for="nom_porteur">Nom du porteur</label>
                  <input id="nom_porteur" name="nom_porteur" type="text" placeholder="Même nom que sur la carte" required/>
                </li>
              </ol>
            </fieldset>

              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" value="Faire un don"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>