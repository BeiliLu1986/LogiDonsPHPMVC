<?php

class User {
        private $id_user;
	private $nom;
        private $prenom;
        private $type_user;
        private $courriel;
	private $nom_organis;
        private $telephone;
        private $ville;
        private $code_postale;
	private $adresse;
        private $province;
	private $password;

	public function __construct()	
	{
	}	
	
        
        function getProvince() {
            return $this->province;
        }

        function setProvince($province) {
            $this->province = $province;
        }

        function getId_user() {
            return $this->id_user;
        }

        function getNom() {
            return $this->nom;
        }

        function getPrenom() {
            return $this->prenom;
        }

        function getType_user() {
            return $this->type_user;
        }

        function getCourriel() {
            return $this->courriel;
        }

        function getNom_organis() {
            return $this->nom_organis;
        }

        function getTelephone() {
            return $this->telephone;
        }

        function getVille() {
            return $this->ville;
        }

        function getCode_postale() {
            return $this->code_postale;
        }

        function getAdresse() {
            return $this->adresse;
        }

        function getPassword() {
            return $this->password;
        }

        function setId_user($id_user) {
            $this->id_user = $id_user;
        }

        function setNom($nom) {
            $this->nom = $nom;
        }

        function setPrenom($prenom) {
            $this->prenom = $prenom;
        }

        function setType_user($type_user) {
            $this->type_user = $type_user;
        }

        function setCourriel($courriel) {
            $this->courriel = $courriel;
        }

        function setNom_organis($nom_organis) {
            $this->nom_organis = $nom_organis;
        }

        function setTelephone($telephone) {
            $this->telephone = $telephone;
        }

        function setVille($ville) {
            $this->ville = $ville;
        }

        function setCode_postale($code_postale) {
            $this->code_postale = $code_postale;
        }

        function setAdresse($adresse) {
            $this->adresse = $adresse;
        }

        function setPassword($password) {
            $this->password = $password;
        }

                        
	public function __toString()
	{
		return "User[".$this->nom.",".$this->prenom.",".$this->courriel."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
	public function loadFromRecord($ligne)
	{
		$this->id_user = $ligne["id_user"];
                $this->nom = $ligne["nom"];
		$this->prenom = $ligne["prenom"];
                $this->type_user = $ligne["type_user"];
                $this->courriel = $ligne["courriel"];
                $this->nom_organis = $ligne["nom_organis"];
                $this->password = $ligne["password"];
	}	
}
?>
