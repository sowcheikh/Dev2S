<?php
class EtudiantDao extends Manager
{


    public function __construct()
    {
        $this->tableName = "etudiants";
        $this->className = "Etudiant";
    }
    public function add($obj)
    {
        $matricule = $obj->getMatricule();
        $prenom = $obj->getPrenom();
        $nom = $obj->getNom();
        $type = $obj->getType();
        $email = $obj->getEmail();
        $phone = $obj->getPhone();
        $date = $obj->getDatenaissance();
        $bourse = null;
        $numch = null;
        if ($type === "Boursier_Logé") {
            $bourse = $obj->getBourse();
            $numch = $obj->getNumch();
        } else {
            if ($type === "NonBoursier") {
                $adresse = $obj->getAdresse();
            } else {
                $bourse = $obj->getBourse();
            }
        }
        $sql = "INSERT INTO $this->tableName (`matricule`,`prenom`,`nom`, `email`,`phone`,`datenaissance`,`adresse`,`type`,`numch`,`bourse`) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $this->addEtudiant($sql, $matricule, $prenom, $nom, $email, $date, $adresse, $phone, $type, $numch, $bourse);
    }
    public function update($obj)
    {
        $sql= "UPDATE users SET nom = :nom, prenom = :prenom WHERE id = :id";
        $this->executeUpdate($sql)!=0;

    }

    public function delete($id)
    {

        $sql="delete from $this->tableName where id=$id";
         $this->executeUpdate($sql)!=0;
    }
    public function findByMatricule($matricule)
    {
        $sql = "select * from $this->tableName where matricule=$matricule ";
        $data = $this->executeSelect($sql);
        return count($data) == 1 ? $data[0] : $data;
    }
    public function findByNumch($numch)
    {
        $sql = "select * from $this->tableName where numch=$numch ";
        $data = $this->executeSelect($sql);
        return count($data) == 1 ? $data[0] : $data;
    }

}
