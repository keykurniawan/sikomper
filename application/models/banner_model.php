<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Banner_model extends CI_Model {

    var $table = 'banners_tabel';

    public function __construct() {
        parent::__construct();
    }

    //select
    public function select_all() {
        $sql = "select * from banners_tabel";
        return $this->db->query($sql);
    }

    public function select_by_id($id_banner) {
        $sql = "select * from banners_tabel where id_banner=" . $id_banner;
        $query = $this->db->query($sql);
        return $query;
    }

    public function search_all($keyword) {
        $sql = "select * from banners_tabel where title_banner like '%" . $keyword . "%'";
        return $this->db->query($sql);
    }

    public function getBannerById($id_banner) {
        $this->db->select('*');
        $this->db->where('id_banner', $id_banner);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    //add banner
    public function add_banner($data) {
        $datatable = array(
            'id_banner' => '',
            'title_banner' => $data['title_banner'],
            'description_banner' => $data['description_banner'],
            'image_banner' => $data['gambar'],
            'status_banner' => $data['status_banner'],
            'created_at' => $data['created_at'],
            'modified_at' => ''
        );
        $this->db->insert($this->table, $datatable);

        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }
    
    //delete banner
    public function delete_banner($id_banner) {
        $sql = "delete from banners_tabel where id_banner =" .$id_banner;
        $query = $this->db->query($sql);
        return $query;
    }
    
    //update banner
    public function updateBannerFoto($id_banner, $data) {
        $data = array(
            'title_banner' => $data['title_banner'],
            'description_banner' => $data['description_banner'],
            'image_banner' => $data['gambar'],
            'status_banner' => $data['status_banner'],
            'modified_at' => $data['modified_at']
        );
        $this->db->where('id_banner', $id_banner);
        return $this->db->update($this->table,$data);
    }
    
    public function updateBannerTanpaFoto($id_banner, $data) {
        $data = array(
            'title_banner' => $data['title_banner'],
            'description_banner' => $data['description_banner'],
            'status_banner' => $data['status_banner'],
            'modified_at' => $data['modified_at']
        );
        $this->db->where('id_banner', $id_banner);
        return $this->db->update($this->table,$data);
    }
    
    public function tampil_slide_banner() {
        $sql = "SELECT * FROM banners_tabel where status_banner ='1' order by id_banner ASC";
        $query = $this->db->query($sql);
        return $query;
    }

}
