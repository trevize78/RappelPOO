<?php
/**
 * Created by PhpStorm.
 * User: Admin Stagiaire
 * Date: 25/08/14
 * Time: 10:09
 */

class Produit {

    private $libelle;
    private $prix;
    private $numero;

    /* constructeur
    -------------*/
    public function __construct($libelle, $prix, $numero){
        $this->libelle 	= $libelle;
        $this->prix 	= $prix;
        $this->numero	= $numero;
    }

    /* Accesseur
    ----------*/
    public function getLibelle(){ return $this->libelle; }
    public function getPrix()   { return $this->prix; }

    /* Setteurs
    ---------*/
    public function setLibelle($libelle){
        $this->libelle = $libelle;
        //return $this;
    }

    public function setPrix($prix){
        $this->prix = $prix;
        //return $this;
    }

    /* méthodes d'instance
    --------------------*/

} 