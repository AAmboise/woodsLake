<div class="row panel__card--galleries panel__card--titre text-center">
                <div class="col">Liste des Galleries</div>
        </div>
        <div class="row panel__card--galleries panel__card--galleries--titre text-center">
            <div class="col-12 d-flex justify-content-center">
                <table class="panel__card--galleries">
                    <thead>
                        <tr >
                            <td>Titre</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $galleries = GallerieDataBase::read();
                            foreach ($galleries as $gallerie){
                                echo '
                                <tr>
                                    <form method="post" class="d-flex" id="admin__form--gallerie'.$gallerie->id.'">
                                        <td><input type="text" name="date" id="formulaire_titre" value="'.$gallerie->nom.'"></td>
                                        <td> 
                                            <button class="btn btn-warning">Modifier</button>
                                            <button type="button" class="btn btn-danger supprCompte" data-bs-toggle="modal" data-bs-target="#admingalleriesSuppr">Supprimer</button>
                                        </td>
                                    </form>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>  
            </div>

            <div class="col-12 mt-3 justify-content-center">
            <button type="button" class="btn btn-lg btn-info addgallerie" data-bs-toggle="modal" data-bs-target="#admingalleriesAdd">Ajouter une gallerie</button>
            </div>
            <!-- Modal SUPPR -->
            <div class="modal fade" id="admingalleriesSuppr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Confirmation de suppression</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes vous sûr de vouloir supprimer la gallerie ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                    <a href=""><button type="button" class="btn btn-danger">Supprimer la gallerie</button></a>
                </div>
                </div>
            </div>
            </div>

            <!-- Modal add -->
            <div class="modal fade" id="admingalleriesAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ajouter une gallerie</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="titre" id="formulaire_titre"placeholder="Votre titre">
                    <input type="file" name="gallerie" id="formulaire_gallerie">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                    <a href=""><button type="button" class="btn btn-info">Créer la gallerie</button></a>
                </div>
                </div>
            </div>
            </div>
        </div>