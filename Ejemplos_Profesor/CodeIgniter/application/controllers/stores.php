<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stores extends CI_Controller {
    function __construct() {
        parent::__construct();
        
        $this->load->model("Stores_model");
    }
    
    function index(){
        echo "hola";
    }

}

