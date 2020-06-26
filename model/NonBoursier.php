<?php

class NonBoursier extends Etudiant {
    protected $address;

    public function __construct()
    {
        $this->type = 'non boursier';
    }

    public function setType($type)
    {
       
    }
    

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}