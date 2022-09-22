<?php

    class Extrait{

        private int $id;
        private string $titre;
        private string $fichier;

        function __construct($id, $titre, $fichier){
            $this->id = (int)$id;
            $this->titre = $titre;
            $this->fichier = $fichier;
        }

        public function getId(): int{
            return $this->id;
        }
        public function setId(int $id): int {
            $this->id = $id;
     
            return $this;
        }

        public function getTitre(){
            return $this->id;
        }
        public function setTitre(string $titre): string {
            $this->titre = $titre;

            return $this;
        }

        public function getFichier(){
            return $this->fichier;
        }
        public function setFichier(string $fichier): string {
            $this->fichier = $fichier;

            return $this;
        }
    }
    
?>