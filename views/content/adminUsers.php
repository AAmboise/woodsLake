<div class="row panel__card--users panel__card--titre text-center">
                <div class="col">Liste des utilisateurs</div>
        </div>
        <div class="panel__card--users d-flex justify-content-center">
            <table class="panel__card--users">
                <thead>
                    <tr >
                        <td>Prénom</td>
                        <td>Nom</td>
                        <td>E-mail</td>
                        <td>Télephone</td>
                        <td>Admin</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $users = UserDataBase::read();
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
                            <tr>
                                <form method="post" class="d-flex" id="admin__form--user-'.$user->id.'">
                                    <td><input type="text" name="prenom" id="formulaire_prenom" value="'.$user->prenom.'"></td>
                                    <td><input type="text" name="nom" id="formulaire_nom" value="'.$user->nom.'"></td>
                                    <td><input type="email" name="email" id="formulaire_email" value="'.$user->email.'"></td>
                                    <td><input type="text" name="telephone" id="formulaire_telephone" value="'.$user->telephone.'"></td>
                                    <td>
                                        <select>
                                            <option'.$yes.'>oui</option>
                                            <option'.$no.'>non</option>
                                        </select>
                                    </td>
                                    <td> 
                                        <button class="btn btn-warning">Modifier</button>
                                        <button type="button" class="btn btn-danger supprCompte" data-bs-toggle="modal" data-bs-target="#adminUserSuppr">Supprimer</button>
                                    </td>
                                </form>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="adminUserSuppr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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