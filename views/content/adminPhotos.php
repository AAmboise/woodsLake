
<div class="row panel__card--photos panel__card--titre text-center">
                <div class="col">Liste des Photos</div>
        </div>
        <div class="row panel__card--photos panel__card--photos--titre text-center">
        <div class="col-12 d-flex justify-content-center">
                <table class="panel__card--photos">
                    <thead>
                        <tr >
                            <td>Photo</td>
                            <td>Titre</td>
                            <td>description</td>
                            <td>gallerie</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $photos = PhotoDataBase::read();
                            foreach ($photos as $photo){
                                    $galleries = GallerieDataBase::read();
                                    $gal = '';
                                    foreach ($galleries as $gallerie){
                                                    if ($photo->gallerie == $gallerie->nom){
                                                        $gal .= '<option selected="selected">'.$gallerie->nom.'</option>';
                                                    }
                                                    else {
                                                        $gal .= '<option>'.$gallerie->nom.'</option>';
                                                    }
                                                }
                            
                                echo '
                                <tr>
                                    <form method="post" class="d-flex" id="admin__form--photo'.$photo->id.'">
                                        <td><img src="./upload/'.$photo->image.'" style="height:50px;"></td>
                                        <td><input type="text" name="titre" id="formulaire_titre" value="'.$photo->titre.'"></td>
                                        <td><input type="text" name="description" id="formulaire_description" value="'.$photo->description.'"></td>
                                        <td>
                                            <select>
                                                '.$gal.'
                                            </select>
                                        </td>
                                        <td> 
                                            <button class="btn btn-warning">Modifier</button>
                                            <button type="button" class="btn btn-danger supprCompte" data-bs-toggle="modal" data-bs-target="#adminphotosSuppr">Supprimer</button>
                                        </td>
                                    </form>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="adminPhotosSuppr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Confirmation de suppression</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes vous sûr de vouloir supprimer ce compte ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                    <a href=""><button type="button" class="btn btn-danger">Supprimer le compte</button></a>
                </div>
                </div>
            </div>
            </div>
        </div>