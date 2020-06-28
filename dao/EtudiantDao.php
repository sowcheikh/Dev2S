<?php
class EtudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiants";
        $this->className="Etudiant";
    }
    public function add($obj){
        $sql="";
       return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){

    }
    
   





}