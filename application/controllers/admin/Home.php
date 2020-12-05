<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_controller
{
    public function index()
    {
        $stmtSlider = $this->db->query('SELECT * FROM sliders ORDER BY id DESC ');
        $stmtServices = $this->db->query('SELECT * FROM services');
        $stmtPortfolio = $this->db->query('SELECT * FROM portfolios');
        $stmtTeam = $this->db->query('SELECT * FROM members');
        $stmtPartners = $this->db->query('SELECT * FROM partners');
        $stmtTestimonials = $this->db->query('SELECT * FROM testimonials');
        $stmtPlans = $this->db->query('SELECT * FROM plans');
        $stmtSubscribers = $this->db->query('SELECT * FROM subscribers');

        $data['page_title'] = '| Home';
        $data['sliders'] = $stmtSlider->result();
        $data['services_count'] = $stmtServices->num_rows();
        $data['portfolios_count'] = $stmtPortfolio->num_rows();
        $data['members_count'] = $stmtTeam->num_rows();
        $data['partners_count'] = $stmtPartners->num_rows();
        $data['testimonials_count'] = $stmtTestimonials->num_rows();
        $data['plans_count'] = $stmtPlans->num_rows();
        $data['subscribers_count'] = $stmtSubscribers->num_rows();
        
        $this->load->view('admin/index', $data);
    }
}
