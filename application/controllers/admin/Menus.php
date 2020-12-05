<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends Admin_controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->model('menu');
    }
    
    public function index()
    {
        $config['join_type'] = 'left';
        $config['join_table'] = 'pages';
        $config['join_cols'] = 'pages.title';
        $config['primiry_key'] = 'page_id';
        $config['limit'] = 10;
        $config['offset'] = $this->uri->segment(4);
        $config['order_by'] = $this->db->order_by('menus.menu_order');

        // $config['group_by'] = $this->db->group_by('id');

        $data['page_title'] = ' | Menus';
        $data['menus'] = $this->menu->join($config)->result();

        $this->menu->pagination('admin/menus/index/',4,5,10);
        
        $this->load->view('admin/menus', $data);
    }

    public function create()
    {
        $this->load->model('page');

        $config['join_type'] = 'left';
        $config['join_table'] = 'pages';
        $config['join_cols'] = 'pages.title';
        $config['primiry_key'] = 'page_id';

        $data['page_title'] = ' | Create New Menu';
        $data['menus'] = $this->menu->join($config)->result();
        $data['pages'] = $this->page->get()->result();

        $this->load->view('admin/menu-create',$data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {

            $menu_header = $this->input->post('menu_header');
            $menu_one = $this->input->post('menu_one');
            $menu_two = $this->input->post('menu_two');

            // Prepare the data for inclusion in the database
            $data['menu_type']   = $this->input->post('menu_type');
            $data['menu_name']   = $this->input->post('menu_name');
            $data['menu_url']    = $this->input->post('menu_url');
            $data['menu_parent'] = $this->input->post('menu_parent');
            $data['menu_order']  = $this->input->post('menu_order');
            $data['menu_header'] = isset($menu_header) ? $menu_header : 0;
            $data['menu_one']    = isset($menu_one) ? $menu_one : 0;
            $data['menu_two']    = isset($menu_two) ? $menu_two : 0;
            $data['page_id']     = $this->input->post('page_id');

            $this->session->set_flashdata('message', 'sucessful save data !');

			$this->menu->save($data);

			redirect_back();

        } else {
			show_404();
		}
    }

    public function edit($id)
    {
        // $menu_title 
        $data['menu'] = $this->menu->where(array('id'=>$id))->row();
        $menu_title = ( $data['menu']->menu_type == 'Standard' ) ? $data['menu']->menu_name : 'Edit Menu';
        $data['page_title'] = ' | ' . $menu_title;

		if (empty($data['menu'])) {
			show_404();
        }
        
        $this->load->model('page');

        $config['join_type'] = 'left';
        $config['join_table'] = 'pages';
        $config['join_cols'] = 'pages.title';

        $data['menus'] = $this->menu->join($config)->result();
        $data['pages'] = $this->page->get()->result();

		$this->load->view('admin/menu-edit',$data);
    }

    public function update($id)
    {
        $isset_page = $this->menu->where(array('id'=>$id))->row();

        $submit = $this->input->post('submit');
		
		if (isset($submit) && ! empty($isset_page)) {

            $menu_header = $this->input->post('menu_header');
            $menu_one = $this->input->post('menu_one');
            $menu_two = $this->input->post('menu_two');

            // Prepare the data for inclusion in the database
            $data['menu_type']   = $this->input->post('menu_type');
            $data['menu_name']   = $this->input->post('menu_name');
            $data['menu_url']    = $this->input->post('menu_url');
            $data['menu_parent'] = $this->input->post('menu_parent');
            $data['menu_order']  = $this->input->post('menu_order');
            $data['menu_header'] = isset($menu_header) ? $menu_header : 0;
            $data['menu_one']    = isset($menu_one) ? $menu_one : 0;
            $data['menu_two']    = isset($menu_two) ? $menu_two : 0;
            $data['page_id']     = $this->input->post('page_id');

            $this->session->set_flashdata('message', 'sucessful save udate !');

			$this->menu->update($data, $id);

			redirect_back();

        } else {
			show_404();
		}
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->menu->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->menu->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}

}