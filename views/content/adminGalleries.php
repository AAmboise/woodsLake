<div class="row panel__card--galleries panel__card--titre text-center">
                <div class="col">Liste des Galleries</div>
        </div>
        <div class="row panel__card--galleries panel__card--galleries--titre justify-content-center align-item-center">
            <div class="col-4  justify-content-center">
                <div class=" row  barre panel__card--galleries text-center">
                    <div class="col-6">Titre</div>
                    <div class="col-6">Action</div>
                </div> 
                    <?php
                        $galleries = GallerieDataBase::read();
                        foreach ($galleries as $gallerie){
                            echo '
                            <div class="row  barre d-flex my-1">
                                <form method="post" class="d-flex" id="admin__form--gallerie'.$gallerie->id.'">
                                    <input type="hidden" name="gallerieId" value="'.$gallerie->id.'">
                                    <div class="col">
                                        <input type="text" name="gallerieNom" id="formulaire_titre" value="'.$gallerie->nom.'">
                                    </div>

                                    <div class="col"> 
                                        <button type="submit" name="modifGallerie" class="btn btn-warning">Modifier</button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#admingalleriesSuppr'.$gallerie->id.'">Supprimer</button>
                                    </div>

                                    <!-- Modal add -->
                                    <div class="modal fade" id="admingalleriesSuppr'.$gallerie->id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Supprimer une gallerie</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div>Êtes vous sûr de vouloir supprimer cette gallerie ?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                            
                                            <button type="submit" name="supprGallerie" class="btn btn-danger">Supprimer la gallerie</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>';     
                        }
                    ?>
                   
                
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-2">
                    <form method="POST">
                        <button type="button" class="btn btn-lg btn-info addgallerie" data-bs-toggle="modal" data-bs-target="#admingalleriesAdd">Ajouter une gallerie</button>
                        <!-- Modal add -->
                        <div class="modal fade" id="admingalleriesAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ajouter une gallerie</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="gallerieTitre" id="formulaire_gallerie"placeholder="Votre titre">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                <a href=""><button type="submit" name="addGallerie" class="btn btn-info">Créer la gallerie</button></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>