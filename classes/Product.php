<?php

    class Product {
        protected $marca;
        protected $modello;
        protected $descrizione;
        protected $prezzo;


        public function __construct($_marca, $_modello, $_descrizione, $_prezzo)
        {
            $this->marca = $_marca;
            $this->modello = $_modello;
            $this->descrizione = $_descrizione;
            $this->prezzo = $_prezzo;  
        }

        public function getMarca()
        {
            return $this->marca;
        }

        public function getModello()
        {
            return $this->modello;
        }

        public function getDescrizione()
        {
            return $this->descrizione;
        }

        public function getPrezzo()
        {
            return "€ {$this->prezzo}";
        }

    }

?>