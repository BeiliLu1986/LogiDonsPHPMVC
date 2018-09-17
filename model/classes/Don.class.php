<?php

class Don {
        private $id_don;
	private $donateur;
	private $description;
	private $type_don;
        private $livraison;
        private $date_livr;
        private $quantite;
        private $montant;
        private $status;




        public function __construct()	
	{
                
	}
        
        function getId_don() {
            return $this->id_don;
        }

        function getDonateur() {
            return $this->donateur;
        }

        function getDescription() {
            return $this->description;
        }

        function getType_don() {
            return $this->type_don;
        }

        function getLivraison() {
            return $this->livraison;
        }

        function getDate_livr() {
            return $this->date_livr;
        }

        function getQuantite() {
            return $this->quantite;
        }

        function getMontant() {
            return $this->montant;
        }

        function getStatus() {
            return $this->status;
        }

                function setId_don($id_don) {
            $this->id_don = $id_don;
        }

        function setDonateur($donateur) {
            $this->donateur = $donateur;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setType_don($type_don) {
            $this->type_don = $type_don;
        }

        function setLivraison($livraison) {
            $this->livraison = $livraison;
        }

        function setDate_livr($date_livr) {
            $this->date_livr = $date_livr;
        }

        function setQuantite($quantite) {
            $this->quantite = $quantite;
        }

        function setMontant($montant) {
            $this->montant = $montant;
        }
        
        function setStatus($status) {
            $this->status = $status;
        }

                                        
        public function __toString()
	{
		return "".$this->type_don.",".$this->description.",".$this->date_livr.",".$this->quantite.",".$this->montant.",".$this->donateur."]";
	}
        public function affiche()
	{
		echo $this->__toString();
	}
        public function loadFromRecord($don)
	{
                $this->id_don = $don["id_don"];
		$this->donateur = $don["donateur"];
                $this->type_don = $don["type_don"];
		$this->description = $don["description"];
                $this->livraison = $don["livraison"];
		$this->date_livr = $don["date_livr"];
		$this->quantite = $don["quantite"];
                $this->montant = $don["montant"];
                $this->status=$don["status"];
	}
}
?>