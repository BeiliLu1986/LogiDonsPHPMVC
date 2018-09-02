<?php


class User {
    private $courriel;
    private $username;
    private $motDePasse;
    
    function getCourriel() {
        return $this->courriel;
    }

    function getUsername() {
        return $this->username;
    }

    function getMotDePasse() {
        return $this->motDePasse;
    }

    function setCourriel($courriel) {
        $this->courriel = $courriel;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }

    public function loadFromArray($t) {
        $this->courriel = $t['COURRIEL'];
        $this->username = $t['USERNAME'];
        $this->motDePasse = $t['MOT_DE_PASSE'];
    }    
    public function loadFromObject($x) {
        $this->courriel = $x->COURRIEL;
        $this->username = $x->USERNAME;
        $this->motDePasse = $x->MOT_DE_PASSE;
    }
}
