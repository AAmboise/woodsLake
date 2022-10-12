<?php
    require_once './src/models/models.php';
    require_once './src/database/database.php';
    require_once './src/database/UserDataBase.php';
    require_once './src/database/ExtraitDataBase.php';
    require_once './src/database/ConcertDataBase.php';
    require_once './src/database/GallerieDataBase.php';
    require_once './src/database/PhotoDataBase.php';

    session_start();
    $titre = "Administration";
    $css = '<link rel="stylesheet" href="./assets/css/style.css">';
    $menu = true;
    $header = false;
    $script = '<script type="text/javascript" src="../assets/js/panel_admin.js"></script>';
    $alerte = '';
    require_once './views/pages/admin.php';

    if(isset($_POST['addGallerie'])){
        if(!empty($_POST['gallerieTitre'])){
            $gallerie = new Gallerie(null,$_POST['gallerieTitre']);
            $newGallerie = GallerieDataBase::create($gallerie);
            header('location:/administration');
        }
    }
    if(isset($_POST['supprGallerie'])){
        GallerieDataBase::delete($_POST['gallerieId']);
        header('location:/administration');
    }
    if(isset($_POST['modifGallerie'])){
        $galleries = GallerieDataBase::read();
        foreach ($galleries as $gallerie){
            $galleriename ='';
            if ($gallerie->id == $_POST['gallerieId']){
                $gallerieName = $gallerie->nom;
            }
        }
        $photos = PhotoDataBase::read();
        foreach ($photos as $photo){
            if ($photo->gallerie == $gallerieName){
                PhotoDataBase::update($photo->id, 'gallerie', $_POST['gallerieNom']);
            }
        }
        GallerieDataBase::update($_POST['gallerieId'],$_POST['gallerieNom']);
        header('location:/administration');
    }
    



    
    ?>