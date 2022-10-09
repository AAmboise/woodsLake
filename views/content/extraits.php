<?php
$classCard = '"extrait__card d-flex justify-content-between my-2 align-items-center bg-info bg-gradient rounded-1" style="--bs-bg-opacity: .3;"';
?>
<div class="row extrait justify-content-center text-start my-3">
    <div class="col-lg-8 col-12">
        <div class="extrait__titre">
            <div id="extrait">Extraits Audio</div>
            <div class="bande"></div>
        </div>

<?php
    $extraits = ExtraitDataBase::read();
    foreach ($extraits as $extrait){
        // $extrait = new Extrait(null,$extrait['titre'],$extrait['URLFichier']);
        echo '<div class='.$classCard.'>
            <div>Woods Lake : '.$extrait['titre'].'</div>
            <audio controls src="../../upload/'.$extrait['URLFichier'].'"></audio>
        </div>';
    }
?>


    </div>
</div>