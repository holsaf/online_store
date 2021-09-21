<?php

    class CustomerModel extends CI_Model{
       //  public $table = "posts";
       // public $table_id = "post_id";
        public function __construct(){
            $this->load->database();
        }
        
        public function registro($document_type, $document_num, $name_customer, $lastname_customer, $address_customer) 
        {
         return $this->db->insert("customer",["document_type"=>$document_type,"document_num"=>$document_num,"name_customer"=>$name_customer, "lastname_customer"=> $lastname_customer,"address_customer"=> $address_customer]);   
        }
        
        public function editarCliente($document_type, $document_num, $name_customer, $lastname_customer, $address_customer) 
        {  
         return $this->db->replace("customer",["document_type"=>$document_type,"document_num"=>$document_num,"name_customer"=>$name_customer, "lastname_customer"=> $lastname_customer,"address_customer"=> $address_customer]);   
        }
        
        public function leer()
        {
            $this->db-> select();
            $this->db-> from ('customer');
            $query = $this->db->get();
            return $query-> result();
        }
        
        public function leerCliente($document_num)
        {
        
            $this->db-> select();
            $this->db-> from ('customer');
            $this->db-> where ('document_num',$document_num);   
            $query = $this->db->get();
            return $query-> row();
        }
        
        public function eliminarCliente($document_num)
        {
            $this->db->where('document_num', $document_num);
            return $this->db->delete('customer');
        }
        
    }
