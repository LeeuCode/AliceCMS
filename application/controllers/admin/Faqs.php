<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends Admin_controller
{
    public function __construct()
	{
		parent::__construct();

		$this->load->model('faq');
    }

    public function index()
    {
        $data['page_title'] = ' | FAQ';
        $limit = 10;
        $config['join_type'] = 'left';
        $config['join_table'] = 'faq_categories';
        $config['join_cols'] = 'faq_categories.category_name';
        $config['primiry_key'] = 'category_id';
        $config['limit'] = $limit;
        $config['offset'] = $this->uri->segment(4);

        $data['faqs'] = $this->faq->join($config)->result();

        $this->faq->pagination('admin/faqs/index/',4,5,$limit);

        $this->load->view('admin/faqs', $data);
    }

    public function create()
    {
        $data['page_title'] = ' | Create New FAQ';
        $this->load->model('faq_category');
        $categories = $this->faq_category->get();
        $data['categories'] = $categories->result();

        $this->load->view('admin/faq-create', $data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {

        $data['page_title']       = $this->input->post('title');
        $data['category_id'] = $this->input->post('category_id');
        $data['content']     = $this->input->post('content');

        $this->faq->save($data);

        $this->session->set_flashdata('message', 'sucessful data !');
        
        redirect_back();
        
        } else {
            show_404();
        }
    }

    public function edit(int $id)
    {
        $this->load->model('faq_category');
        $categories = $this->faq_category->get();
        $data['faq'] = $this->faq->where(array('id'=>$id))->row();
        $data['categories'] = $categories->result();
        $data['page_title'] = ' | ' . $data['faq']->title;

		if (empty($data['faq'])) {
			show_404();
        }

        $this->load->view('admin/faq-edit',$data);
    }

    public function update($id)
    {
        $submit = $this->input->post('submit');
		$isset_page = $this->faq->where(array('id'=>$id))->row();

		if ( isset($submit) && ! empty($isset_page) ) {

            $data['page_title']       = $this->input->post('title');
            $data['category_id'] = $this->input->post('category_id');
            $data['content']     = $this->input->post('content');
    
            $this->faq->update($data, $id);
    
            $this->session->set_flashdata('message', 'sucessful data !');
            
            redirect_back();
        } else {
            show_404();
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->faq->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->faq->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}
}
