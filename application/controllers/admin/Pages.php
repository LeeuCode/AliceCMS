<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Admin_controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('page');
	}

	public function index()
	{	
		$page = $this->page->pagination('admin/pages/index/',4);

		$data['page_title'] = ' | Pages';
		$data['pages'] = $page->result();

		$this->load->view('admin/pages', $data);
	}
		
	public function create()
	{
		$data['page_title'] = ' | Create New Page';
		$this->load->view('admin/page-create', $data);
	}
	
	public function store()
	{
		$submit = $this->input->post('submit');
		
		if (isset($submit)) {

			$banner    = $this->input->post('banner');
			$thumbnail = $this->input->post('thumbnail');
			
			$data['banner']           = str_replace(base_url(), '', $banner);
			$data['layout']           = $this->input->post('layout');
			$data['title']            = $this->input->post('title');
			$data['slug']             = url_title($data['title']);
			$data['thumbnail']        = str_replace(base_url(), '', $thumbnail);
			$data['content']          = $this->input->post('content');
			$data['meta_keywords']    = $this->input->post('meta_keywords');
			$data['meta_description'] = $this->input->post('meta_description');

			$this->page->save($data);

			$this->session->set_flashdata('message', 'sucessful data !');
			
			redirect_back();

		} else {
			show_404();
		}
	}

	public function edit($id)
	{
		$data['page'] = $this->page->where(array('id'=>$id))->row();

		$data['page_title'] = ' | Edit ('.$data['page']->title.')';

		if (empty($data['page'])) {
			show_404();
		}

		$this->load->view('admin/page-edit',$data);
	}

	public function update($id)
	{
		$submit = $this->input->post('submit');
		$isset_page = $this->page->where(array('id'=>$id))->row();

		if ( isset($submit) && ! empty($isset_page) ) {

			$banner    = $this->input->post('banner');
			$thumbnail = $this->input->post('thumbnail');
			
			$data['banner']           = str_replace(base_url(), '', $banner);
			$data['layout']           = $this->input->post('layout');
			$data['title']            = $this->input->post('title');
			$data['slug']             = url_title($data['title']);
			$data['thumbnail']        = str_replace(base_url(), '', $thumbnail);
			$data['content']          = $this->input->post('content');
			$data['meta_keywords']    = $this->input->post('meta_keywords');
			$data['meta_description'] = $this->input->post('meta_description');

			$this->session->set_flashdata('message', 'sucessful Update data !');

			$this->page->update($data, $id);

			redirect_back();

		} else {
			show_404();
		}
	}

	public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->page->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->page->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}
}
