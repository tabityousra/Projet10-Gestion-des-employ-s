<?php
    class Employe {
        private $firstName;
        private $lastName;
        private $age;
        private $Departement;
        private $Salaire;
        private $Fonction;
        private $Photo;

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($value){
            $this->firstName = $value;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($value){
            $this->lastName= $value;
        }

  

        public function getAge(){
            return $this->age;
        }

        public function setAge($value){
            $this->age = $value;
        }

        public function getDepartement(){
            return $this->Departement;
        }

        public function setDepartement($value){
            $this->Departement = $value;
        }

        public function getSalaire(){
            return $this->Salaire;
        }

        public function setSalaire($value){
            $this->Salaire = $value;
        }

        public function getFonction(){
            return $this->Fonction;
        }

        public function setFonction($value){
            $this->Fonction = $value;
        }

        public function getPhoto(){
            return $this->Photo;
        }

        public function setPhoto($value){
            $this->Photo = $value;
        }
    }
?>