<div class="row panel__card--extraits panel__card--titre text-center">
                <div class="col">Liste des Extraits</div>
        </div>
        <div class="row panel__card--extraits panel__card--extraits--titre text-center">
            <div class="col-12 d-flex justify-content-center">
                <table class="panel__card--extraits">
                    <thead>
                        <tr >
                            <td>Titre</td>
                            <td>Extrait</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $extraits = ExtraitDataBase::read();
                            foreach ($extraits as $extrait){
                                echo '
                                <tr>
                                    <form method="post" class="d-flex" id="admin__form--Extrait'.$extrait->id.'">
                                        <td><input type="text" name="date" id="formulaire_titre" value="'.$extrait->titre.'"></td>
                                        <td><audio controls src="../../upload/'.$extrait->fichier.'"></audio></td>
                                        <td> 
                                            <button class="btn btn-warning">Modifier</button>
                                            <button type="button" class="btn btn-danger supprCompte" data-bs-toggle="modal" data-bs-target="#adminExtraitsSuppr">Supprimer</button>
                                        </td>
                                    </form>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>  
            </div>

            <div class="col-12 mt-3 justify-content-center">
            <button type="button" class="btn btn-lg btn-info addExtrait" data-bs-toggle="modal" data-bs-target="#adminExtraitsAdd">Ajouter un Extrait</button>
            </div>
            <!-- Modal SUPPR -->
            <div class="modal fade" id="adminExtraitsSuppr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Confirmation de suppression</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes vous sûr de vouloir supprimer l'extrait ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                    <a href=""><button type="button" class="btn btn-danger">Supprimer l'extrait</button></a>
                </div>
                </div>
            </div>
            </div>

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
                    <a href=""><button type="button" class="btn btn-info">Créer l'extrait</button></a>
                </div>
                </div>
            </div>
            </div>
        </div>