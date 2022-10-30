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

}


?>