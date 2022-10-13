<?php
namespace Src\Models;

    class Gallerie{

        public int $id;
        public string $nom;

        function __construct($id, $nom){
            $this->id = (int)$id;
            $this->nom = $nom;

        }

        public function getId(): int{
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
     
            return $this;
        }

        public function getNom(){
            return $this->nom;
        }
        public function setNom(string $nom) {
            $this->nom = $nom;

            return $this;
        }
    }
    
?>