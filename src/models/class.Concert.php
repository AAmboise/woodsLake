<?php

    class Concert{

        private int $id;
        private string $titre;
        private string $nom;
        private string $date;
        private string $lieu;
        private string $photo;
        private string $lien;

        public function __construct($pId=0, $titre, $nom, $date, $lieu, $photo, $lien){
            $this->id = (int)$Id;
            $this->titre = $titre;
            $this->nom = $nom;
            $this->date = $date;
            $this->lieux = $lieu;
            $this->photo = $photo;
            $this->lien = $lien;
        }

        public function getId(){
            return $this->id;
        }
        public function setId(int $id): int {
            $this->id = $id;
            return $this;
        }

        public function getTitre(){
            return $this->titre;
        }
        public function setTitre(string $titre): string {
            $this->titre = $titre;
            return $this;
        }

        public function getNom(){
            return $this->nom;
        }
        public function setNom(string $nom): string {
            $this->nom = $nom;
            return $this;
        }

        public function getDate(){
            return $this->date;
        }
        public function setDate(string $date): string {
            $this->date = $date;
            return $this;
        }

        public function getLieu(){
            return $this->lieu;
        }
        public function setLieu(string $lieu): string {
            $this->lieu = $lieu;
            return $this;
        }

        public function getPhoto(){
            return $this->photo;
        }
        public function setPhoto(string $photo): string {
            $this->photo = $photo;
            return $this;
        }

        public function getLien(){
            return $this->lien;
        }
        public function setLien(string $lien): string {
            $this->lien = $lien;
            return $this;
        }
    }
    
?>