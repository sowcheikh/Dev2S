<?php
class ChambreDao extends Manager {


    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }
    public function add($obj){
        $sql= "INSERT INTO $this->tableName(numch, numbat, type) values(:numch, :numbat, :type)";
       return $this->executeUpdate($sql, $obj);
    }
    public function update($obj){
        
    }
   





}