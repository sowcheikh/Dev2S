<?php

class RoomController extends Controller {

    public function saveRoom(){
        $this->view="saveRoom";
        $this->folder="layout";
        $this->layout="default";
         $this->render();

    }

    public function addRoom() {
        $resp =[];
        if (isset($_POST['numch']) && isset($_POST['numbat']) && isset($_POST['type'])) {
            extract($_POST);
            $this->dao=new ChambreDao();
            //validation
            $this->validator=new Validator();

            $this->validator->isVide($numch,"numch","Le numéro de chambre est vide");
            $this->validator->isVide($numbat,"numbat","Le numéro de batiment est vide");
            $this->validator->isVide($type,"type","Le type de chambre est vide");
            if ($this->validator->isValid()) {
                $add=$this->dao->add($_POST);
               if ($add >0) {
                $resp = ["type" => "success", "message" =>"la chambre a été bien enregitré"];
               } else {
                $resp = ["type" => "danger", "message" =>"l'enregistré a échoué"];
               }
               echo json_encode($resp);
            } else {
                $resp = ["statut" => "danger", "message" =>"les données sont invalides"];
                echo json_encode($resp);
            }

        }
    }

    public function listRoom() {

    }
}