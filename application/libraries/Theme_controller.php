<?php

/**
 * 
 */
class Theme_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(is_conn()){
            redirect('install/index/','refresh');
        }

		$this->load->helper('theme');
		$this->load->database();
    }
}