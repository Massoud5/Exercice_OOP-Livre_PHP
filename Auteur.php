
<?php


class Auteur 

{
    private string $_prenom;
    private string $_nom;
    private array $_bibliographie;

    public function __construct(string $prenom, string $nom){
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;

        $this -> _bibliographie = [];
    }

    public function ajouterLivre(Livre $livre){
        $this -> _bibliographie[] = $livre;  
    }

    public function afficherBibliographie(){
        $result = $this . 
                  "<ul>";
                    foreach($this -> _bibliographie as $livre){
                        $result .= "<li> $livre </li>";
                    }

        $result .= "</ul>";

        return $result;
    }

    public function getPrenom() {
        return $this -> _prenom;
    }
    public function getNom() {
        return $this -> _nom;
    }

    public function setPrenom($prenom) {
        $this -> _prenom = $prenom;
    }
    public function setNom($nom) {
        $this -> _nom = $nom;
    }

    public function __toString() {
        return "<h1> 
                 Livres de " . $this -> _prenom . " " . $this -> _nom . " 
                </h1><br>";
                
    }
}


?>