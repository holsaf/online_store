<?php


        class Customer extends CI_Controller {
            
           

             public function __construct()
             {
                parent::__construct();
                $this->load->model("CustomerModel");
                $this->load->helper(array('form','url')); 
            }
            
            public function index()
            {
                $resultado = $this->CustomerModel->leer();
                $data = ['title'=>'Clientes','customer' => $resultado];
                $this->load->view("header");
                $this->load->view("Customer/customer",$data);
                $this->load->view("footer");
                
            }

            public function agregar()
            {   
                $title["title"]= "Registrar Clientes";
                $this->load->view("header");
                $this->load->view("Customer/addCustomer",$title);
                $this->load->view("footer");
                
            }
                
            public function registrar()
            {  
                $document_type = $this->input->post("document_type");
                $document_num = $this->input->post("document_num");
                $name_customer = $this->input->post("name_customer");
                $lastname_customer = $this->input->post("lastname_customer");
                $address_customer = $this->input->post("address_customer");

                $resultado = $this->CustomerModel->registro($document_type, $document_num, $name_customer, $lastname_customer, $address_customer);
                if ($resultado)
                {
                    $this->index();
                    
                }
                else
                {
                    $this->agregar();
                    echo "ERROR AL REGISTRAR CLIENTE";
              
                }
                
            }
            
            public function editar($document_num)
            {   
                $resultado = $this->CustomerModel->leerCliente($document_num);
                
                $data=['title'=>"Editar Clientes",'customer'=>$resultado];
                $this->load->view("header");
                $this->load->view("Customer/editCustomer",$data);
                $this->load->view("footer");
                
            }
            
            public function actualizar()
            {
                $document_type = $this->input->post("document_type");
                $document_num = $this->input->post("document_num");
                $name_customer = $this->input->post("name_customer");
                $lastname_customer = $this->input->post("lastname_customer");
                $address_customer = $this->input->post("address_customer");
                
                $resultado = $this->CustomerModel->editarCliente($document_type, $document_num, $name_customer, $lastname_customer, $address_customer);
                if ($resultado)
                {
                    $this->index();
                }
                else
                {
                    $this->index();
                    echo "ERROR AL ACTUALIZAR CLIENTE";
                }
                
            }
            
            public function eliminar($document_num)
            {   
                $resultado = $this->CustomerModel->eliminarCliente($document_num);
                //$resultado = $this->CustomerModel->editarCliente($document_type, $document_num, $name_customer, $lastname_customer, $address_customer);
                if ($resultado)
                {
                    $this->index();
                }
                else
                {
                    $this->index();
                    echo "ERROR AL ELIMINAR CLIENTE";
                }
                
            }
            
            
            
            
           
        }
