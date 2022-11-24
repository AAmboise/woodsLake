

<div class="row panel__nav d-flex justify-content-center mt-3">
    <div class="col-3 panel__nav--users bg-light">
        <div>Utilisateurs</div>
    </div>    
    <div class="col-3 panel__nav--concerts border">
        <div>Concerts</div>
    </div>    
    <div class="col-3 panel__nav--extraits border">
        <div>Extraits</div>
    </div>    
    <div class="col-3 panel__nav--photos border">
        <div>Photos</div>
    </div>
</div>
<div class="row panel__card d-flex justify-content-center mb-3">
    <div class="col-12 border bg-light">
    <?php

        // UTILISATEURS 
        require_once 'adminUsers.php';
            
        // CONCERTS 
        require_once 'adminConcerts.php';

        // EXTRAITS 
        require_once 'adminExtraits.php';

        // PHOTOS
        require_once 'adminGaleries.php';
        require_once 'adminPhotos.php';
    ?>
    </div>
</div>

    
