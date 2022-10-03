

<div class="row connexionForm d-flex justify-content-center my-3">
    <div class=" col-5 connexionForm__card1">
    </div>
    <div class="col-5 connexionForm__card2 px-3">
        <form method="post">
            <div class="row connexionForm__card2--titre">
                <div class="col-12"><div>Formulaire de connexion</div></div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                    <div><label for="email">EMAIL</label></div>
                    <div><input type="email" name="email" id="formulaire_email" placeholder="Entrez votre E-mail" required></div>  
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                    <div><label for="password"> VOTRE MOT DE PASSE</label></div>
                    <div><input type="password" name="password" id="formulaire_password" placeholder="Entrez votre mot de passe" required></div>  
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                    <button class="btn btn-success">Se connecter</button>
                </div>
                <div class="col-8">
                    <div><?=$alerte?></div>
                </div>
            </div>
        </form>
        <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                    <a href="/inscription" class="text-dark"><i class="fa fa-user"></i> Creer un compte</a>
                </div>
            </div>
    </div>
</div>

    
