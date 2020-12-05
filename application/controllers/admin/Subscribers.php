<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribers extends Admin_controller
{
    public function index()
    {
        $data['page_title'] = ' | Subscribers';
        $data['subscribers'] = $this->db->query('SELECT * FROM subscribers ')->result();
        $this->load->view('admin/subscribers', $data);
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->db->get_where('subscribers', array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {
            
            $this->db->where('id', $id);
            $this->db->delete('subscribers');

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}
}
