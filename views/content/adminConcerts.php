<?php
    require_once __DIR__.'/../../vendor/autoload.php';
?>
        <div class="row panel__card--concerts panel__card--titre text-center">
            <div class="col">Liste des concerts</div>
        </div>
        <div class="row panel__card--concerts panel__card--concerts--titre text-center justify-content-center">
            <div class="col-10 justify-content-center">
                <div class=" row  barre panel__card--concerts text-center">
                    <div class="col-2">Date</div>
                    <div class="col-2">Lieux</div>
                    <div class="col-2">Heure</div>
                    <div class="col-2">Image</div>
                    <div class="col-2">Nouvelle Image</div>
                    <div class="col-2">Action</div>
                </div>
                    <?php
                        $concerts = Src\Database\ConcertDataBase::read();
                        foreach ($concerts as $concert){
                            echo '
                                <div class="row  barre d-flex my-1">
                                    <form method="post" class="d-flex align-items-center" enctype="multipart/form-data" id="admin__form--concert'.$concert->id.'">
                                    <input type="hidden" name="concertId" value="'.$concert->id.'">
                                    <input type="hidden" name="concertName" value="'.$concert->image.'">
                                        <div class="col-2">
                                            <input type="date" name="date" id="formulaire_date" value="'.$concert->date.'">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" name="lieu" id="formulaire_lieu" value="'.$concert->lieu.'">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" name="heure" id="formulaire_heure" value="'.$concert->heure.'">
                                        </div>
                                        <div class="col-1">
                                            <img src="../upload/'.$concert->image.'" style="height:50px;">
                                        </div>
                                        <div class="col-3">
                                            <input type="file" name="image" id="formulaire_image">
                                        </div>
                                        <div class="col-2"> 
                                            <button type="submit" name="modifConcert" class="btn btn-warning">Modifier</button>
                                            <button type="button" class="btn btn-danger supprConcert" data-bs-toggle="modal" data-bs-target="#adminConcertsSuppr'.$concert->id.'">Supprimer</button>
                                        </div>

                                        <!-- Modal SUPPR -->
                                        <div class="modal fade" id="adminConcertsSuppr'.$concert->id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <button type="submit" name="supprConcert" class="btn btn-danger">Supprimer le concert</button>
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
                <button type="button" class="btn btn-lg btn-info addConcert" data-bs-toggle="modal" data-bs-target="#adminConcertsAdd">Ajouter un concert</button>
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
                                <input type="text" name="heure" id="formulaire_heure" placeholder="Ajouter une heure">
                                <input type="file" name="image" id="formulaire_image">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" name="createConcert" class="btn btn-info">Créer le concert</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>   
    </div>
</div>