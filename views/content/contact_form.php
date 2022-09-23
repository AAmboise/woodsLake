<?php 
    require_once './models/models.php';
    require_once './controllers/contactController.php';
 

?>
<form method="post">
    <div class="row">
        <h1 class='text-center'>formulaire de contact</h1>
    </div>

    <div class="row">
        <div class="col-6 text-end">
            <label>Votre nom :</label>
        </div>
        <div class="col-6">
            <input type="text" name="nom" id="formulaire_nom" required>
        </div>
    </div>

    <div class="row">
        <div class="col-6 text-end">
            <label for="prenom"> Votre Prénom :</label>
        </div>
        <div class="col-6">
        <input type="text" name="prenom" id="formulaire_prenom"required>

        </div>
    </div>

    <div class="row">
        <div class="col-6 text-end">
            <label for="prenom"> Votre E-mail :</label>
        </div>
        <div class="col-6">
        <input type="email" name="email" id="formulaire_email"required>
        </div>
    </div>

    <div class="row">
        <div class="col-6 text-end">
            <label for="prenom"> Votre message :</label>
        </div>
        <div class="col-6">
            <textarea name="message" id="formulaire_message" cols="30" rows="10" required></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <button class="btn btn-success">Nous contacter</button>
        </div>
    </div>
</form>
    
