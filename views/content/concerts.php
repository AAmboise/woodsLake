<?php
$classCard = '"concert__card d-flex justify-content-between mb-2 px-3 align-items-center bg-dark bg-gradient" style="--bs-bg-opacity: .6;"';
?>

<div class="row concerts justify-content-center text-start my-3">
    <div class="col-lg-8 col-12">
        <div class="concert__titre">
            <div id="concert">Prochain concerts</div>
            <div class="bande"></div>
        </div>
  
        <?php
            $concerts = ConcertDataBase::read();
            foreach ($concerts as $concert){
                // $extrait = new Extrait(null,$extrait['titre'],$extrait['URLFichier']);
                $date = date_create($concert['date']); // on formate la date en Français et dans le bon ordre
                echo '<div>'.ConcertDataBase::moisFr(date_format($date, "d M Y")).'</div> 
                <div class='.$classCard.'>
                    <div class="concert__img">
                        <img src="./upload/'.$concert['URLImage'].'" alt="">
                    </div>
                    <div class="concert__card--text">
                        <div>
                            <i class="fa fa-map"></i> Woods Lake à "'.$concert['lieu'].'"
                        </div>
                        <div>
                            <i class="fa fa-clock"></i> '.$concert['heure'].'
                        </div>
                    </div>
                    <div class="concert__card--btn">
                        <button class="btn btn-info btn-lg">Reserver</button>
                    </div>
                </div>';
            }

        ?>

    </div>
</div>