<?php
    class Menu
    {
        private $title;
        private $link;
        private $picture;
        private $alt;

        // Constructeur par défaut (objet vide)
        public function __construct()
        {
            $this->title   = '';
            $this->link    = '';
            $this->picture = '';
            $this->alt     = '';
        }

        // Sécurisation des données
        public static function secureData($data)
        {
            $menu = new self();
            $menu->fillSecureData($data);

            return $menu;
        }

        protected function fillSecureData($data)
        {
            $this->title   = htmlspecialchars($data->getTitle());
            $this->link    = htmlspecialchars($data->getLink());
            $this->picture = htmlspecialchars($data->getPicture());
            $this->alt     = htmlspecialchars($data->getAlt());
        }

        // Getters et Setters de l'objet
        // Titre
        public function setTitle($title)
        {
            $this->title = $title;
        }

        public function getTitle()
        {
            return $this->title;
        }

        // Lien
        public function setLink($link)
        {
            $this->link = $link;
        }

        public function getLink()
        {
            return $this->link;
        }

        // Image
        public function setPicture($picture)
        {
            $this->picture = $picture;
        }

        public function getPicture()
        {
            return $this->picture;
        }

        // Alt
        public function setAlt($alt)
        {
            $this->alt = $alt;
        }

        public function getAlt()
        {
            return $this->alt;
        }
    }
?>