

<div class="row  contactForm d-flex justify-content-center my-3">
    <div class=" col-5 contactForm__card1">
    </div>
    <div class="col-5 contactForm__card2 px-3">
        <form method="post">
            <div class="row contactForm__card2--titre">
                <div class="col-12"><div>Formulaire d'inscription</div></div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-6 ">
                    <div><label for="nom">NOM</label></div>
                    <div><input type="text" name="nom" id="formulaire_nom" placeholder="Entrez votre prénom" required></div>
                </div>
                <div class="col-6">
                    <div><label for="prenom">PRENOM</label></div>
                    <div><input type="text" name="prenom" id="formulaire_prenom" placeholder="Entrez votre nom" required></div>
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-6">
                    <div><label for="email">EMAIL</label></div>
                    <div><input type="email" name="email" id="formulaire_email" placeholder="Entrez votre E-mail" required></div>  
                </div>
                <div class="col-6">
                    <div><label for="telephone">TELEPHONE</label></div>
                    <div><input type="text" name="telephone" id="formulaire_telephone" placeholder="Entrez votre téléphone" required ></div>
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-6">
                    <div><label for="password">MOT DE PASSE</label></div>
                    <div><input type="password" name="password" id="formulaire_password" placeholder="Entrez votre mot de passe" required ></div>
                </div>
                <div class="col-6">
                    <div><label for="password">VALIDATION MOT DE PASSE</label></div>
                    <div><input type="password2" name="password2" id="formulaire_password2" placeholder="Valider votre mot de passe" required ></div>
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                    <button class="btn btn-success">S'inscrire</button>
                </div>
                <div class="col-12">
                    <div><?=$alerte?></div>
                </div>
            </div>
        </form>
    </div>
</div>

    
