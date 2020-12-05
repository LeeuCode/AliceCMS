<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolios extends Admin_controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('portfolio');
    }
    
	public function index()
	{
		$config['join_type'] = 'left';
        $config['join_table'] = 'portfolio_categories';
        $config['join_cols'] = 'portfolio_categories.category_name';
        $config['primiry_key'] = 'category_id';
        $config['limit'] =  5;
        $config['offset'] = $this->uri->segment(4);
        $config['order_by'] = $this->db->order_by('portfolio_categories.id', 'ASC');

        $data['portfolios'] = $this->portfolio->join($config)->result();
        $data['page_title'] = ' | Portfolios';

        $this->portfolio->pagination('admin/portfolios/index/',4,5,5);

		$this->load->view('admin/portfolio',$data);
    }
    
    public function create()
    {
        $this->load->model('portfolio_category');

        $data['categories'] = $this->portfolio_category->get()->result();
        $data['page_title'] = ' | Create New Portfolio';

        $this->load->view('admin/portfolio-create', $data);
    }

    public function store()
    {
        $thumbnail   = $this->input->post('thumbnail');
        $screenshots = [];
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {

            $screenshot_input = $this->input->post('screenshots');

            if (isset($screenshot_input)) {
                foreach ($this->input->post('screenshots') as $screenshot) {
                    $screenshots[] = str_replace(base_url(), '', $screenshot);
                }
            }//if

            // Prepare the data for inclusion in the database
            $data['thumbnail']        = str_replace(base_url(), '', $thumbnail);
            $data['portfolio_name']   = $this->input->post('portfolio_name');
            $data['slug']             = url_title($data['portfolio_name']);
            $data['category_id']      = $this->input->post('category_id');
            $data['content']          = $this->input->post('content');
            $data['link']             = $this->input->post('link');
            $data['screenshots']      = serialize($screenshots);
            $data['meta_keywords']    = $this->input->post('meta_keywords');
            $data['meta_description'] = $this->input->post('meta_description');

            $this->session->set_flashdata('message', 'sucessful data !');

			$this->portfolio->save($data);

			redirect_back();

        } else {
            show_404();
        }//if
    }

    public function edit($id)
    {
        $this->load->model('portfolio_category');

        $data['categories'] = $this->portfolio_category->get()->result();

        $data['portfolio'] = $this->portfolio->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['portfolio']->portfolio_name;

		if (empty($data['portfolio'])) {
			show_404();
        }

        $this->load->view('admin/portfolio-edit',$data);
    }

    public function update($id)
    {
        $thumbnail   = $this->input->post('thumbnail');
        $screenshots = [];
        $submit = $this->input->post('submit');
        $isset_page = $this->portfolio->where(array('id'=>$id))->row();
		
		if (isset($submit) && ! empty($isset_page)) {

            $screenshot_input = $this->input->post('screenshots');

            if (isset($screenshot_input)) {
                foreach ($this->input->post('screenshots') as $screenshot) {
                    $screenshots[] = str_replace(base_url(), '', $screenshot);
                }
            }//if

            // Prepare the data for inclusion in the database
            $data['thumbnail']        = str_replace(base_url(), '', $thumbnail);
            $data['portfolio_name']   = $this->input->post('portfolio_name');
            $data['slug']             = url_title($data['portfolio_name']);
            $data['category_id']      = $this->input->post('category_id');
            $data['content']          = $this->input->post('content');
            $data['link']             = $this->input->post('link');
            $data['screenshots']      = serialize($screenshots);
            $data['meta_keywords']    = $this->input->post('meta_keywords');
            $data['meta_description'] = $this->input->post('meta_description');

            $this->session->set_flashdata('message', 'sucessful data !');

			$this->portfolio->update($data,$id);

			redirect_back();

        } else {
            show_404();
        }//if
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->portfolio->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->portfolio->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}

    
}