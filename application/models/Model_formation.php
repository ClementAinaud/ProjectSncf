<?php

class Model_formation  extends CI_Model {
    public function getAllFormation(){
        $sql = $this->db->query("select * from formation");
    return $sql->result();
    }
    public function GetFormationById($id)
    {
        $sql = $this->db->query("select * from formation where numeroActivite = ",$id);

        return $sql->result(); 
    }
   
}
