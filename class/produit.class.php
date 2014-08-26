<?php

class Produit {

    // protected permet d'utiliser les variables par la classe fille sous forme $this->$libelle
    protected $libelle;
    protected $prix;
    protected $numero;
    private $entreprise='';

    const TVA=20;   //la constante est toujours en MAJUSCULE

   function __construct($libelle="", $numero=0, $prix=0)
    {
        $this->libelle = $libelle;
        $this->numero = $numero;
        $this->prix = $prix;
    }

    /****************************************************************
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /*****************************************************************
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        return $this; // Pas obligatoire mais utile pour l'écriture dans le .php
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise->getRaisonsociale();
    }

    /*****************************************************************
    méthode de class
    -------------------*/
    public function getPrixTTC(){
        $prixTTC = $this->prix + ($this->prix * self::TVA/100);
        return $prixTTC;
    }

    public function __toString(){ // permet d'afficher la classe
        return "libelle = ".$this->libelle."<br/>prix = ".$this->prix;

/*
        //return "j'affiche mon instance<br/>";
        $a="";
        // liste les variables et leur valeur
        foreach ($this as $attrib=>$value){
            $a.=$attrib." ==> ".$value."<br/>";
        }
        // Liste les fonctions
        foreach (get_class_methods($this) as $method_name) {
            $a.="$method_name<br/>";
        }
        return $a;
*/
    }
}