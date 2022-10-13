<?php
    require_once __DIR__.'/../../vendor/autoload.php';
?>
        <div class="row panel__card--concerts panel__card--titre text-center">
            <div class="col">Liste des concerts</div>
        </div>
        <div class="row panel__card--concerts panel__card--concerts--titre text-center justify-content-center">
            <div class="col-11 d-flex justify-content-center">
                <table class="panel__card--concerts">
                    <thead>
                        <tr >
                            <td>Date</td>
                            <td>Lieux</td>
                            <td>Heure</td>
                            <td>Image</td>
                            <td>Nouvelle Image</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $concerts = Src\Database\ConcertDataBase::read();
                        foreach ($concerts as $concert){
                            echo '
                            <tr>
                                <form method="post" class="d-flex" id="admin__form--concert'.$concert->id.'">
                                    <td><input type="date" name="date" id="formulaire_date" value="'.$concert->date.'"></td>
                                    <td><input type="text" name="lieu" id="formulaire_lieu" value="'.$concert->lieu.'"></td>
                                    <td><input type="email" name="heure" id="formulaire_heure" value="'.$concert->heure.'"></td>
                                    <td><img src="./upload/'.$concert->image.'" style="height:50px;"></td>
                                    <td><input type="file" name="image" id="formulaire_image"></td>
                                    <td> 
                                        <button class="btn btn-warning">Modifier</button>
                                        <button type="button" class="btn btn-danger supprCompte" data-bs-toggle="modal" data-bs-target="#adminConcertsSuppr">Supprimer</button>
                                    </td>
                                </form>
                            </tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-2 mt-3">
            <button type="button" class="btn btn-lg btn-info addConcert" data-bs-toggle="modal" data-bs-target="#adminConcertsAdd">Ajouter un concert</button>
            </div>
            <!-- Modal SUPPR -->
            <div class="modal fade" id="adminConcertsSuppr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Confirmation de suppression</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes vous sûr de vouloir supprimer ce concert ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                    <a href=""><button type="button" class="btn btn-danger">Supprimer le concert</button></a>
                </div>
                </div>
            </div>
            </div>

            <!-- Modal add -->
            <div class="modal fade" id="adminConcertsAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ajouter un concert</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="date" name="date" id="formulaire_date">
                    <input type="text" name="lieu" id="formulaire_lieu" placeholder="Ajouter un lieu">
                    <input type="email" name="heure" id="formulaire_heure" placeholder="Ajouter une heure">
                    <input type="file" name="image" id="formulaire_image">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                    <a href=""><button type="button" class="btn btn-info">Créer le concert</button></a>
                </div>
                </div>
            </div>
            </div>
        </div>