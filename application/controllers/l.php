<?php

class L extends CI_Controller {
	 public function __construct()
 {
  parent::__construct();
  $this->load->model('membership_model');
 
 }
	public function index()
	{ 
		// function in codeigniter
    $this->home();
    
   
    
			

	}
	public function v($prob_id)
	{
	

$this->load->helper('url');
	$this->load->model('membership_model');
		$data['viewp'] = $this->membership_model->q_list($prob_id);
	
$this->load->view('header');

		$this->load->view('viewurl.php',$data);
		$this->load->view('footer');
 
		
		
	
}
	
	public function home()
	{	
		
	
		$this->load->view('header');

		$this->load->view('enterurl.php');
		$this->load->view('footer');
		

	}
	
		
		

	
	
	
 public function thank()
 {
  $this->load->model('membership_model');
  $data['thank'] = $this->membership_model->con_list();
  $this->load->view('header');
  $this->load->view('shortened.php',$data);
  $this->load->view('footer');
 }
	public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('urlname', 'Link', 'trim|required|prep_url');
  

  if($this->form_validation->run() == FALSE)
  {
   $this->index();
  }
  else
  {
   $this->membership_model->add_user();
   $this->thank();
  }
 }
	  
	  
	  
}
?>

