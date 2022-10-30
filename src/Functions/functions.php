<?php
namespace Src\Functions;
use Src\Database\PhotoDataBase;

class Functions{


    public static function check_carousel(){
        $header = false;
        $photos = PhotoDataBase::read();
        foreach ($photos as $photo){
            if ($photo->gallerie == 'Caroussel (3 max)'){
                $header = true;
            }
        }
        return $header;
    }

    public static function check_slick(){
        $slick = false;
        $photos = PhotoDataBase::read();
        foreach ($photos as $photo){
            if ($photo->gallerie == 'Slider'){
                $slick = true;
            }
        }
        return $slick;
    }

    public static function uploadFichier($fichier,$extensions,$destination,$nom_fichier){ // upload du fichier
        $extension = strrchr($fichier['name'],'.'); // on recupere l'extension du fichier
        if(in_array($extension,$extensions)){ // on verifie que l'extension est dans le tableau
            if(move_uploaded_file($fichier['tmp_name'],$destination.$nom_fichier)){ 
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

    public static function renomme_fichier($name){ // renome le fichiers 
        $extension = strrchr($name,'.'); // on recupere l'extension du fichier
        $nom = base64_encode($name); // On encode le nom du fichier
        $date = date('Y-m-d-h-i-s'); // ajoute la date au nom de l'image
        return $date.$nom.$extension; // retourne le nom de l'image
    }

}


?>