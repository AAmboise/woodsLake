

<div class="row  contactForm d-flex justify-content-center my-3">
    <div class="col-5 contactForm__card1">
    </div>
    <div class=" col-lg-5 col-8 contactForm__card2">
        <form method="post">
            <div class="row contactForm__card2--titre">
                <div class="col-12"><div>Formulaire de contact</div></div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6 col-12">
                    <div><label for="nom">NOM</label></div>
                    <div><input type="text" name="nom" id="formulaire_nom" placeholder="Entrez votre prénom" required></div>
                </div>
                <div class="col-md-6 col-12">
                    <div><label for="prenom">PRENOM</label></div>
                    <div><input type="text" name="prenom" id="formulaire_prenom" placeholder="Entrez votre nom" required></div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6 col-12">
                    <div><label for="email">EMAIL</label></div>
                    <div><input type="email" name="email" id="formulaire_email" placeholder="Entrez votre E-mail" required></div>  
                </div>
                <div class="col-md-6 col-12">
                    <div><label for="telephone">TELEPHONE</label></div>
                    <div><input type="text" name="telephone" id="formulaire_telephone" placeholder="Entrez votre téléphone" required ></div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <div><label for="message"> VOTRE MESSAGE</label></div>
                    <div><textarea name="message" id="formulaire_message" cols="30" rows="8" placeholder="Entrez votre message" required></textarea></div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-4">
                    <button class="btn  btn-lg btn-success">Envoyer</button>
                </div>
                <div class="col-8">
                    <div><?=$alerte?></div>
                </div>
            </div>
        </form>
    </div>
</div>

    
