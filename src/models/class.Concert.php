<?php

    class Concert{

        public int $id;
        public string $date;
        public string $lieu;
        public string $heure;
        public string $image;


        public function __construct($id, $date, $lieu, $heure, $image){
            $this->id = (int)$id;
            $this->date = $date;
            $this->lieu = $lieu;
            $this->heure = $heure;
            $this->image = $image;
        }

        public function getId(){
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
            return $this;
        }

        public function getDate(){
            return $this->date;
        }
        public function setDate(string $date) {
            $this->date = $date;
            return $this;
        }

        public function getLieu(){
            return $this->lieu;
        }
        public function setLieu(string $lieu) {
            $this->lieu = $lieu;
            return $this;
        }

        public function getHeure(){
            return $this->heure;
        }
        public function setHeure(string $heure) {
            $this->heure = $heure;
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