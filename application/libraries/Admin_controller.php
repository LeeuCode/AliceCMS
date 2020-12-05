<?php 

/**
 * 
 */
class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if(is_conn()){
            redirect('install/index/','refresh');
        }

        $this->load->database();
        $this->load->helper(['admin', 'language']);
        $this->load->library('ion_auth');
        $this->lang->load('auth');

        if ( ! $this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if ( ! $this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
    }
}
