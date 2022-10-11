<?php

    class User{

        public $id;
        public $nom;
        public $prenom;
        public $email;
        public $telephone;
        public $password;
        public $isAdmin;

        public function __construct($id,$nom,$prenom,$email,$telephone,$password,$isAdmin=0){
            $this->id = (int)$id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->telephone = $telephone;
            $this->password = $password;
            $this->isAdmin = (int)$isAdmin;
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
        public function setNom(string $nom): string {
            $this->nom = $nom;
     
            return $this;
        }

        public function getPrenom(){
            return $this->prenom;
        }
        public function setPrenom(string $prenom): string {
            $this->prenom = $prenom;
     
            return $this;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail(string $email): string {
            $this->email = $email;
     
            return $this;
        }

        public function getTelephone(){
            return $this->telephone;
        }
        public function setTelephone(string $telephone): string {
            $this->telephone = $telephone;
     
            return $this;
        }

        public function getPassword(){
            return $this->password;
        }
        public function setPassword(string $password): string {
            $this->password = $password;
     
            return $this;
        }

        public function getIsAdmin(){
            return $this->isAdmin;
        }
        public function setIsAdmin(bool $isAdmin) {
            $this->isAdmin = $isAdmin;
     
            return $this;
        }
    }
    
?>