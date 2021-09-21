<?php

    class ProductModel extends CI_Model{
       //  public $table = "posts";
       // public $table_id = "post_id";
        public function __construct(){
            $this->load->database();
        }
        
       public function registro($UPC, $product_name, $product_price, $sale_price, $product_amount, $product_category_id, $product_image, $type_image) 
        {
         return $this->db->insert("product",["UPC"=>$UPC,"product_name"=>$product_name,"product_price"=>$product_price, "sale_price"=> $sale_price,
                                            "product_amount"=> $product_amount, "product_category_id"=>$product_category_id, 
                                            "product_image"=> $product_image, "type_image"=>$type_image]);   
        }
        
        public function editarProducto($UPC, $product_name, $product_price, $sale_price, $product_amount, $product_category_id, $product_image, $type_image) 
        {  
         return $this->db->replace("product",["UPC"=>$UPC,"product_name"=>$product_name,"product_price"=>$product_price, "sale_price"=> $sale_price,
                                            "product_amount"=> $product_amount, "product_category_id"=>$product_category_id, 
                                            "product_image"=> $product_image, "type_image"=>$type_image]); 
         
        }
        
        public function leer()
        {
            $this->db-> select();
            $this->db-> from ('product');
            $query = $this->db->get();
            return $query-> result();
        }
        
        public function leerProducto($UPC)
        {
        
            $this->db-> select();
            $this->db-> from ('product');
            $this->db-> where ('UPC',$UPC);   
            $query = $this->db->get();
            return $query-> row();
        }
        
        public function eliminarProducto($UPC)
        {
            $this->db->where('UPC', $UPC);
            return $this->db->delete('product');
        }
        
    }
