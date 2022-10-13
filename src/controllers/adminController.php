<?php
    namespace Src\Controllers;
    use Src\Database\GallerieDatabase;
    use Src\Database\UserDataBase;
    use Src\Database\PhotoDataBase;
    use Src\Database\ExtraitDataBase;
    use Src\Database\ConcertDataBase;
    use Src\Models\Extrait;
    use Src\Models\Gallerie;

    session_start();
    $titre = "Administration";
    $css = '<link rel="stylesheet" href="./assets/css/style.css">';
    $menu = true;
    $header = false;
    $script = '<script type="text/javascript" src="../assets/js/panel_admin.js"></script>';
    $alerte = '';
    require_once './views/pages/admin.php';

    // CRUD USERS
    if(isset($_POST['modifUser'])){ // MODIFICATION USER
        UserDataBase::update($_POST['userId'],'nom',strtoupper($_POST['nom']));
        UserDataBase::update($_POST['userId'],'prenom',ucwords($_POST['prenom']));
        UserDataBase::update($_POST['userId'],'email',$_POST['email']);
        UserDataBase::update($_POST['userId'],'telephone',$_POST['telephone']);
        $resp = ['oui', 'non'];
        $bool = [1,0];
        $isAdmin = str_replace($resp, $bool,$_POST['isAdmin']);
        UserDataBase::update($_POST['userId'],'isAdmin',$isAdmin);
    }
    if(isset($_POST['supprUser'])){ // SUPPRESSION USER
        UserDataBase::delete($_POST['userId']);
        header('location:/administration');
    }

    // CRUD CONCERT
    // CREATION CONCERT
    // MODIFICATION CONCERT
    if(isset($_POST['supprConcert'])){ // SUPPRESSION CONCERT
        ConcertDataBase::delete($_POST['concertId']);
        header('location:/administration');
    }

    // CRUD GALLERIES
    if(isset($_POST['addGallerie'])){ // CREATION GALLERIE
        if(!empty($_POST['gallerieTitre'])){
            $gallerie = new Gallerie(null,$_POST['gallerieTitre']);
            $newGallerie = GallerieDataBase::create($gallerie);
            header('location:/administration');
        }
    }
    if(isset($_POST['modifGallerie'])){ // MODIFICATION GALLERIE
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
    if(isset($_POST['supprGallerie'])){ // SUPPRESSION GALLERIE
        GallerieDataBase::delete($_POST['gallerieId']);
        header('location:/administration');
    }

    // CRUD PHOTOS
    // CREATION PHOTO
    // MODIFICATION PHOTO
    if(isset($_POST['supprPhoto'])){ // SUPPRESSION PHOTO
        unlink('./upload/'.$_POST['PhotoName']);
        PhotoDataBase::delete($_POST['PhotoId']);
        header('location:/administration');
    }

    // CRUD EXTRAIT
    if(isset($_POST['createExtrait'])){// CREATION EXTRAIT
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
        $extensions = ['.MP3','.mp3','.WAV','.wav','.WMA','.wma', '.MIDI', '.midi'];
        $destination = 'upload/';
        $nom_fichier = renomme_fichier($_FILES['extrait']['name']); // on renomme le fichier
        uploadFichier($_FILES['extrait'], $extensions, $destination, $nom_fichier);
        $extrait = new Extrait(null, $_POST['titre'], $nom_fichier);
        ExtraitDataBase::create($extrait);
        header('location:/administration');
        }
    }
    if(isset($_POST['modifExtrait'])){ // MODIFICATION EXTRAIT
        ExtraitDataBase::update($_POST['extraitId'], 'titre', $_POST['extraitTitre']);
        header('location:/administration');
    }
    if(isset($_POST['supprExtrait'])){ // SUPPRESSION EXTRAIT
        unlink('./upload/'.$_POST['extraitName']);
        ExtraitDataBase::delete($_POST['extraitId']);
        header('location:/administration');
    }

    function uploadFichier($fichier,$extensions,$destination,$nom_fichier){ // upload du fichier
        $extension = strrchr($fichier['name'],'.'); // on recupere l'extension du fichier
        if(in_array($extension,$extensions)){ // on verifie que l'extension est dans le tableau
            if(move_uploaded_file($fichier['tmp_name'],$destination.$nom_fichier)){ // si on deplace bien le fichier dans le dossier upload, on retourne true
                return $destination.$nom_fichier;
            }
            else{
                exit;
            }
        }
        else{
            exit;
        }
    }
    function renomme_fichier($name){ // renome le fichiers 
        $extension = strrchr($name,'.'); // on recupere l'extension du fichier
        $nom = base64_encode($name); // On encode le nom du fichier
        $date = date('Y-m-d'); // ajoute la date au nom de l'image
        return $date.$nom.$extension; // retourne le nom de l'image
    }
    
    ?>