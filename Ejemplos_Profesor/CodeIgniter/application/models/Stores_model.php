<?php

class Stores_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        
        //FA LA CONEXIO
        $this->local->database(); //PER A PODER GASTAR TOTES LES FUNCIONS
       
    }
    
    public function getAllStores() {
        $sql = "SELECT * FROM cq_store ORDER BY store_name";
        
        $query = $this->bd->query($sql);
        if($query->num_rows() > 0){
            
        }
    }
}
