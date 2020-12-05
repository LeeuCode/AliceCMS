<?php


class General extends Admin_controller
{
    public function __construct()
	{
		parent::__construct();
    }

    public function index()
    {
        # code...
    }

    public function layout()
    {
        $data['page_title'] = " | Layout Settings";
        $this->load->model('layout');

        $data['layout'] = $this->layout->get()->row();

        // Get layout feilds from database.
        $data['title'] = ($data['layout']) ? unserialize($data['layout']->title) : '';
        $data['subtitle'] = ($data['layout']) ? unserialize($data['layout']->subtitle) : '';
        $data['image'] = ($data['layout']) ? unserialize($data['layout']->image) : '';
        $data['color'] = ($data['layout']) ? unserialize($data['layout']->color) : '';
        $data['link'] = ($data['layout']) ? unserialize($data['layout']->link) : '';
        $data['whyWe_icon'] = ($data['layout']) ? unserialize($data['layout']->whyWe_icon) : '';
        $data['whyWe_title'] = ($data['layout']) ? unserialize($data['layout']->whyWe_title) : '';
        $data['whyWe_content'] = ($data['layout']) ? unserialize($data['layout']->whyWe_content) : '';
        $data['counter_icon'] = ($data['layout']) ? unserialize($data['layout']->counter_icon) : '';
        $data['counter_number'] = ($data['layout']) ? unserialize($data['layout']->counter_number) : '';
        $data['counter_title']  = ($data['layout']) ? unserialize($data['layout']->counter_title) : '';
        $data['menu_parent'] = ($data['layout']) ? unserialize($data['layout']->menu_parent) : '';

		if ( ! empty($data['layout'])) {
			$data['formLink'] = base_url('admin/general/mange_layout/'.$data['layout']->id.'/');
        } else {
            $data['formLink'] = base_url('admin/general/mange_layout/');
        }

        $this->load->view('admin/layout', $data);
    }

    public function mange_layout($id = 0){

        $this->load->model('layout');

        $images = [];
        $imgs = $this->input->post('image');

        foreach ($imgs as $key => $image) {
            $images[$key] = str_replace(base_url(), '', $image);
        }

        // Prepare the data for inclusion in the database
        $data['title']          = serialize($this->input->post('title'));
        $data['subtitle']       = serialize($_POST['subtitle']);
        $data['image']          = serialize($images);
        $data['link']           = serialize($_POST['link']);
        $data['color']          = serialize($_POST['color']);
        $data['whyWe_icon']     = serialize($_POST['whyWe_icon']);
        $data['whyWe_title']    = serialize($_POST['whyWe_title']);
        $data['whyWe_content']  = serialize($_POST['whyWe_content']);
        $data['counter_icon']   = serialize($_POST['counter_icon']);
        $data['counter_number'] = serialize($_POST['counter_number']);
        $data['counter_title']  = serialize($_POST['counter_title']);
        // $data['menu_parent']    = serialize($_POST['menu_parent']);

        if($id == 0 ){
            $this->layout->save($data);
    
            $this->session->set_flashdata('message', 'sucessful data save!');
            
            redirect_back();
        } else {

            $this->layout->update($data, $id);
    
            $this->session->set_flashdata('message', 'sucessful data update !');
            
            redirect_back();
        }
    }

    public function settings()
    {
        $data['page_title'] = " | General Settings";
        $this->load->model('setting');

        $data['setting'] = $this->setting->get()->row();

        // Get setting feilds from database.
        $data['fivicon'] = ($data['setting']) ? base_url().$data['setting']->fivicon : '';
        $data['logo'] = ($data['setting']) ? base_url().$data['setting']->logo : '';
        $data['site_name'] = ($data['setting']) ? $data['setting']->site_name : '';
        $data['meta_keywords'] = ($data['setting']) ? $data['setting']->meta_keywords : '';
        $data['meta_description'] = ($data['setting']) ? $data['setting']->meta_description : '';
        $data['address'] = ($data['setting']) ? $data['setting']->address : '';
        $data['map_code'] = ($data['setting']) ? $data['setting']->map_code : '';
        $data['phone'] = ($data['setting']) ? unserialize($data['setting']->phone) : '';
        $data['email'] = ($data['setting']) ? unserialize($data['setting']->email) : '';
        $data['socail_icon'] = ($data['setting']) ? unserialize($data['setting']->socail_icon) : '';
        $data['socail_link'] = ($data['setting']) ? unserialize($data['setting']->socail_link) : '';

        if ( ! empty($data['setting'])) {
			$data['formLink'] = base_url('admin/general/mange_settings/'.$data['setting']->id.'/');
        } else {
            $data['formLink'] = base_url('admin/general/mange_settings/');
        }

        $this->load->view('admin/settings', $data);
    }

    public function mange_settings($id)
    {
        $this->load->model('setting');

        $submit = $this->input->post('submit');

        if (isset($submit)) {
            
            $fivIcon = $this->input->post('fivicon');
            $logo    = $this->input->post('logo');
        
            // Prepare the data for inclusion in the database
            $data['fivicon']          = str_replace(base_url(), '', $fivIcon);
            $data['logo']             = str_replace(base_url(), '', $logo);
            $data['site_name']        = $this->input->post('site_name');
            $data['meta_keywords']    = $this->input->post('meta_keywords');
            $data['meta_description'] = $this->input->post('meta_description');
            $data['address']          = $this->input->post('address');
            $data['map_code']         = $this->input->post('map_code');
            $data['phone']            = serialize($this->input->post('phone'));
            $data['email']            = serialize($this->input->post('email'));
            $data['socail_icon']      = @serialize($this->input->post('socail_icon'));
            $data['socail_link']      = @serialize($this->input->post('socail_link'));

            if($id == 0 ){
                $this->setting->save($data);
        
                $this->session->set_flashdata('message', 'sucessful data save!');
                
                redirect_back();
            } else {
    
                $this->setting->update($data, $id);
        
                $this->session->set_flashdata('message', 'sucessful data update !');
                
                redirect_back();
            }
        }
    }
}
