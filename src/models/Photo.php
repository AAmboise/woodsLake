<?php
namespace Src\Models;

    class Photo{

        public int $id;
        public string $titre;
        public string $description;
        public string $galerie;
        public string $image;


        public function __construct($id, $titre, $description, $galerie, $image){
            $this->id = (int)$id;
            $this->titre = $titre;
            $this->description = $description;
            $this->galerie = $galerie;
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

        public function getGalerie(){
            return $this->galerie;
        }
        public function setGalerie(string $galerie) {
            $this->galerie = $galerie;
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