<?php


foreach($viewp as $m){ 
    
 
   $this->load->helper('url');
 //redirect($m->urlname);
    header('Location: ' . $m->urlname);  
      
}
?>