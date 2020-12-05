<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_categories extends Admin_controller
{
    public function __construct()
	{
		parent::__construct();

		$this->load->model('faq_category');
    }

    public function index()
    {
        $data['page_title'] = ' | FAQ Categories';
        $limit = 10;
        $config['join_type'] = 'left';
        $config['join_table'] = 'faqs';
        $config['join_cols'] = 'count(faqs.id) AS categoryCount';
        $config['join_key'] = 'category_id';
        $config['limit'] = $limit;
        $config['offset'] = $this->uri->segment(4);
        $config['group_by'] = $this->db->group_by('faq_categories.id');

        $data['categories'] = $this->faq_category->join($config)->result();

        $this->faq_category->pagination('admin/faq_categories/index/',4,5,$limit);

        $this->load->view('admin/faq-categories', $data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {

            // Prepare the data for inclusion in the database
            $data['category_name'] = $this->input->post('category_name');

            $this->faq_category->save($data);

			$this->session->set_flashdata('message', 'sucessful data !');
			
			redirect_back();
        } else {
			show_404();
		}
    }

    public function edit($id)
	{
        $data['faq_cat'] = $this->faq_category->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['faq_cat']->category_name;

		if (empty($data['faq_cat'])) {
			show_404();
        }
        
        $this->load->view('admin/faq-category-edit',$data);
    }

    public function update($id)
    {
        $submit = $this->input->post('submit');
		$isset_page = $this->faq_category->where(array('id'=>$id))->row();

		if ( isset($submit) && ! empty($isset_page) ) {
            // Prepare the data for inclusion in the database
            $data['category_name'] = $this->input->post('category_name');

            $this->faq_category->update($data, $id);

            $this->session->set_flashdata('message', 'sucessful data !');
            
            redirect_back();
            
        } else {
            show_404();
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->faq_category->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->faq_category->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}

}