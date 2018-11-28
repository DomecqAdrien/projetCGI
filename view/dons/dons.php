<!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Faire un don</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Civilite</label>
                  <input class="form-control" id="civilite" type="radio" required="required" data-validation-required-message="Please enter your civilite"> Monsieur
                  <input class="form-control" id="civilite" type="radio" required="required" data-validation-required-message="Please enter your civilite"> Madame
                  <input class="form-control" id="civilite" type="radio" required="required" data-validation-required-message="Please enter your civilite"> Mademoiselle
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nom</label>
                  <input class="form-control" id="nom" type="text" placeholder="Nom" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Prenom</label>
                  <input class="form-control" id="prenom" type="text" placeholder="Prenom" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Adresse</label>
                  <input class="form-control" id="adresse" type="text" placeholder="Adresse" required="required" data-validation-required-message="Please enter your adress.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Ville</label>
                  <input class="form-control" id="ville" type="text" placeholder="Ville" required="required" data-validation-required-message="Please enter your city.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Code Postal</label>
                  <input class="form-control" id="codePostal" type="text" placeholder="codePostal" required="required" data-validation-required-message="Please enter your CP.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>