<?php
require_once __DIR__.'/../../vendor/autoload.php';
$class = 'col-lg-3 col-sm-5 col-7 d-flex justify-content-center galerie__card m-2'
?>

<div class="row text-center galerie__mainTitre">
    <div class="col-12">
        <div>galerie</div>
    </div>
</div>

<?php
$galeries = Src\Database\GalerieDataBase::read();
  foreach ($galeries as $galerie){
    if ($galerie->nom != 'Caroussel (3 max)' && $galerie->nom != 'Slider'){
      echo '<div class="row text-center galerie__titre align-items-center bg-light bg-gradient my-3">
              <div class="col-12">
                <div>'.$galerie->nom.'</div>
              </div>
            </div>';  
      }
    echo '<div class="row galerie justify-content-evenly">';
    $photos = Src\Database\PhotoDataBase::read();
    foreach ($photos as $photo){
      if ($photo->galerie != 'Caroussel (3 max)' && $photo->galerie != 'Slider'){
        if ($photo->galerie == $galerie->nom){
          echo '<div class="'.$class.'">
          <a href="/upload/'.$photo->image.'" data-lightbox="image-1">
          <img src="/upload/'.$photo->image.'" alt="'.$photo->description.'" title="'.$photo->titre.'"></a>
          </div>';
        }
      }
    }
    echo '</div>';
  }
?>