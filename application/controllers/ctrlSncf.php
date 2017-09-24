<?php
class CtrlSncf extends CI_Controller{
 public function index(){
     
    $data['activite'] = "Les Activités";
    $this->load->model("Model_Activite");
    $data['lesActivites'] = $this->Model_Activite->getAllActivite();
    $this->load->view("v_sncf", $data);
     
     
 }   
  public function AfficherLesFormations()
    {
     
        $Activite = $this->uri->segment(3);
        $this->load->model("Model_formation");
        $data['lesFormations'] = $this->Model_formation->getAllFormations($Activite);
        $this->load->view("v_formation", $data);
        
    }
   
    
    
    
    
}