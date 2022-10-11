<?php

    class Photo{

        public int $id;
        public string $titre;
        public string $description;
        public string $gallerie;
        public string $image;


        public function __construct($id, $titre, $description, $gallerie, $image){
            $this->id = (int)$id;
            $this->titre = $titre;
            $this->description = $description;
            $this->gallerie = $gallerie;
            $this->image = $image;
        }

        public function getId(){
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

        public function getDescription(){
            return $this->description;
        }
        public function setDescription(string $description) {
            $this->description = $description;
            return $this;
        }

        public function getGallerie(){
            return $this->gallerie;
        }
        public function setGallerie(string $gallerie) {
            $this->gallerie = $gallerie;
            return $this;
        }

        public function getImage(){
            return $this->image;
        }
        public function setImage(string $image) {
            $this->image = $image;
            return $this;
        }
    }
    
?>