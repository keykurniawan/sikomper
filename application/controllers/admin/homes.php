<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homes extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        if($this->session->userdata('is_login')){
            $data['title'] = "Home Admin | Adney's Shop";
            $data['user_name'] = $this->session->userdata('user_name');
            $data['user_email'] = $this->session->userdata('user_email');
            if ($this->session->userdata('id_status') == 1) {
                $this->load->view('admin/home', $data);
            } else {
                redirect('public/homes');
            }
        } else {
            $data['title'] = "Sign In | Adney's Shop";
            $this->load->view('public/login', $data);
        }
    }
	
	// function import(){
		// $this->load->helper('excel');
    	// $file = 'rule.xls';
        // $objReader = read_excel();
        // $objPHPExcel = $objReader->load($file); //$file --> your filepath and filename
        // $objWorksheet = $objPHPExcel->getActiveSheet();
        // $highestRow = $objWorksheet->getHighestRow(); // e.g. 10
        // $highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
        // $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5
		// $no = 1;
        // for ($row = 3; $row <= $highestRow; ++$row) {
        	// $id_produk = $objWorksheet->getCellByColumnAndRow(20, $row)->getValue();
            // $id_kebutuhan = $this->save_kebutuhan($objWorksheet->getCellByColumnAndRow(3, $row)->getValue());
            // $id_harga = $this->save_harga($objWorksheet->getCellByColumnAndRow(6, $row)->getValue());
            // $id_pros = $this->save_pros($objWorksheet->getCellByColumnAndRow(9, $row)->getValue());
            // $id_memory = $this->save_memory($objWorksheet->getCellByColumnAndRow(12, $row)->getValue());
            // $id_storage = $this->save_storage($objWorksheet->getCellByColumnAndRow(15, $row)->getValue());
            // $id_brand = $this->save_brand($objWorksheet->getCellByColumnAndRow(18, $row)->getValue());
			// $this->db->insert('rule',array('rule_kode'=>'R'.$no,'id_product'=>$id_produk));
			// $id_rule = $this->db->insert_id();
            // $this->db->insert('rule_detail',array('id_kriteria'=>$id_kebutuhan,'id_parameter'=>1,'id_rule'=>$id_rule));
            // $this->db->insert('rule_detail',array('id_kriteria'=>$id_harga,'id_parameter'=>2,'id_rule'=>$id_rule));
            // $this->db->insert('rule_detail',array('id_kriteria'=>$id_pros,'id_parameter'=>3,'id_rule'=>$id_rule));
            // $this->db->insert('rule_detail',array('id_kriteria'=>$id_memory,'id_parameter'=>4,'id_rule'=>$id_rule));
            // $this->db->insert('rule_detail',array('id_kriteria'=>$id_storage,'id_parameter'=>5,'id_rule'=>$id_rule));
            // $this->db->insert('rule_detail',array('id_kriteria'=>$id_brand,'id_parameter'=>6,'id_rule'=>$id_rule));
			// $no++;
        // }
    // }


    // public function save_kebutuhan($id_kebutuhan){
		// $kebutuhan = $this->db->query("select * from product_categories where id_category = ".$id_kebutuhan)->row();
		// $kebutuhan_name = strtolower(trim($kebutuhan->category_name));
        // $cek = $this->db->query("select * from kriteria where LOWER(TRIM(kriteria_name))='".$kebutuhan_name."' and parameter_id=1")->row();
        // if(empty($cek)){
            // $this->db->insert('kriteria',array('kriteria_name'=>ucwords($kebutuhan_name),'parameter_id'=>1));
            // return $this->db->insert_id();
        // }else{
            // return $cek->id_kriteria;
        // }
    // }
	
	// public function save_harga($id_harga){
		// $harga = $this->db->query("select * from harga where id_harga = ".$id_harga)->row();
		// $harga_name = strtolower(trim($harga->range_harga));
        // $cek = $this->db->query("select * from kriteria where LOWER(TRIM(kriteria_name))='".$harga_name."' and parameter_id=2")->row();
        // if(empty($cek)){
            // $this->db->insert('kriteria',array('kriteria_name'=>ucwords($harga_name),'parameter_id'=>2));
            // return $this->db->insert_id();
        // }else{
            // return $cek->id_kriteria;
        // }
    // }
	
	// public function save_pros($id_pros){
		// $pros = $this->db->query("select * from processor where id_processor = ".$id_pros)->row();
		// $pros_name = strtolower(trim($pros->processor));
        // $cek = $this->db->query("select * from kriteria where LOWER(TRIM(kriteria_name))='".$pros_name."' and parameter_id=3")->row();
        // if(empty($cek)){
            // $this->db->insert('kriteria',array('kriteria_name'=>ucwords($pros_name),'parameter_id'=>3));
            // return $this->db->insert_id();
        // }else{
            // return $cek->id_kriteria;
        // }
    // }
	
	// public function save_memory($id_memory){
		// $memory = $this->db->query("select * from memori where id_memori = ".$id_memory)->row();
		// $memory_name = strtolower(trim($memory->ukuran));
        // $cek = $this->db->query("select * from kriteria where LOWER(TRIM(kriteria_name))='".$memory_name."' and parameter_id=4")->row();
        // if(empty($cek)){
            // $this->db->insert('kriteria',array('kriteria_name'=>ucwords($memory_name),'parameter_id'=>4));
            // return $this->db->insert_id();
        // }else{
            // return $cek->id_kriteria;
        // }
    // }
	
	// public function save_storage($id_storage){
		// $storage = $this->db->query("select * from storage where id_storage = ".$id_storage)->row();
		// $storage_name = strtolower(trim($storage->ukuran));
        // $cek = $this->db->query("select * from kriteria where LOWER(TRIM(kriteria_name))='".$storage_name."' and parameter_id=5")->row();
        // if(empty($cek)){
            // $this->db->insert('kriteria',array('kriteria_name'=>ucwords($storage_name),'parameter_id'=>5));
            // return $this->db->insert_id();
        // }else{
            // return $cek->id_kriteria;
        // }
    // }
	
	// public function save_brand($id_brand){
		// $brand = $this->db->query("select * from brands_tabel where id_brand = ".$id_brand)->row();
		// $brand_name = strtolower(trim($brand->name));
        // $cek = $this->db->query("select * from kriteria where LOWER(TRIM(kriteria_name))='".$brand_name."' and parameter_id=6")->row();
        // if(empty($cek)){
            // $this->db->insert('kriteria',array('kriteria_name'=>ucwords($brand_name),'parameter_id'=>6));
            // return $this->db->insert_id();
        // }else{
            // return $cek->id_kriteria;
        // }
    // }

    
}