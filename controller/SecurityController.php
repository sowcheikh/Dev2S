<?php
class SecurityController extends Controller{

   public  function __construct(){
      $this->folder="security";
      $this->layout="default";
      $this->validator=new Validator();
    
   }

    public function index(){
        $this->view="login";
         $this->render();

    }
    //Use Case
   public function login(){

      if(isset($_POST['btn_connexion'])){
         extract($_POST);
         $this->dao=new AdminDao();
         //Validation
         $this->validator->isVide($login,"login","Le Login est vide");
         $this->validator->isVide($password,"password","Le Mot de Passe est vide");
         if($this->validator->isValid()){
            $user=$this->dao->findByLoginAndPwd($login,$password);
             if($user!=null){
                //Ajouter dans la session
                  $this->layout="admin";
                  $this->view="login";
                  $this->render();    
               
             }else{
                //User Not Existe
                $this->data_view["error"]="Login Mot de Passe Incorrect";
                $this->index();
             }
           
         }else{
            $this->data_view["error"]= $this->validator->getErrors();
            $this->index();
         }
         
      }else{
         $this->index();
      }
      
   }

   public function logout(){
       
   }

   public function addStudent(){
       
   }



}








