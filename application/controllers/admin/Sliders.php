<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sliders extends Admin_controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->model('slider');
    }

    public function index()
    {
        $sliders = $this->slider->pagination('admin/sliders/index/',4,5,6);
        $data['page_title'] = ' | Sliders';
        $data['sliders'] = $sliders->result();

        $this->load->view('admin/sliders',$data);
    }

    public function create()
    {
        $data['page_title'] = ' | Create New Slider';
        $this->load->view('admin/slider-create', $data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {

            $image = $this->input->post('image');

            $data['image']    = str_replace(base_url(), '', $image);
            $data['page_title']    = $this->input->post('title');
            $data['subtitle'] = $this->input->post('subtitle');

            $this->session->set_flashdata('message', 'sucessful save data !');

			$this->slider->save($data);

			redirect_back();
        } else {
            show_404();
        }
    }

    public function edit($id)
    {
        $data['slider'] = $this->slider->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['slider']->title;

		if (empty($data['slider'])) {
			show_404();
        }
        
        $this->load->view('admin/slider-edit',$data);
    }

    public function update($id)
    {
        $submit = $this->input->post('submit');
        $isset_page = $this->slider->where(array('id'=>$id))->row();

		if ( isset($submit) && ! empty(isset_page)) {

			$image = $this->input->post('image');

            $data['image']    = str_replace(base_url(), '', $image);
            $data['page_title']    = $this->input->post('title');
            $data['subtitle'] = $this->input->post('subtitle');

            $this->session->set_flashdata('message', 'sucessful update data !');

			$this->slider->update($data, $id);

			redirect_back();
        } else {
            show_404();
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->slider->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->slider->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}

}