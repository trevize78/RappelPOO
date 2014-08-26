<?php

class Chaise extends Produit {

    private $couleur;
    private $nbrpieds;

    function __construct($libelle, $numero, $prix, $couleur, $nbrpieds)
    {
        parent::__construct($libelle, $numero, $prix);
        $this->couleur = $couleur;
        $this->nbrpieds = $nbrpieds;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @return mixed
     */
    public function getNbrpieds()
    {
        return $this->nbrpieds;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @param mixed $nbrpieds
     */
    public function setNbrpieds($nbrpieds)
    {
        $this->nbrpieds = $nbrpieds;
    }

    public function __toString()
    {
//        $str =  parent::__toString().$this->libelle;  // Peut être utilisée ainsi car déclaré en protected dans classe parent
        $str =  parent::__toString();
        $str.="<br/>couleur = ".$this->couleur."<br/>nombre de pieds = ".$this->nbrpieds;
        return $str;
    }


}