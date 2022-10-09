<?php

    class Concert{

        private int $id;
        private string $date;
        private string $lieu;
        private string $heure;
        private string $image;


        public function __construct($id=0, $date, $lieu, $heure, $image){
            $this->id = (int)$id;
            $this->date = $date;
            $this->lieux = $lieu;
            $this->lieux = $heure;
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

        public function getimage(){
            return $this->image;
        }
        public function setimage(string $image) {
            $this->image = $image;
            return $this;
        }
    }
    
?>