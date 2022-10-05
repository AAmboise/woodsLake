<div id="contact" class="row contact justify-content-center text-start my-3">
    <div class="col-8">
        <div class="contact__titre">
            <div class="bande"></div>
        </div>
        <div class="wrap">
        <?php
        if (!empty($_SESSION)) {
                  echo '<a href="/compte"><button class="btn btn-lg btn-success">Mon compte</button></a>';
                }
                else{
                  echo '<a href="/connexion"><button class="btn btn-lg btn-success">Se connecter</button></a>';
                }
            ?>
            <a href="/contact"><button class="btn btn-lg btn-success">Nous contacter</button></a>
        </div>

    </div>
</div>