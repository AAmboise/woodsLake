<div class="row slick justify-content-center text-start my-3">
    <div class="col-8">
        <div class="slick__titre">
            <div id="slick">Gallerie photo</div>
            <div class="bande"></div>
        </div>

  <div class="slider slider-nav">
  <?php
      $photos = Src\Database\PhotoDataBase::read();
      foreach ($photos as $photo){
        if ($photo->gallerie == 'Slider'){
          echo '
          <div><img src="../../upload/'.$photo->image.'" alt="'.$photo->description.'"></div>
          ';
        }
      }

    ?>
  </div>

    </div>
</div>