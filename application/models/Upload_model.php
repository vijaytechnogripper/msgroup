
<?php
class Upload_model extends CI_Model{
 
    function save_upload($title,$image){
        $data = array(
                'title' => $title,
                'image' => $image
            );  
        $result= $this->db->insert('msg_products',$data);
        return $result;
    }     
}
?>