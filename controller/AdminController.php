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
    public function search($obj)
    {
        
        $matricule = $obj->getMatricule();
        $type = $obj->getType();
        $bourse = null;
        $numch = null;
        if (isset($_POST['rechercher'])) {
            extract($_POST);
            $this->dao=new EtudiantDao();
            if (isset($_POST['select'])) {
                //validation
            $this->validator->isVide($select,"select","veuillez choisir une option");
            $this->validator->isVide($myInput,"myInput","veuillez enter votre recherche");
            if ($this->validator->isValid()) {
               if ($_POST['select']=='matricule') {
                return $this->dao->findByMatricule($matricule);
               } elseif ($_POST['select']=='numch') {
                return $this->dao->findByNumch($numch);
               } elseif ($_POST['select']=='loge') {
                /////////
               } elseif ($_POST['select']=='non_loge') {
                   # code...
               } else {
                   echo 'ce choix n\'existe pas!!';
               }
            }
            }
        }
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
        if(isset($_POST["action"]))
        {
        $this->dao = new EtudiantDao;
      $data =  $this->dao->findAll();
      $output = '';
      $output .= '
      <table class="table overflow-auto" id="myTable">
  <thead class="thead-light">
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
      <td>'.$row->getPrenom().'</td>
      <td>'.$row->getNom().'</td>
      <td>'.$row->getEmail().'do</td>
      <td>'.$row->getPhone().'</td>
      <td>'.$row->getDatenaissance().'</td>
      <td><button type="button" id="'.$row->getId().'" class="btn btn-secondary btn-xs update">Modifier</button></td>
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
    }

    public function updateStudent() {
        $this->view="student";
        if(isset($_POST["action"])) //Check value of $_POST["action"] variable value is set to not
{
        $this->dao = new EtudiantDao;
        
        if($_POST["action"] == "Modifier")
        {
            $data =  $this->dao->update($objet=null);
            if(!empty($data))
            {
             echo 'Données mises à jour';
            }
         
        }
    }
    }

    public function deleteStuent(){
        $this->view="student";
        if(isset($_POST["action"])) //Check value of $_POST["action"] variable value is set to not
{
        $this->dao = new EtudiantDao;
        if($_POST["action"] == "Supprimer")
        {
            $data =  $this->dao->delete($obj=null);
         if(!empty($data))
         {
          echo 'Données supprimées';
         }
        }
    }
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