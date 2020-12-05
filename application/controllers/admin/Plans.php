<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Plans extends Admin_controller 
{
    public function __construct()
	{
		parent::__construct();

		$this->load->model('plan');
    }

	public function index()
	{
        $plans = $this->plan->pagination('admin/plans/index/',4);

        $data['page_title'] = ' | Price Plans';
        $data['plans'] = $plans->result();
		$this->load->view('admin/plans',$data);
    }
    
    public function create()
    {
        $data['page_title'] = ' | Create New Plan';
        $this->load->view('admin/plan-create', $data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
        $plan_items = $this->input->post('plan_items');
        
		if (isset($submit)) {
            // Prepare the data for inclusion in the database
            $data['plan_icon']  = $this->input->post('plan_icon');
            $data['plan_name']  = $this->input->post('plan_name');
            $data['plan_price'] = $this->input->post('plan_price');
            $data['plan_items'] = serialize($plan_items);

            $this->plan->save($data);

            $this->session->set_flashdata('message', 'sucessful data !');

            redirect_back();
        }
    }

    public function edit($id)
    {
        $plan_items = $this->input->post('plan_items');
        $data['plan'] = $this->plan->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['plan']->plan_name;

		if (empty($data['plan'])) {
			show_404();
		}
        
        $this->load->view('admin/plan-edit', $data);
    }

    public function update($id)
    {
        $plan_items = $this->input->post('plan_items');
        $submit = $this->input->post('submit');
        $isset_page = $this->plan->where(array('id'=>$id))->row();
		
		if (isset($submit) && ! empty($isset_page)) {
            $data['plan_icon']  = $this->input->post('plan_icon');
            $data['plan_name']  = $this->input->post('plan_name');
            $data['plan_price'] = $this->input->post('plan_price');
            $data['plan_items'] = serialize($plan_items);

            $this->plan->update($data,$id);

            $this->session->set_flashdata('message', 'sucessful data updated !');

            redirect_back();
        } else {
            show_404();
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->plan->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->plan->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}
}