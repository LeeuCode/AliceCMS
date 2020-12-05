<?php 


class Partners extends Admin_controller
{
    public function __construct()
	{
		parent::__construct();

		$this->load->model('partner');
    }

    public function index()
    {
        $data['page_title'] = ' | Partners';
        $partners = $this->partner->pagination('admin/partners/index',4,5,5);
        $data['partners'] = $partners->result();
        $this->load->view('admin/partners',$data);
    }

    public function create()
    {
        $data['page_title'] = ' | Create New Partner';
        $this->load->view('admin/partner-create', $data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {

            $banner = $this->input->post('banner');

            // Prepare the data for inclusion in the database
            $data['banner']       = str_replace(base_url(), '', $banner);
            $data['partner_name'] = $this->input->post('partner_name');
            $data['partner_link'] = $this->input->post('partner_link');

            $this->partner->save($data);

			$this->session->set_flashdata('message', 'sucessful data !');
			
			redirect_back();

        } else {
            show_404();
        }
    }

    public function edit($id)
    {
        $data['partner'] = $this->partner->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['partner']->partner_name;

		if (empty($data['partner'])) {
			show_404();
        }
        
        $this->load->view('admin/partner-edit',$data);
        
    }

    public function update($id)
    {
        $submit = $this->input->post('submit');
		$isset_page = $this->partner->where(array('id'=>$id))->row();

		if ( isset($submit) && ! empty($isset_page) ) {
            $banner = $this->input->post('banner');

            // Prepare the data for inclusion in the database
            $data['banner']       = str_replace(base_url(), '', $banner);
            $data['partner_name'] = $this->input->post('partner_name');
            $data['partner_link'] = $this->input->post('partner_link');

            $this->partner->update($data,$id);

			$this->session->set_flashdata('message', 'sucessful data update !');
			
			redirect_back(); 
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->partner->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->partner->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}
}
