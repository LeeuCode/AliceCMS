<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
    }
	
	public function index()
	{
        if (!is_conn()) {
            redirect('');
        }

        $data['pageTitle'] = "Install | System Requirement";

        $this->load->view('install/step-one', $data);
    }

    public function step_two()
	{
        if (!is_conn()) {
            redirect('');
        }

        $data['pageTitle'] = "Install | Database Installation";

        $this->load->view('install/step-two', $data);
    }

    public function save_stepTwo()
    {
        require_once APPPATH.'views/install/init.php';
        
        
        if (isset($_POST['submit'])) {
            // Setting up the time zone
            // $data['timezoine'] = $_POST['timezoine'];
        
            // Host Name
            $data['serverName'] = $_POST['serverName'];
        
            // Database UserName
            $data['userName'] = $_POST['userName'];
        
            // Database Password
            $data['password'] = $_POST['password'];
        
            // Database Name
            $data['dbName'] = $_POST['dbName'];
        
            // Connection to databse
            try {
                $conn = new PDO('mysql:host='.$data['serverName'].';dbname='.$data['dbName'], $data['userName'], $data['password']);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $getConfigFile = file_get_contents($init['configFile']);
        
                include $init['configFile'];
        
                $dataReplacer = [
                    // $timezoine,
                    $db['default']['hostname'],
                    $db['default']['username'],
                    $db['default']['password'],
                    $db['default']['database']
                ];
        
                $fileReplace = str_replace($dataReplacer, $data, $getConfigFile);
        
                file_put_contents($init['configFile'], $fileReplace);
        
                $databaseFile = file_get_contents($init['databaseFile']);
        
                // var_dump($databaseFile);

                $conn->query($databaseFile);
        
                $_SESSION['wizard'] = true;
        
                redirect('install/step_three/');
            } catch (PDOException $e) {
                show_404();
                die();
            }//end try
        }//end if
    }

    public function step_three()
    {
        if (is_conn()) {
            redirect('');
        }
        
        if(!$_SESSION['wizard'])
        {
            redirect('install/step_two/');
        }

        $data['pageTitle'] = "Install | Database Installation";

        $this->load->view('install/step-three', $data);

    }

    public function save_stepThree()
    {

        $this->load->database();

        if (isset($_POST['submit'])) {
            // $stmt This is a select setting row.
            $stmt = $this->db->query('SELECT * FROM settings');
        
            // $setting Return setting row as object.
            $setting = $stmt->row();
        
            $id  = $setting->id;
            $data['site_name'] = $this->input->post('site_name');
            $data['meta_keywords']  = $this->input->post('meta_keywords');
            $data['meta_description']  =$this->input->post('meta_description');

            $this->db->where('id', $id);
            $this->db->update('settings', $data);
    
            // Return message if data insert success.
            redirect('install/step_four/');
            
        }//end if
    }

    public function step_four()
    {
        if(!$_SESSION['wizard'])
        {
            redirect('install/step_two/');
        }

        $data['pageTitle'] = "Install | Congratulations";


        $this->load->view('install/step-four', $data);
    }
}
