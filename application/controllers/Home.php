<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
       $data = array(
            'nama' => "Eka Putri",
            'alamat' => "Wendit",
            'email' => "ekaputril@yahoo.com"
        );
    $data["tugas"] =array('Ngoding');
        $this->load->view('Home',$data);
    }

}

/* End of file Home.php */
