<div class="row panel__card--extraits panel__card--titre text-center">
                <div class="col">Liste des Extraits</div>
        </div>
        <div class="row panel__card--extraits panel__card--extraits--titre justify-content-center align-item-center">
            <div class="col-8 justify-content-center">
                <div class=" row  barre panel__card--extraits text-center">
                    <div class="col-4">Titre</div>
                    <div class="col-4">Extrait</div>
                    <div class="col-4">Action</div>
                </div>
                        <?php
                            $extraits = ExtraitDataBase::read();
                            foreach ($extraits as $extrait){
                                echo '
                                <div class="row  barre d-flex my-1">
                                    <form method="post" class="d-flex align-items-center" id="admin__form--Extrait'.$extrait->id.'">
                                        <input type="hidden" name="extraitId" value="'.$extrait->id.'">
                                        <input type="hidden" name="extraitName" value="'.$extrait->fichier.'">
                                        <div class="col">
                                            <input type="text" name="extraitTitre" id="formulaire_titre" value="'.$extrait->titre.'">
                                        </div>
                                        <div class="col">
                                            <audio controls src="../../upload/'.$extrait->fichier.'"></audio>
                                        </div>
                                        <div class="col"> 
                                            <button type="submit" name="modifExtrait" class="btn btn-warning">Modifier</button>
                                            <button type="button" class="btn btn-danger supprCompte" data-bs-toggle="modal" data-bs-target="#adminExtraitsSuppr'.$extrait->id.'">Supprimer</button>
                                        </div>

                                        <!-- Modal SUPPR -->
                                        <div class="modal fade" id="adminExtraitsSuppr'.$extrait->id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Confirmation de suppression</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Êtes vous sûr de vouloir supprimer l\'extrait ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                                        <button type="submit" name="supprExtrait" class="btn btn-danger">Supprimer l\'extrait</button>
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
                <div class="col-2 mt-3 justify-content-center">
                    <form method="POST" enctype='multipart/form-data'>
                        <button type="button" class="btn btn-lg btn-info addExtrait" data-bs-toggle="modal" data-bs-target="#adminExtraitsAdd">Ajouter un Extrait</button>
                        <!-- Modal add -->
                        <div class="modal fade" id="adminExtraitsAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ajouter un Extrait</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" name="titre" id="formulaire_titre"placeholder="Votre titre">
                                        <input type="file" name="extrait" id="formulaire_extrait">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" name="createExtrait" class="btn btn-info">Créer l'extrait</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            


        </div>