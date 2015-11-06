<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Brand_model extends CI_Model {
    
    var $table = 'brands_tabel';
    
    public function __construct() {
        parent::__construct();
    }
    
    //select
    public function select_all(){
        $sql = "select bt.* , "
                . "(select count(p.id_product) from products_tabel p where p.id_brand = bt.id_brand GROUP BY bt.id_brand) as total_product "
                . "from brands_tabel bt";
        return $this->db->query($sql);
    }
    
    public function select_all_paging($limit = array()) {
        $sql = "select * from brands_tabel";
        if ($limit != null)
            $sql .= " limit " . $limit['offset'] . "," . $limit['perpage'];
        return $this->db->query($sql);
    }

    function getBrands() {
        $sql = "SELECT * FROM brands_tabel";
        $data = $this->db->query($sql);
        return $data;
    }
    
    public function getBrandById($id_brand) {
        $this->db->select('*');
        $this->db->where('id_brand', $id_brand);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
    public function getBrandByPermalink($permalink) {
        $this->db->select('*');
        $this->db->where('permalink', $permalink);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
    public function get_dropdown_list() {
        $this->db->from($this->table);
        $this->db->order_by('name', 'asc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Select a Brand--";
            foreach ($result->result_array() as $row) {
                $return[$row['id_brand']] = $row['name'];
            }
        }
        return $return;
    }
    
    public function add_brand(){
        $data = array(
            'id_brand' => ''
            ,'name' => $this->input->post('name')
            ,'deskripsi' => $this->input->post('deskripsi')
            ,'created_at' => date('Y-m-d H:i:s', time()+60*60*5)
            ,'permalink' => url_title($this->input->post('name'))
        );
        $this->db->insert($this->table, $data);
        
        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }
    
    //delete
    public function delete($id_brand) {
        $sql = "delete from brands_tabel where id_brand = " . $id_brand;
        $query = $this->db->query($sql);
        return $query;
    }
    
    //update
    public function update_brand($id_brand){
        $data = array(
            'name' => $this->input->post('name')
            ,'permalink' => url_title($this->input->post('name'))    
            ,'deskripsi' => $this->input->post('deskripsi')
            ,'modified_at' => date('Y-m-d H:i:s', time()+60*60*5)
        );
        $this->db->where('id_brand', $id_brand);
        return $this->db->update($this->table, $data);
    }
}

?>
