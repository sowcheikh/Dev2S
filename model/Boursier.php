<?php

class Boursier extends Etudiant {
    protected $montant;

    public function __construct()
    {
        $this->type = 'boursier';
    }

    public function setType($type)
    {
       
    }

    
    

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }
}