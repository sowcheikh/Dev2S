<?php

class Chambre {
    protected $numch;
    protected $numbat;
    protected $type;

    

    /**
     * Get the value of numch
     */ 
    public function getNumch()
    {
        return $this->numch;
    }

    /**
     * Set the value of numch
     *
     * @return  self
     */ 
    public function setNumch($numch)
    {
        $this->numch = $numch;

        return $this;
    }

    /**
     * Get the value of numbat
     */ 
    public function getNumbat()
    {
        return $this->numbat;
    }

    /**
     * Set the value of numbat
     *
     * @return  self
     */ 
    public function setNumbat($numbat)
    {
        $this->numbat = $numbat;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}