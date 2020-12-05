<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Services
 *
 * @package     Alice CMS
 * @author      LeeuCode
 * @link        http://example.com
 */
class Services extends Admin_controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->model('service');
    }

    public function index()
    {
        $servies = $this->service->pagination('admin/services/index/',4,5,5);
        $data['services'] = $servies->result();
        $data['page_title'] = ' | Services';

        $this->load->view('admin/services', $data);
    }

    public function create()
    {
        $data['page_title'] = ' | Create New Service';
        $this->load->view('admin/service-create', $data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {

            $image = $this->input->post('image');

            // Prepare the data for inclusion in the database
            $data['icon']              = $this->input->post('icon');
            $data['image']             = str_replace(base_url(), '', $image);
            $data['name']              = $this->input->post('name');
            $data['short_description'] = $this->input->post('short_description');
            $data['content']           = $this->input->post('content');
            $data['meta_keywords']     = $this->input->post('meta_keywords');
            $data['meta_description']  = $this->input->post('meta_description');

            $this->session->set_flashdata('message', 'sucessful data !');

			$this->service->save($data);

			redirect_back();
        } else {
            show_404();
        }
    }

    public function edit($id)
    {
        $data['service'] = $this->service->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['service']->name;

		if (empty($data['service'])) {
			show_404();
        }
        
        $this->load->view('admin/service-edit',$data);
    }

    public function update($id)
    {
        $submit = $this->input->post('submit');
        $isset_page = $this->service->where(array('id'=>$id))->row();
        
		if (isset($submit) && $isset_page) {
            $image = $this->input->post('image');

            // Prepare the data for inclusion in the database
            $data['icon']              = $this->input->post('icon');
            $data['image']             = str_replace(base_url(), '', $image);
            $data['name']              = $this->input->post('name');
            $data['short_description'] = $this->input->post('short_description');
            $data['content']           = $this->input->post('content');
            $data['meta_keywords']     = $this->input->post('meta_keywords');
            $data['meta_description']  = $this->input->post('meta_description');

            $this->session->set_flashdata('message', 'sucessful update data !');

			$this->service->update($data,$id);

			redirect_back();
        } else {
            show_404();
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->service->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->service->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}

}