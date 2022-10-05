
<div class="row infoCompteForm d-flex justify-content-center my-3">
    <div class=" col-5 infoCompteForm__card1">
    </div>
    <div class="col-5 infoCompteForm__card2">
        <form method="post">
            <div class="row infoCompteForm__card2--titre">
                <div class="col-12"><div>Mes informations personelles</div></div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                <div class="d-flex justify-content-center"><div class="fw-bold me-2">Mon nom : </div><div><?=$_SESSION['nom']?></div></div>
                    <div><input type="text" name="nom" id="formulaire_nom" class="modifInfo text-center" placeholder="Modifiez votre nom"></div>
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                <div class="d-flex justify-content-center"><div class="fw-bold me-2">Mon prénom : </div><div><?=$_SESSION['prenom']?></div></div>
                    <div><input type="text" name="prenom" id="formulaire_prenom" class="modifInfo text-center" placeholder="Modifiez votre prénom"></div>
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                    <div class="d-flex justify-content-center"><div class="fw-bold me-2">Mon email : </div><div><?=$_SESSION['email']?></div></div>
                    <div><input type="email" name="email" id="formulaire_email" class="modifInfo text-center" placeholder="Modifiez votre E-mail"></div>  
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                <div class="d-flex justify-content-center"><div class="fw-bold me-2">Mon téléphone : </div><div><?=$_SESSION['telephone']?></div></div>
                    <div><input type="text" name="telephone" id="formulaire_telephone" class="modifInfo text-center" placeholder="Modifiez votre téléphone"></div>
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-6">
                    <div><label for="password" class="modifInfo">Modifiez votre mot de passe</label></div>
                    <div><input type="password" name="password" id="formulaire_password" class="modifInfo text-center" placeholder="Modifiez votre mot de passe"></div>
                </div>
                <div class="col-6 text-center">
                    <div><label for="password" class="modifInfo">Validez le mot de passe</label></div>
                    <div><input type="password" name="password2" id="formulaire_password2" class="modifInfo text-center" placeholder="Valider votre mot de passe"></div>
                </div>
            </div>

            <div class="row mt-2 my-3">
                <div class="col-12 text-center">
                    <button class="btn btn-lg btn-success modifInfo__btn">Modifier</button>
                </div>
            </div>
        </form>
            <div class="row mt-2 my-3">
                <div class="col-12 text-center d-flex justify-content-evenly">
                    <button class="btn btn-lg btn-success modifCompte">Modifier mes informations</button>
                    <button class="btn btn-lg btn-danger supprCompte">Supprimer mon compte</button>
                </div>
            </div>
        
    </div>
</div>

    