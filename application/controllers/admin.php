<?php

class admin extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url')); 
        $this->init_seccion_auto(9);
    }
       
    public function index(){
        $this->load->view("header");
        $this->load->view("tables");
        $this->load->view("footer");
    }
    
   // public function list(){
   //     $this->load->view("admin/post/list");
   // }
    
}
