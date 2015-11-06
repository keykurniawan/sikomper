<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model {

    var $table = 'products_tabel';
    var $tablecat = 'product_categories';
    var $tablecoment = 'komentars_tabel';

    public function __construct() {
        parent::__construct();
    }

    //select
    public function select_all($limit = 15, $offset = 0, $filter = 'nama', $sort = 'asc') {
        $sql = "select p.product_name as nama, p.product_price as harga, p.product_image, p.permalink, p.product_image_thumb, pk.category_name "
                . "from products_tabel p, product_categories pk "
                . "where p.id_category = pk.id_category "
                . "AND p.status = '1' "
                . "order by $filter $sort "
                . "limit $offset, $limit ";
        return $this->db->query($sql);
    }

    public function select_by_categoryid($id_category, $limit = 15, $offset = 0, $filter = 'nama', $sort = 'asc') {
        $sql = "select p.product_name as nama, p.product_price as harga, p.product_image, p.permalink, p.product_image_thumb, pk.category_name, pk.permalink as pklink "
                . "from products_tabel p, product_categories pk "
                . "where p.id_category = pk.id_category "
                . "AND p.status = '1' "
                . "AND p.id_category = '" . $id_category . "' "
                . "order by $filter $sort "
                . "limit $offset, $limit ";
        return $this->db->query($sql)->result_array();
    }

    public function count_all() {
        $sql = "select count(id_product) as total from products_tabel where products_tabel.status = '1' limit 1";
        return $this->db->query($sql)->row()->total;
    }

    public function all_products() {
        $sql = "select p.*, pk.category_name "
                . "from products_tabel p, product_categories pk "
                . "where p.id_category = pk.id_category order by p.id_product asc";
        return $this->db->query($sql);
    }

    //search
    public function select_by_id($id_product) {
        $sql = " select * from products_tabel where id_product=" . $id_product;
        $query = $this->db->query($sql);
        return $query;
    }

    public function search_all($keyword) {
        $sql = "select * from products_tabel where product_name like '%" . $keyword . "%'";
        return $this->db->query($sql);
    }

    public function getProductById($id_product) {
        $this->db->select('*');
        $this->db->where('id_product', $id_product);
        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    public function get_dropdown_list() {
        $this->db->from($this->tablecat);
        $this->db->order_by('category_name', 'asc');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            $return[''] = "--Select a Category--";
            foreach ($result->result_array() as $row) {
                $return[$row['id_category']] = $row['category_name'];
            }
        }
        return $return;
    }

    //add product
    public function add_product($data) {
        $datatable = array(
            'id_product' => ''
            , 'product_name' => $data['product_name']
            , 'product_description' => $data['product_description']
            , 'product_price' => $data['product_price']
            , 'processor' => $data['processor']
            , 'id_category' => $data['id_category']
            , 'id_brand' => $data['id_brand']
            , 'product_stock' => $data['product_stock']
            , 'created_at' => $data['created_at']
            , 'modified_at' => ''
            , 'product_image' => $data['gambar']
            , 'product_image_thumb' => $data['gambartumb']
            , 'permalink' => $data['permalink']
            , 'status' => $data['product_status']
            , 'product_code' => $data['product_code']
            , 'memory' => $data['memory']   
            , 'vga' => $data['vga'] 
            , 'screen' => $data['screen']    
            , 'os' => $data['os']    
            , 'storage' => $data['storage']    
            , 'color' => $data['color']
        );
        $this->db->insert($this->table, $datatable);

        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }

    //delete
    public function delete_product($id_product) {
        $sql = "delete from products_tabel where id_product = " . $id_product;
        $query = $this->db->query($sql);
        return $query;
    }

    //update
    public function updateProductFoto($id_product, $data) {
        $data = array(
            'product_name' => $data['product_name']
            , 'product_description' => $data['product_description']
            , 'product_price' => $data['product_price']
            , 'processor' => $data['processor']
            , 'id_category' => $data['id_category']
            , 'id_brand' => $data['id_brand']
            , 'product_stock' => $data['product_stock']
            , 'modified_at' => $data['modified_at']
            , 'product_image' => $data['gambar']
            , 'product_image_thumb' => $data['gambartumb']
            , 'permalink' => $data['permalink']
            , 'status' => $data['product_status']
            , 'product_code' => $data['product_code']
            , 'memory' => $data['memory']   
            , 'vga' => $data['vga'] 
            , 'screen' => $data['screen']    
            , 'os' => $data['os']    
            , 'storage' => $data['storage']    
            , 'color' => $data['color']    
        );
        $this->db->where('id_product', $id_product);
        return $this->db->update($this->table, $data);
    }

    public function updateProductTanpaFoto($id_product, $data) {
        $data = array(
            'product_name' => $data['product_name']
            , 'product_description' => $data['product_description']
            , 'product_price' => $data['product_price']
            , 'processor' => $data['processor']
            , 'id_category' => $data['id_category']
            , 'id_brand' => $data['id_brand']
            , 'product_stock' => $data['product_stock']
            , 'modified_at' => $data['modified_at']
            , 'permalink' => $data['permalink']
            , 'status' => $data['product_status']
            , 'product_code' => $data['product_code']
            , 'memory' => $data['memory']   
            , 'vga' => $data['vga'] 
            , 'screen' => $data['screen']    
            , 'os' => $data['os']    
            , 'storage' => $data['storage']    
            , 'color' => $data['color']    
        );
        $this->db->where('id_product', $id_product);
        return $this->db->update($this->table, $data);
    }

    public function tampil_produk_home($limit) {
        $sql = "select p.*, pk.category_name "
                . "from products_tabel p, product_categories pk "
                . "where p.id_category = pk.id_category and p.status = '1' order by RAND() LIMIT $limit";
        return $this->db->query($sql);
    }

    public function getProductByPermalink($permalink) {
        $this->db->select('p.id_product, p.product_code, p.product_name,p.product_description,p.permalink, p.color, p.processor, p.memory, p.vga, p.os, p.screen, p.storage, p.id_category, p.product_price, p.product_stock, p.product_image, p.product_image_thumb, c.category_name, b.name');
        $this->db->join('product_categories c', 'c.id_category = p.id_category');
        $this->db->join('brands_tabel b', 'b.id_brand = p.id_brand');
        $this->db->where('p.permalink', $permalink);
        $query = $this->db->get('products_tabel p', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    //add komentar
    public function add_komentar($data) {
        $datatable = array(
            'id_komentar' => ''
            , 'id_product' => $data['id_product']
            , 'id_user' => $data['id_user']
            , 'komentar' => $data['komentar']
            , 'created_at' => $data['created_at']
            , 'created_by' => $data['created_by']
        );
        $this->db->insert($this->tablecoment, $datatable);

        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }

    //select review komentar
    public function get_komentar($id_product) {
        $sql = "select k.* from komentars_tabel k where k.id_product = " . $id_product;
        return $this->db->query($sql);
    }

    //total komentar
    public function get_total_komentar($id_product) {
        $sql = "select count(k.id_komentar) as totalreviews from komentars_tabel k where k.id_product = " .$id_product;
        return $this->db->query($sql)->row()->totalreviews;
    }

}

?>