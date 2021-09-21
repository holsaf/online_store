<?php

class Product extends CI_Controller {
    private $request;
    
    public function __construct()
             {
                parent::__construct();
                $this->load->model("ProductModel");
                $this->load->helper(array('form','url')); 
                $this->request = json_decode(file_get_contents('php://input'));
            }
            
    
            public function index()
            {
                $resultado = $this->ProductModel->leer();
                $data = ['title'=>'Productos','product' => $resultado];
                $this->load->view("header");
                $this->load->view("Product/product",$data);
                $this->load->view("footer");
                
            }
            
            public function recuperarProductos(){
                $resultado = $this->ProductModel->leer();
                echo json_encode($resultado); 
                }

            public function agregar()
            {   
                $title["title"]= "Registrar Productos";
                $this->load->view("header");
                $this->load->view("Product/addProduct",$title);
                $this->load->view("footer");
                
            }
                
            public function registrar()
            {  
                $UPC = $this->input->post("UPC");
                $product_name = $this->input->post("product_name");
                $product_price = $this->input->post("product_price");
                $sale_price = $product_price+ ($product_price*0.2);
                $product_amount = $this->input->post("product_amount");
                $created_date = $this->input->post("created_date");
                $product_category_id = $this->input->post("product_category_id");
                //$image= $this->input->post("image");
                $type_image= $_FILES['image_product']['type'];
                $amount_image= $_FILES['image_product']['size'];
                $image_load= fopen($_FILES['image_product']['tmp_name'],'r');
                $product_image= base64_encode(fread($image_load,$amount_image));
                //echo $product_image;

                $resultado = $this->ProductModel->registro($UPC, $product_name, $product_price,$sale_price, $product_amount, $product_category_id, $product_image, $type_image);
                if ($resultado)
                {
                    $this->index();
                    
                }
                else
                {
                    $this->index();
                    echo "ERROR AL REGISTRAR PRODUCTO";
              
                }
                
            }
            
            public function editar($UPC)
            {   
                $resultado = $this->ProductModel->leerProducto($UPC);
                $data=['title'=>"Editar Productos",'product'=>$resultado];
                $this->load->view("header");
                $this->load->view("Product/editProduct",$data);
                $this->load->view("footer");
                
            }
            
            public function actualizar()
            {
              $UPC = $this->input->post("UPC");
                $product_name = $this->input->post("product_name");
                $product_price = $this->input->post("product_price");
                $sale_price = $product_price+ ($product_price*0.2);
                $product_amount = $this->input->post("product_amount");
                $created_date = $this->input->post("created_date");
                $product_category_id = $this->input->post("product_category_id");
                //$image= $this->input->post("image");
                $type_image= $_FILES['image_product']['type'];
                $amount_image= $_FILES['image_product']['size'];
                $image_load=fopen($_FILES['image_product']['tmp_name'],'r');
                $product_image= base64_encode(fread($image_load,$amount_image));
                //echo $product_image;

                
                $resultado = $this->ProductModel->editarProducto($UPC, $product_name, $product_price,$sale_price, $product_amount, $product_category_id, $product_image, $type_image);
                if ($resultado)
                {
                    $this->index();
                }
                else
                {
                    $this->index();
                    echo "ERROR AL ACTUALIZAR PRODUCTO";
                }
                
            }
            
            public function eliminar($UPC)
            {   
                $resultado = $this->ProductModel->eliminarProducto($UPC);
                //$resultado = $this->CustomerModel->editarCliente($document_type, $document_num, $name_customer, $lastname_customer, $address_customer);
                if ($resultado)
                {
                    $this->index();
                }
                else
                {
                    $this->index();
                    echo "ERROR AL ELIMINAR PRODUCTO";
                }
                
            }
            
            
           
            
}
    
    



