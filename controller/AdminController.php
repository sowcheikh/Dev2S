<?php

class AdminController extends Controller {

    public  function __construct(){
        $this->folder="layout";
        $this->layout="admin";
        $this->validator=new Validator();
      
     }
    public function listRoom() {
        $this->view="listRoom";
         $this->render();
    }

    public function addRoom() {
        $resp =[];
        if (isset($_POST['numch']) && isset($_POST['numbat']) && isset($_POST['type'])) {
            extract($_POST);
            $this->dao=new ChambreDao();
            //validation
            $this->validator->isVide($numch,"numch","Le numéro de chambre est vide");
            $this->validator->isVide($numbat,"numbat","Le numéro de batiment est vide");
            $this->validator->isVide($type,"type","Le type de chambre est vide");
            if ($this->validator->isValid()) {
                $add=$this->dao->add($_POST);
               if ($add >0) {
                $resp = ["type" => "success", "message" =>"la chambre a été bien enregistré"];
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

    public function listStudent() {
        $this->view="student";
         $this->render();
    }
    public function showStudent() {
        $this->dao = new EtudiantDao;
      $data =  $this->dao->findAll();
      $output = '';
      $output .= '
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
      ';
      if(!empty($data))
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
      <th scope="row">'.$row->getMatricule().'</th>
      <td>'.$row->getNom().'</td>
      <td>'.$row->getPrenom().'</td>
      <td>'.$row->getEmail().'do</td>
      <td>'.$row->getPhone().'</td>
      <td>'.$row->getDatenaissance().'</td>
      <td><button type="button" id="'.$row->getId().'" class="btn btn-primary btn-xs update">Modifier</button></td>
      <td><button type="button" id="'.$row->getId().'" class="btn btn-danger btn-xs delete">Supprimer</button></td>
    </tr>
        ';
       }
      }
      else
      {
       $output .= '
        <tr>
         <td align="center">Data not Found</td>
        </tr>
       ';
      }
      $output .= '  </tbody>
      </table>';
      echo $output;
    }

    public function saveStudent() {
        $this->view="saveStudent";
         $this->render();
    }
    public function saveRoom() {
        $this->view="saveRoom";
         $this->render();
    }
    public function numBat() {
        function random_1($car){
            $string = "";
            $chaine = "0123456789";
            srand((double)microtime()*1000000);
            for($i=0; $i<$car; $i++) {
                $string .= $chaine[rand()%strlen($chaine)];
            }
            return $string;
        }
        $serieNombre =  random_1(4);
    }

}