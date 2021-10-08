<?php

class Test extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('test', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $rand = $this->input->post('mobile');
                $rand_num = "FLMCLI-".$rand;
                // Logo Upload to file
                $config['file_name']        = $rand_num;
                $config['upload_path']          = './assets/uploads/clients/';
                $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
                $config['max_size']             = 1000;
                $config['max_width']            = 1500;
                $config['max_height']           = 1500;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('test', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
?>