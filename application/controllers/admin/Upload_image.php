<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Upload_image extends CI_Controller {
 
 
    /**
    * Constructor of Controller
    *
    * @return Response
   */
    public function __construct() {
        parent::__construct();
        $this->load->model('upload_model');
    }
    function index(){
      $this->load->view('preview');
    }
 
    function image_upload()  
 {  
    $this->load->view('image_upload');  
 }  
 
    function ajax_upload()  
    {  
    if(isset($_FILES["file"]["name"]))  
    {  
 $config['upload_path'] = './assets/images';  
 $config['allowed_types'] = 'jpg|jpeg|png|gif';  
 $this->load->library('upload', $config);  
 if(!$this->upload->do_upload('file'))  
 {  
 echo $this->upload->display_errors();  
 }  
 else  
 {  
 $data = array('upload_data' => $this->upload->data());
 
 $title= $this->input->post('title');
 $image= $data['upload_data']['file_name']; 
 
 $result= $this->upload_model->save_upload($title,$image);
  
 echo '<img src="'.base_url().'assets/images/'.$image.'" width="300" height="225" class="img-thumbnail" />';  
 }  
    }  
    }  
}
 
?>