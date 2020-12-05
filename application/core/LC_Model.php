<?php 

class LC_Model extends CI_Model
{
    protected $_primiry_key = 'id';
    private $_table_name;

    public function __construct()
    {
        parent::__construct();

        $this->_table_name = $this->create_table_name();

        $this->load->database();
        
    }

    public function get($limit = NULL , $offset = NULL )
    {
        return $this->db->get($this->_table_name, $limit, $offset);
    }


    public function where($cols,$limit = '', $offset = '')
    {
        return $this->db->get_where($this->_table_name, $cols, $limit, $offset);
    }

    public function save($data)
    {
        return $this->db->insert($this->_table_name, $data);
    }

    public function update($data,$id)
    {
        $this->db->where($this->_primiry_key, $id);
        $this->db->update($this->_table_name, $data);
    }

    public function pagination($url, $segment = 3, $num_links = 5, $per_page = 15)
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url().$url;
        $config['num_links'] = $num_links;
        $config['per_page'] = $per_page;
        $config['total_rows'] = $this->get()->num_rows();

        /* This Application Must Be Used With BootStrap 3 *  */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        return $this->get($per_page, $this->uri->segment($segment));
    }

    public function join($config = array()) {

        $join = $this->set_join($config,'join_type', 'inner');
        $cols = $this->set_join($config,'join_cols', '*');
        $join_table = $this->set_join($config,'join_table');
        $primiry_key = $this->set_join($config,'primiry_key','id');
        $join_key = $this->set_join($config,'join_key','id');
        $limit = $this->set_join($config,'limit',NULL);
        $offset = $this->set_join($config,'offset',NULL);

        $permiry_id = $this->_table_name.'.'.$primiry_key;
        // $cloumns = $join_table.'.'.$cols;
        $join_primiry_key = $join_table.'.'.$join_key;

        $this->db->select($this->_table_name.'.*, '.$cols);
        $this->db->from($this->_table_name);
        $this->db->join($join_table, $permiry_id . ' = '. $join_primiry_key, $join); 
        $this->db->limit($limit,$offset);
        $this->set_join($config,'group_by',NULL);
        $this->set_join($config,'order_by',NULL);

        $query = $this->db->get();

        return $query;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table_name);
    }

    private function create_table_name()
    {
        $class_name = get_class($this);

        $table_name = strtolower($class_name);

        if (substr($table_name, -1) === 'y') {
            return substr_replace($table_name, "ies", -1);
        } else {
            return $table_name.'s';
        }
    }

    private function set_join($config, $key = '', $value = ''){

       return isset($config[$key]) ? $config[$key] : $value ;
    }
}
