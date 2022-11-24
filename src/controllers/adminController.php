<?php
    namespace Src\Controllers;
    use Src\Database\GalerieDatabase;
    use Src\Database\UserDataBase;
    use Src\Database\PhotoDataBase;
    use Src\Database\ExtraitDataBase;
    use Src\Database\ConcertDataBase;
    use Src\Models\Extrait;
    use Src\Models\Galerie;
    use Src\Models\Concert;
    use Src\Models\Photo;
    use Src\Functions\Functions;

    session_start();
    $titre = "Administration";
    $css = '<link rel="stylesheet" href="../assets/css/style.css">';
    $menu = true;
    $header = false;
    $script = '<script type="text/javascript" src="../assets/js/panel_admin.js"></script>';
    $alerte = '';
    
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
        header('location:/administration');
    }
    if(isset($_POST['supprUser'])){ // SUPPRESSION USER
        UserDataBase::delete($_POST['userId']);
        header('location:/administration');
    }

    // CRUD CONCERT
    if(isset($_POST['createConcert'])){// CREATION CONCERT
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
        $extensions = ['.JPG','.jpg','.PNG','.png','.JPEG','.jpeg'];
        $destination = '../upload/';
        $nom_fichier = Functions::renomme_fichier($_FILES['image']['name']); // on renomme le fichier
        Functions::uploadFichier($_FILES['image'], $extensions, $destination, $nom_fichier);
        $concert = new Concert(null, $_POST['date'], $_POST['lieu'], $_POST['heure'], $nom_fichier);
        ConcertDataBase::create($concert);
        header('location:/administration');
        }
    }
    if(isset($_POST['modifConcert'])){ // MODIFICATION CONCERT
        ConcertDataBase::update($_POST['concertId'],'date',$_POST['date']);
        ConcertDataBase::update($_POST['concertId'],'lieu',$_POST['lieu']);
        ConcertDataBase::update($_POST['concertId'],'heure',$_POST['heure']);
        if(!empty($_FILES['image'])){
            unlink('./upload/'.$_POST['concertName']); // on supprime l'ancienne photo
            $extensions = ['.JPG','.jpg','.PNG','.png','.JPEG','.jpeg'];
            $destination = '../upload/';
            $url_image = Functions::renomme_fichier($_FILES['image']['name']); // on renomme le nouveau fichier
            Functions::uploadFichier($_FILES['image'], $extensions, $destination, $url_image); // on upload la nouvelle iage
            ConcertDataBase::update($_POST['concertId'],'URLImage',$url_image);
        }
        header('location:/administration');
    }
    if(isset($_POST['supprConcert'])){ // SUPPRESSION CONCERT
        unlink('./upload/'.$_POST['concertName']);
        ConcertDataBase::delete($_POST['concertId']);
        header('location:/administration');
    }

    // CRUD GALERIES
    if(isset($_POST['addGalerie'])){ // CREATION GALERIE
        if(!empty($_POST['galerieTitre'])){
            $galerie = new Galerie(null,$_POST['galerieTitre']);
            $newGalerie = GalerieDataBase::create($galerie);
            header('location:/administration');
        }
    }
    if(isset($_POST['modifGalerie'])){ // MODIFICATION GALERIE
        $galeries = GalerieDataBase::read();
        foreach ($galeries as $galerie){
            $galeriename ='';
            if ($galerie->id == $_POST['galerieId']){
                $galerieName = $galerie->nom;
            }
        }
        $photos = PhotoDataBase::read();
        foreach ($photos as $photo){
            if ($photo->galerie == $galerieName){
                PhotoDataBase::update($photo->id, 'galerie', $_POST['galerieNom']);
            }
        }
        GalerieDataBase::update($_POST['galerieId'],$_POST['galerieNom']);
        header('location:/administration');
    }
    if(isset($_POST['supprGalerie'])){ // SUPPRESSION GALERIE
        GalerieDataBase::delete($_POST['galerieId']);
        header('location:/administration');
    }

    // CRUD PHOTOS
    if(isset($_POST['createPhoto']) ){// CREATION PHOTO
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
        $extensions = ['.JPG','.jpg','.PNG','.png','.JPEG','.jpeg'];
        $destination = '../upload/';
        $nom_photo = Functions::renomme_fichier($_FILES['photo']['name']); // on renomme le fichier
        Functions::uploadFichier($_FILES['photo'], $extensions, $destination, $nom_photo);
        $photo = new Photo(null, $_POST['titre'], $_POST['description'], $_POST['galerie'], $nom_photo);

        PhotoDataBase::create($photo);
        header('location:/administration');
        }
        header('location:/administration');
    }
    if(isset($_POST['modifPhoto'])){ // MODIFICATION PHOTO
        PhotoDataBase::update($_POST['photoId'],'titre',$_POST['titre']);
        PhotoDataBase::update($_POST['photoId'],'description',$_POST['description']);
        PhotoDataBase::update($_POST['photoId'],'galerie',$_POST['galerie']);
        header('location:/administration');
    }
    if(isset($_POST['supprPhoto'])){ // SUPPRESSION PHOTO
        unlink('./upload/'.$_POST['photoName']);
        PhotoDataBase::delete($_POST['photoId']);
        header('location:/administration');
    }
    // CRUD EXTRAIT
    if(isset($_POST['createExtrait'])){// CREATION EXTRAIT
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
        $extensions = ['.MP3','.mp3','.WAV','.wav','.WMA','.wma', '.MIDI', '.midi'];
        $destination = '../upload/';
        $nom_fichier = Functions::renomme_fichier($_FILES['extrait']['name']); // on renomme le fichier
        Functions::uploadFichier($_FILES['extrait'], $extensions, $destination, $nom_fichier);
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
    
    require_once '../views/pages/admin.php';


    
    ?>