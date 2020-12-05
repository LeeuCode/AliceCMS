<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends Admin_controller
{
    public function __construct()
	{
		parent::__construct();

		$this->load->model('member');
    }

    public function index()
    {
        $members = $this->member->pagination('admin/members/index/',4,5,5);
        $data['page_title'] = ' | Team';
        $data['members'] = $members->result();

        $this->load->view('admin/members',$data);
    }

    public function create()
    {
        $data['page_title'] = ' | Create New Member';
        $this->load->view('admin/member-create', $data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {

        $image = $this->input->post('image');
        $socail_icon = $this->input->post('socail_icon');
        $socail_link = $this->input->post('socail_link');

        // Prepare the data for inclusion in the database
        $data['image']       = str_replace(base_url(), '', $image);
        $data['name']        = $this->input->post('name');
        $data['career']      = $this->input->post('career');
        $data['socail_icon'] = serialize($socail_icon);
        $data['socail_link'] = serialize($socail_link);

        $this->member->save($data);

        $this->session->set_flashdata('message', 'sucessful data !');

        redirect_back();

        } else {
            show_404();
        }
    }

    public function edit($id)
    {
        $data['member'] = $this->member->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['member']->name;

		if (empty($data['member'])) {
			show_404();
        }

        $this->load->view('admin/member-edit',$data);
    }

    public function update($id)
    {
        $submit = $this->input->post('submit');
        $isset_page = $this->member->where(array('id'=>$id))->row();

        if (isset($submit) && ! empty($isset_page)) {

            $image = $this->input->post('image');
            $socail_icon = $this->input->post('socail_icon');
            $socail_link = $this->input->post('socail_link');

            // Prepare the data for inclusion in the database
            $data['image']       = str_replace(base_url(), '', $image);
            $data['name']        = $this->input->post('name');
            $data['career']      = $this->input->post('career');
            $data['socail_icon'] = serialize($socail_icon);
            $data['socail_link'] = serialize($socail_link);

            $this->member->update($data,$id);

            $this->session->set_flashdata('message', 'sucessful data !');

            redirect_back();

        } else {
            show_404();
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->member->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->member->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}
}
