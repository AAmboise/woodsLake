<?php
    require_once __DIR__.'/../../vendor/autoload.php';
?>
<div class="row panel__card--users panel__card--titre text-center">
                <div class="col">Liste des utilisateurs</div>
        </div>
        <div class="row panel__card--users panel__card--users--titre justify-content-center align-item-center">
            <div class="col-10 justify-content-center">
                <div class=" row  barre panel__card--users text-center">
                    <div class="col-2">Prénom</div>
                    <div class="col-2">Nom</div>
                    <div class="col-2">E-mail</div>
                    <div class="col-2">Télephone</div>
                    <div class="col-2">Admin</div>
                    <div class="col-2">Action</div>
                </div>
                <?php
                    $users = Src\Database\UserDataBase::read();
                    foreach ($users as $user){
                        if($user->isAdmin){
                            $yes = ' selected';
                            $no = '';
                        }
                        else{
                            $yes = '';
                            $no = ' selected';
                        }
                        echo '
                            <div class="row  barre d-flex my-1">   
                                <form method="post" class="d-flex align-items-center" id="admin__form--user-'.$user->id.'">
                                    <input type="hidden" name="userId" value="'.$user->id.'">
                                    <div class="col-2">
                                        <input type="text" name="prenom" id="formulaire_prenom" value="'.$user->prenom.'">
                                    </div>
                                    <div class="col-2">
                                        <input type="text" name="nom" id="formulaire_nom" value="'.$user->nom.'">
                                    </div>
                                    <div class="col-2">
                                        <input type="email" name="email" id="formulaire_email" value="'.$user->email.'">
                                    </div>
                                    <div class="col-2">
                                        <input type="text" name="telephone" id="formulaire_telephone" value="'.$user->telephone.'">
                                    </div>
                                    <div class="col-2">
                                        <select name="isAdmin">
                                            <option'.$yes.'>oui</option>
                                            <option'.$no.'>non</option>
                                        </select>
                                    </div>
                                    <div class="col-2"> 
                                        <button type="submit" name="modifUser"class="btn btn-warning">Modifier</button>
                                        <button type="button" class="btn btn-danger supprCompte" data-bs-toggle="modal" data-bs-target="#adminUserSuppr'.$user->id.'">Supprimer</button>
                                    </div>

                                    <!-- Modal suppr-->
                                    <div class="modal fade" id="adminUserSuppr'.$user->id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <button type="submit" name="supprUser" class="btn btn-danger">Supprimer le compte</button>
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
        </div>


           
 