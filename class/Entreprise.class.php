<?php

class Entreprise {

    private $raisonsociale;
    private $siret;
    private $salaries=array();
    private $chaises=array();

    /**
     * @param $raisonsociale
     * @param $siret
     */
    function __construct($raisonsociale, $siret)
    {
        $this->raisonsociale = $raisonsociale;
        $this->siret = $siret;
    }

    /**
     * @return mixed
     */
    public function getRaisonsociale() { return $this->raisonsociale; }

    /**
     * @return mixed
     */
    public function getSiret() { return $this->siret; }

    /**
     * @return array
     */
    public function getSalaries()
    {
        $str=null;
        foreach($this->salaries as $salarie){
            $str .= $salarie; //utilise la fonction __toString de salarie.class
        }
        return $str;
    }

    /**
     * @return array
     */
    public function listeChaise()
    {
        $str=null;
        foreach($this->chaises as $chaise){
            $str .= $chaise; //utilise la fonction __toString de chaise.class
        }
        return $str;

    }






    /**
     * @param mixed $raisonsociale
     */
    public function setRaisonsociale($raisonsociale)    {        $this->raisonsociale = $raisonsociale;    }

    /**
     * @param mixed $siret
     */
    public function setSiret($siret)    {        $this->siret = $siret;    }

    /**
     * @param array $salaries
     */
    public function Embauche($s) // fonction setSalarie renommée
    { //  Cette façon d'ajouter un salarié (setteur) indique une RELATION FAIBLE
        $this->salaries[$s->getId()] = $s;
        // Envoier un message
        $s->setEntreprise($this);
    }

    public function Licensie($s)    {        unset($this->salaries[$s->getId()]);    }

    /**
     * @param array $produits
     */
    public function AjouterChaises($libelle, $numero, $prix, $couleur, $nbrpieds)
    { //  Cette façon d'ajouter un produit (setteur) indique une RELATION FORTE
        $this->chaises[] = new chaise($libelle, $numero, $prix, $couleur, $nbrpieds);
    }




    function __toString()
    {
        $str="Raison sociale = ".$this->raisonsociale."<br/>Siret = ".$this->siret;;
        if(count($this->getSalaries())>0){
            $str.= "<br/>".$this->getSalaries()."<br/>";
        }
        if(count($this->listeChaise())>0){
            $str.= "<br/>".$this->listeChaise()."<br/>";
        }
        return $str;
    }


}