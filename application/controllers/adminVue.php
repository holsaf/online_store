<?php

class adminVue extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url')); 
        $this->load->helper(array('form','url')); 
               
    }
       
    public function index(){
        //$this->load->view("spa/header");
        $this->load->view("spa/tables");
        //$this->load->view("spa/footer");
    }
    
   // public function list(){
   //     $this->load->view("admin/post/list");
   // }
    
}
