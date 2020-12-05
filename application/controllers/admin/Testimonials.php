<?php 


class Testimonials extends Admin_controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('testimonial');
    }

    public function index()
    {
        $data['page_title'] = ' | Testimonials';
        $testimonials = $this->testimonial->pagination('admin/testimonials/index',4,5,10);
        $data['testimonials'] = $testimonials->result();

        $this->load->view('admin/testimonials',$data);
    }

    public function create()
    {
        $data['page_title'] = ' | Create New Testimonial';
        $this->load->view('admin/testimonial-create', $data);
    }

    public function store()
    {
        $submit = $this->input->post('submit');
		
		if (isset($submit)) {
            $image = $this->input->post('image');

            // Prepare the data for inclusion in the database
            $data['image']   = str_replace(base_url(), '', $image);
            $data['name']    = $this->input->post('name');
            $data['comment'] = $this->input->post('comment');

            $this->testimonial->save($data);

            $this->session->set_flashdata('message', 'sucessful data !');

			redirect_back();

        }
    }

    public function edit($id)
    {
        $data['testimonial'] = $this->testimonial->where(array('id'=>$id))->row();
        $data['page_title'] = ' | ' . $data['testimonial']->name;

		if (empty($data['testimonial'])) {
			show_404();
        }

        $this->load->view('admin/testimonial-edit',$data);
    }

    public function update($id)
    {
        $submit = $this->input->post('submit');
        $isset_page = $this->testimonial->where(array('id'=>$id))->row();
		
		if (isset($submit) && ! empty($isset_page)) {
            
            $image = $this->input->post('image');

            // Prepare the data for inclusion in the database
            $data['image']   = str_replace(base_url(), '', $image);
            $data['name']    = $this->input->post('name');
            $data['comment'] = $this->input->post('comment');

            $this->testimonial->update($data,$id);

            $this->session->set_flashdata('message', 'sucessful data update !');

			redirect_back();
        }
    }

    public function delete($id)
	{
        $submit = $this->input->post('submit');
        $isset_page = $this->testimonial->where(array('id'=>$id))->num_rows();

		if ( isset($submit) && ! empty($isset_page) ) {

			$this->testimonial->delete($id);

		    $this->session->set_flashdata('message', 'sucessful delete data !');

			redirect_back();

		} else{
			show_404();
		}
	}
}
