<?php

    class Actu{

        private $id;
        public $sujet;
        public $titre;
        public $photo;
        public $etat;

        public function __construct($id, $sujet, $titre, $photo, $etat){

            $this->id = $id;
            $this->sujet = $sujet;
            $this->titre = $titre;
            $this->photo = $photo;
            $this->etat = $etat;
        }
    
        public function getId(){
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
            return $this;
        }

        public function getSujet(){
            return $this->sujet;
        }
        public function setSujet(string $sujet): string {
            $this->sujet = $sujet;

            return $this;
        }

        public function getTitre(){
            return $this->titre;
        }
        public function setTitre(string $titre): string {
            $this->titre = $titre;

            return $this;
        }


        public function getPhoto(){
            return $this->photo;
        }
        public function setPhoto(string $photo): string {
            $this->photo = $photo;

            return $this;
        }

    }
    
?>