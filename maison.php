<?php
    class Maison{
        /* ATTRIBUTS */
        private $nom;
        private $longueur;
        private $largeur;
        private $nbrEtage;

        /* CONSTRUCTEUR */
        public function __construct($name, $length, $width,$floor){
            $this->nom = $name;
            $this->longueur = $length;
            $this->largeur = $width;
            $this->nbrEtage = $floor;
        }

        /* GETTER */
        public function getNom(){
            return $this->nom;
        }
        public function getLongueur(){
            return $this->longueur;
        }
        public function getLargeur(){
            return $this->largeur;
        }
        public function getFloor(){
            return $this->nbrEtage;
        }

        /* SETTER */
        public function setNom($name){
            $this->$name;
        }
        public function setLongueur($length){
            $this->$length;
        }
        public function setLargeur($width){
            $this->$width;
        }
        public function setFloor($floor){
            $this->$floor;
        }

        /* FONCTION CALCUL ETAGE */
        public function surface(){
            $surface= ($this->longueur * $this->largeur)* $this->nbrEtage;
            echo "<p>La surface de " . $this->nom . " est égale à : $surface m2</p>";
        }

        // Méthode à appliquer
        public function surface2(){
            return $this->longueur * $this->largeur;
        }
        
    }
?>