<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolios_categories extends Admin_controller
{

    public function __construct()
	{
		parent::__construct();

		$this->load->model('portfolio_category');
    }

    public function index()
    {
        $data['page_title'] = ' | Portfolio Categories';
        $config['join_type'] = 'left';
        $config['join_table'] = 'portfolios';
        $config['join_cols'] = 'COUNT(portfolios.id) AS categoryCount';
        $config['join_key'] = 'category_id';
        $config['group_by'] = $this->db->group_by('portfolio_categories.id');

        $categories = $this->portfolio_category->join($config);
        $data['categories'] = $categories->result();

        $this->portfolio_category->pagination('admin/portfolios_categories/index/',4);
        
        $this->load->view('admin/portfolios-categories', $data);
    }

    public function store()
    {
        // Prepare the data for inclusion in the database
        $data['category_name'] = $this->input->post('category_name');
        $this->session->set_flashdata('message', 'sucessful Update data !');

        $this->portfolio_category->save($data);

        redirect_back();
    }

    public function edit($id)
    {
        $data['portfolio_cat'] = $this->portfolio_category->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['portfolio_cat']->category_name;

		if (empty($data['portfolio_cat'])) {
			show_404();
        }

        $this->load->view('admin/portfolio-category-edit', $data);
    }

    public function update($id)
    {
        $submit = $this->input->post('submit');
		$isset_page = $this->portfolio_category->where(array('id'=>$id))->row();

		if ( isset($submit) && ! empty($isset_page) ) {
            // Prepare the data for inclusion in the database
            $data['category_name'] = $this->input->post('category_name');

            $this->portfolio_category->update($data, $id);

            $this->session->set_flashdata('message', 'sucessful data !');
            
            redirect_back();
            
        } else {
            show_404();
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->portfolio_category->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->portfolio_category->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}
    
    
}
