<?php

class DonEmpl {
        private $id_don;
	private $description;
	private $type_don;
        private $status;
        private $nomEmpl;
        private $prenomEmpl;


        public function __construct()	
	{
                
	}
        
        function getId_don() {
            return $this->id_don;
        }

        function getDescription() {
            return $this->description;
        }

        function getType_don() {
            return $this->type_don;
        }

        function getStatus() {
            return $this->status;
        }

        function getNomEmpl() {
            return $this->nomEmpl;
        }

        function getPrenomEmpl() {
            return $this->prenomEmpl;
        }

        function setId_don($id_don) {
            $this->id_don = $id_don;
        }

        function setDescription($description) {
            $this->description = $description;
        }

        function setType_don($type_don) {
            $this->type_don = $type_don;
        }

        function setStatus($status) {
            $this->status = $status;
        }

        function setNomEmpl($nomEmpl) {
            $this->nomEmpl = $nomEmpl;
        }

        function setPrenomEmpl($prenomEmpl) {
            $this->prenomEmpl = $prenomEmpl;
        }

                                                
        public function __toString()
	{
		return "".$this->type_don.",".$this->description.",".$this->nomEmpl.",".$this->prenomEmpl."]";
	}
        public function affiche()
	{
		echo $this->__toString();
	}
        public function loadFromRecord($donEmp)
	{
                $this->id_don = $donEmp["id_don"];
                $this->type_don = $donEmp["type_don"];
		$this->description = $donEmp["description"];
                $this->status=$donEmp["status"];
                $this->nomEmpl = $donEmp["nom"];
                $this->prenomEmpl=$donEmp["prenom"];
	}
}
?>