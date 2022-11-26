<?php
    require_once __DIR__.'/../../vendor/autoload.php';
?>
    <div class="row panel__card--photos panel__card--titre text-center">
        <div class="col">Liste des Photos</div>
    </div>
        <div class="row panel__card--photos panel__card--photos--titre text-center justify-content-center">
            <div class="col-10 justify-content-center">
                <div class=" row  barre panel__card--photos text-center">
                    <div class="col-2">Photo</div>
                    <div class="col-2">Titre</div>
                    <div class="col-3">description</div>
                    <div class="col-2">galerie</div>
                    <div class="col-3">Action</div>
                </div>
                    <?php
                        $photos = Src\Database\PhotoDataBase::read();
                        foreach ($photos as $photo){
                                $galeries = Src\Database\GalerieDataBase::read();
                                $selected = 'selected';
                                $gal = '';
                                $addPhoto = '';
                                foreach ($galeries as $galerie){
                                    $addPhoto .= '<option>'.$galerie->nom.'</option>';
                                    if ($photo->galerie == $galerie->id){
                                        $selected = '';
                                        $gal .= '<option selected="selected">'.$galerie->nom.'</option>';
                                    }
                                    else {
                                        $gal .= '<option>'.$galerie->nom.'</option>';
                                    }
                                }
                            echo '
                                <div class="row  barre d-flex my-1">
                                    <form method="post" class="d-flex align-items-center" enctype="multipart/form-data" id="admin__form--photo'.$photo->id.'">
                                        <input type="hidden" name="photoId" value="'.$photo->id.'">
                                        <input type="hidden" name="photoName" value="'.$photo->image.'">
                                        <div class="col-2">
                                            <img src="/upload/'.$photo->image.'" style="height:50px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" name="titre" id="formulaire_titre" value="'.$photo->titre.'">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="description" id="formulaire_description" value="'.$photo->description.'">
                                        </div>
                                        <div class="col-2">
                                            <select name="galerie">
                                            '.$gal.'
                                            <option '.$selected.'></option>
                                            </select>
                                        </div>
                                        <div class="col-3"> 
                                            <button type="submit" name="modifPhoto" class="btn btn-warning">Modifier</button>
                                            <button type="button" class="btn btn-danger supprCompte" data-bs-toggle="modal" data-bs-target="#adminPhotosSuppr'.$photo->id.'">Supprimer</button>
                                        </div>

                                        <!-- Modal SUPPR-->
                                        <div class="modal fade" id="adminPhotosSuppr'.$photo->id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Confirmation de suppression</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Êtes vous sûr de vouloir supprimer cette photo ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                                        <button type="submit" name="supprPhoto" class="btn btn-danger">Supprimer la photo</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            ';
                        }
                    ?>
       
            </div>
            <div class="row justify-content-center my-3">
            <div class="col-2 mt-3 justify-content-center">
            <form method="POST" enctype='multipart/form-data'>
                <button type="button" class="btn btn-lg btn-info addPhoto" data-bs-toggle="modal" data-bs-target="#adminPhotosAdd">Ajouter une photo</button>
                <!-- Modal add -->
                <div class="modal fade" id="adminPhotosAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ajouter une photo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="titre" id="formulaire_titre" placeholder="Titre">
                                <input type="text" name="description" id="formulaire_description" placeholder="Description">
                                <select name="galerie">
                                    <option selected="selected"></option>
                                    <?=$addPhoto?>
                                </select>
                                <input type="file" name="photo" id="formulaire_photo" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" name="createPhoto" class="btn btn-info">Ajouter la photo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>   
    </div>
        </div>