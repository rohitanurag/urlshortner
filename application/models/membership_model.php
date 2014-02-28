<?php
class Membership_model extends CI_Model{
	 public function __construct()
 {
  parent::__construct();
 }
	
function con_list() {
   // query in database
// $this->db->order_by("score", "desc"); 
$this->db->select_max('id');
return $query = $this->db->get('membership')->result();
    
   
   
}

function q_list($idofp) {
   // query in database
// $this->db->order_by("score", "desc"); 
$this->db->where('id', $idofp); 
    
   return $query = $this->db->get('membership')->result(); //table name members
   
}




/*function getrank() {
   // query in database
 $this->db->order_by("score", "desc"); 

   return $query = $this->db->get('ranking')->result(); //table name members
   
}


function getstatus() {
   // query in database
  

   return $query = $this->db->get('status')->result(); //table name members
   }
   */

public function add_user()
 {
  $data=array(
    'urlname'=>$this->input->post('urlname'),
    
  );
  $this->db->insert('membership',$data);
  
 }





}