<?php

class MostrarProducto extends CI_Controller {
    private $request;
    
    public function __construct()
             {
                parent::__construct();
                $this->load->model("ProductModel");
                $this->load->helper(array('form','url')); 
                //$this->request = json_decode(file_get_contents('php://input'));
                //$this->init_seccion_auto(9);
            }
    
            public function pedido()
            {
                $resultado = $this->ProductModel->leer();
                echo json_encode($resultado); 
            }

                       
            
           
            
}
    
    



