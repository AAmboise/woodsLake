<?php
    require_once __DIR__.'/../../vendor/autoload.php';
?>
<div class="row panel__card--galeries panel__card--titre text-center">
                <div class="col">Liste des Galeries</div>
        </div>
        <div class="row panel__card--galeries panel__card--galeries--titre justify-content-center align-item-center">
            <div class="col-4 justify-content-center">
                <div class=" row  barre panel__card--galeries text-center">
                    <div class="col-6">Titre</div>
                    <div class="col-6">Action</div>
                </div> 
                <?php
                    $galeries = Src\Database\GalerieDataBase::read();
                    foreach ($galeries as $galerie){
                        echo '
                            <div class="row  barre d-flex my-1">
                                <form method="post" class="d-flex align-items-center" id="admin__form--galerie'.$galerie->id.'">
                                    <input type="hidden" name="galerieId" value="'.$galerie->id.'">
                                    <div class="col">
                                        <input type="text" name="galerieNom" id="formulaire_titre" value="'.$galerie->nom.'">
                                    </div>
                                    ';
                                    if ($galerie->nom != 'Caroussel (3 max)' && $galerie->nom != 'Slider'){
                                        echo '
                                        <div class="col"> 
                                            <button type="submit" name="modifGalerie" class="btn btn-warning">Modifier</button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#admingaleriesSuppr'.$galerie->id.'">Supprimer</button>
                                        </div>';
                                    }
                                    echo '
                                    <!-- Modal suppr -->
                                    <div class="modal fade" id="admingaleriesSuppr'.$galerie->id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Supprimer une galerie</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>Êtes vous sûr de vouloir supprimer cette galerie ?</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                                    <button type="submit" name="supprGalerie" class="btn btn-danger">Supprimer la galerie</button>
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
                <div class="col-2">
                    <form method="POST">
                        <button type="button" class="btn btn-lg btn-info addgalerie" data-bs-toggle="modal" data-bs-target="#admingaleriesAdd">Ajouter une galerie</button>
                        <!-- Modal add -->
                        <div class="modal fade" id="admingaleriesAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ajouter une galerie</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" name="galerieTitre" id="formulaire_galerie"placeholder="Votre titre">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" name="addGalerie" class="btn btn-info">Créer la galerie</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>