<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Theme_controller {

	
	public function index()
	{

		$data['sliders'] = $this->db->query('SELECT * FROM sliders ORDER BY id DESC')->result();
		$data['services'] = $this->db->query('SELECT * FROM services ORDER BY id DESC Limit 6')->result();
		$data['partners'] = $this->db->query('SELECT * FROM partners  ORDER BY id DESC')->result();
		$data['testimonials'] = $this->db->query('SELECT * FROM testimonials ORDER BY id DESC')->result();
		$data['team'] = $this->db->query('SELECT * FROM members ORDER BY id DESC Limit 4 ')->result();
		$data['plans'] = $this->db->query('SELECT * FROM plans LIMIT 3')->result();
		$data['portfolios'] = $this->db->query(
			'SELECT portfolio_categories.category_name , portfolios.* FROM portfolios
								 LEFT JOIN portfolio_categories ON  portfolios.category_id = portfolio_categories.id 
								 ORDER BY portfolios.id DESC Limit 6'
		)->result();
		// Get page title.
		$data['pageTitle'] = '';
		
		$this->load->view('theme/index',$data);
	}

	public function page($slug){
		
		$stmt_page = $this->db->query('SELECT * FROM pages WHERE slug = ?',array($slug));

		if($stmt_page->num_rows() == 0){
			show_404();
		}

		$data['page'] = $stmt_page->row();
		// Get page title.
        $data['pageTitle'] = ' | '.$data['page']->title;

		$this->load->view('theme/page',$data);
	}

	public function service($id)
	{
		// Get single service by id 
		$stmt_page = $this->db->query('SELECT * FROM services WHERE id = ?',array($id));
		// Get breadcrumb services page.
        $stmtCrumb    = $this->db->query("SELECT * FROM pages WHERE layout = 'Services' ");
		$stmtServices = $this->db->query('SELECT * FROM services ORDER BY id DESC');

		if($stmt_page->num_rows() == 0){
			show_404();
		}
		
		$data['serviceCrumb'] = $stmtCrumb->row();
		$data['service'] = $stmt_page->row();
		$data['recentServices'] = $stmtServices->result();
        $data['pageTitle'] = ' | '.$data['service']->name;

		$this->load->view('theme/single-service',$data);
	}

	public function portfolio($id)
	{

		// Get breadcrumb services page.
        $stmtCrumb    = $this->db->query("SELECT * FROM pages WHERE layout = 'Portfolio' ");
		// Get portfolio row by id from databse.
        $stmtPortfolio = $this->db->query(
            'SELECT portfolio_categories.category_name , portfolios.* FROM portfolios 
                               LEFT JOIN portfolio_categories ON  portfolios.category_id = portfolio_categories.id
                               WHERE portfolios.id = ?'
		, array($id));
		// Check the row is exist.
		if($stmtPortfolio->num_rows() == 0){
			show_404();
		}

		$data['portfolioCrumb'] = $stmtCrumb->row();
		$data['portfolio'] = $stmtPortfolio->row();

		// Select all rows of Related portfolios.
		$stmtPortfolios = $this->db->query(
			'SELECT portfolio_categories.category_name , portfolios.* FROM portfolios 
										LEFT JOIN portfolio_categories ON  portfolios.category_id = portfolio_categories.id
										WHERE portfolios.category_id = ?
										AND NOT portfolios.id = ?
										ORDER BY  portfolios.id DESC'
		,array($data['portfolio']->category_id, $id));

		$data['portfolios'] =  $stmtPortfolios->result();

		// Get page title.
		$data['pageTitle'] = ' | '.$data['portfolio']->portfolio_name;

		$this->load->view('theme/single-portfolio',$data);
	}

	public function subscriber_create()
	{
		$data['email'] = $this->input->post('email');
		
		$this->db->insert('subscribers', $data);
	}
}
