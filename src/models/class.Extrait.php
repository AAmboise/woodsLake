<?php

    class Extrait{

        public int $id;
        public string $titre;
        public string $fichier;

        function __construct($id, $titre, $fichier){
            $this->id = (int)$id;
            $this->titre = $titre;
            $this->fichier = $fichier;
        }

        public function getId(): int{
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
     
            return $this;
        }

        public function getTitre(){
            return $this->titre;
        }
        public function setTitre(string $titre) {
            $this->titre = $titre;

            return $this;
        }

        public function getFichier(){
            return $this->fichier;
        }
        public function setFichier(string $fichier) {
            $this->fichier = $fichier;

            return $this;
        }
    }
    
?>