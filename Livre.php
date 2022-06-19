
<?php

class Livre
 
{
    private string $_titre;
    private int $_anneeDeParution;
    private int $_nbPages;
    private float $_prix;
    private Auteur $_auteur;
    
    public function __construct(string $titre, int $anneeDeParution, int $nbPages, float $prix, Auteur $auteur){
        $this -> _titre = $titre;
        $this -> _anneeDeParution = $anneeDeParution;
        $this -> _nbPages = $nbPages;
        $this -> _prix = $prix;
        $this -> _auteur = $auteur;
        $this -> _auteur -> ajouterLivre($this);
    }

    public function getTitre() {
        return $this -> _titre;
    }
    public function getAnneeDeParution() {
        return $this -> _anneeDeParution;
    }
    public function getNbPages() {
        return $this -> _nbPages;
    }
    public function getPrix() {
        return $this -> _prix;
    }

    public function setTitre($titre) {
        $this -> _titre = $titre;
    }
    public function setAnneeDeParution($anneeDeParution) {
        $this -> _anneeDeParution = $anneeDeParution;
    }
    public function setNbPages($nbPages) {
        $this -> _nbPages = $nbPages;
    }
    public function setPrix($prix) {
        $this -> _prix = $prix;
    }
    
    public function __toString() {
        return "<p>" 
                .$this -> _titre . " (" . $this -> _anneeDeParution . ") : " 
                .$this -> _nbPages . " pages / " . $this -> _prix . " € 
                </p>";
    }   
}


?>