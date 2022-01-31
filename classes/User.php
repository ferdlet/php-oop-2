<?php

    class User {
        protected $nome;
        protected $cognome;
        protected $email;
        protected $eta;
        


        public function __construct($_nome, $_cognome, $_email)
        {
            $this->nome = $_nome;
            $this->cognnome = $_cognome;
            $this->email = $_email;  
        }
    }

?>