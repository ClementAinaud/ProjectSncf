<?php
class Model_Activite extends CI_Controller{
    
    public function getAllActivite(){
        
      $sql = $this->db->query("Select * from activite");
      return $sql -> result();
        
        
    }
    
    
    
    
    
}