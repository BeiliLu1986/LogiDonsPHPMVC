<?php

require_once './modele/UserDAO.class.php';
require_once './modele/classes/User.php';

class GereUser {
    public static function connexion() {
        $c =$_REQUEST['username'];
        $m =$_REQUEST['motDePasse'];
        $resultat = TRUE;
        if ($c == "") {
            $_REQUEST["messages"]["username"] = "username obligatoire";
            $resultat = FALSE;
        }
        if ($m == "") {
            $_REQUEST["messages"]["motDePasse"] = "Mot de passe obligatoire";
            $resultat = FALSE;
        }
        if ($resultat) {            
            $dao = new UserDAO();
            $u = $dao->findUser($c);
            if ($u == NULL) {                
                $_REQUEST["messages"]["username"] = "Utilisateur inexistant";
                $resultat = FALSE;
            }
            elseif ($u->getMotDePasse() != $m) {
                $_REQUEST["messages"]["motDePasse"] = "Mot de passe incorrect";
                $resultat = FALSE;
            }
            else {
                if (!ISSET($_SESSION)) {
                    session_start();
                }
                $_SESSION["connected"] = $c;
            }
        }
        return $resultat;
    }
    
    public static function getMessage($champ) {
        if (ISSET($_REQUEST["messages"][$champ]))
            return $_REQUEST["messages"][$champ];
        return "";
    }
}
