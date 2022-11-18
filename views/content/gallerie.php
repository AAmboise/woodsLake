<?php
require_once __DIR__.'/../../vendor/autoload.php';
$class = 'col-lg-3 col-sm-5 col-7 d-flex justify-content-center gallerie__card m-2'
?>

<div class="row text-center gallerie__mainTitre">
    <div class="col-12">
        <div>gallerie</div>
    </div>
</div>

<?php
$galleries = Src\Database\GallerieDataBase::read();
  foreach ($galleries as $gallerie){
    if ($gallerie->nom != 'Caroussel (3 max)' && $gallerie->nom != 'Slider'){
      echo '<div class="row text-center gallerie__titre align-items-center bg-light bg-gradient my-3">
              <div class="col-12">
                <div>'.$gallerie->nom.'</div>
              </div>
            </div>';  
      }
    echo '<div class="row gallerie justify-content-evenly">';
    $photos = Src\Database\PhotoDataBase::read();
    foreach ($photos as $photo){
      if ($photo->gallerie != 'Caroussel (3 max)' && $photo->gallerie != 'Slider'){
        if ($photo->gallerie == $gallerie->nom){
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