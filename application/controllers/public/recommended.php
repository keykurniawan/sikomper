<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Recommended extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Rekomendasi Produk | Adney's Shop";
        $this->load->view('public/rekomendasi/welcome', $data);
    }

    public function choose_type(){

    }
	
	public function parameter(){
		
		if(!empty($_POST)){
			$param_id = $this->input->post('param_id');
			$user_id = $this->session->userdata('id_user');
			$tanggal_rekomendasi = (isset($_POST['tgl_rek']))?$this->input->post('tgl_rek'):date('Y-m-d H:i:s', time() + 60 * 60 * 5);
			//inference engine
			if($param_id==1){
				//ambil data rule untuk disimpan di tabel user rekomendasi
				$rules = $this->db->query("select * from rule")->result();
				$cek_rekomendasi = $this->db->query("select * from user_rekomendasi where id_user=".$user_id." and tanggal_rekomendasi='".$tanggal_rekomendasi."'")->result();
				if(empty($cek_rekomendasi)){
					foreach($rules as $r){
						$array_data = array(
							'id_user'=>$user_id,
							'id_rule'=>$r->id_rule,
							'tanggal_rekomendasi'=>$tanggal_rekomendasi,
						);
						//simpan setiap aturan ke dalam tabel user rekomendasi
						$this->db->insert('user_rekomendasi',$array_data);
					}
				}
				$data['title'] = "Rekomendasi Produk | Adney's Shop";
				//ambil data parameter berdasarkan parameter id
				$data['parameter'] = $this->db->query("select * from parameter where id_parameter=".$param_id)->row();
				//ambil data kriteria berdasarkan parameter id  
				$data['kriteria'] = $this->db->query("select * from kriteria where parameter_id=".$param_id)->result();  
				$data['user_id'] = $user_id;
				$data['param_id'] = $param_id;
				$data['tgl_rek'] = $tanggal_rekomendasi;
				$this->load->view('public/rekomendasi/parameter', $data);
			}else if($param_id>1 && $param_id<=6){
				//lakukan proses inferensi sampai mencapai jumlah parameter
				$data['title'] = "Rekomendasi Produk | Adney's Shop";
				$kriteria_pilihan = $this->input->post('kriteria');
				//ambil semua data dari user rekomendasi
				$rekomen = $this->db->query("select * from user_rekomendasi where id_user=".$user_id." and tanggal_rekomendasi='".$tanggal_rekomendasi."'")->result();
                foreach($rekomen as $r){
                	//melakukan pengecekan data rule berdasarkan id kriteria yang dipilh sebelumnya
                    $cek_kriteria = $this->db->query("select * from rule_detail rd where rd.id_rule=".$r->id_rule." and rd.id_kriteria=".$kriteria_pilihan." and rd.id_parameter = ".($param_id-1)."")->result();
                    if(empty($cek_kriteria)){
                    	//hapus data rule yang tidak memiliki id kriteria yag dipilih sebelumnya dari tabel user rekomendasi
                        $this->db->query('delete from user_rekomendasi where id_user='.$user_id.' and id_rule='.$r->id_rule." and tanggal_rekomendasi='".$tanggal_rekomendasi."'");
                    }
                }
                //untuk menyimpan jawaban user
                $array_jawaban = array(
                	'user_jawaban_tanggal'=>$tanggal_rekomendasi,
                	'id_parameter' => ($param_id-1),
                	'id_kriteria' => $kriteria_pilihan,
                	'id_user' => $user_id,
                );
                $this->db->insert('user_jawaban',$array_jawaban);
                //ambil data parameter berdasarkan parameter id
                $data['parameter'] = $this->db->query("select * from parameter where id_parameter=".$param_id)->row();  
                //ambil data kriteria yang tersisa berdasarkan parameter id dari tabel user rekomendasi
                $data['kriteria'] = $this->db->query("SELECT DISTINCT(k.id_kriteria),k.kriteria_name 
                from user_rekomendasi ur 
                join rule_detail rd on(rd.id_rule = ur.id_rule) 
                join kriteria k on (k.id_kriteria = rd.id_kriteria and k.parameter_id = ".$param_id.") 
                where ur.id_user=".$user_id." and tanggal_rekomendasi='".$tanggal_rekomendasi."'")->result();  
                $data['user_id'] = $user_id;
                $data['param_id'] = $param_id;
				$data['tgl_rek'] = $tanggal_rekomendasi;
				if(isset($_POST['show_result']) && $_POST['show_result']==1){
					$data['produk'] = $this->db->query("SELECT pt.*, bt.name
					from user_rekomendasi ur 
					join rule r on (ur.id_rule = r.id_rule)
					join products_tabel pt on(pt.id_product = r.id_product) 
					join brands_tabel bt on(bt.id_brand = pt.id_brand)
					where ur.id_user = ".$user_id." and tanggal_rekomendasi='".$tanggal_rekomendasi."'")->result();
					$data['jawaban'] = $this->db->query("select p.parameter_name,k.kriteria_name from user_jawaban uj join parameter p on (p.id_parameter=uj.id_parameter) join kriteria k on (k.id_kriteria = uj.id_kriteria) where uj.user_jawaban_tanggal='".$tanggal_rekomendasi."' order by uj.id_parameter")->result();
					$data['title'] = "Hasil Rekomendasi | Adney's Shop";
					$data['kriteria'] = $this->db->query("SELECT k.id_kriteria,k.kriteria_name,p.parameter_name
					from user_rekomendasi ur 
					join rule r on (ur.id_rule = r.id_rule)
	                join rule_detail rd on(r.id_rule = rd.id_rule) 
	                join kriteria k on (rd.id_kriteria = k.id_kriteria) 
					join parameter p on (k.parameter_id=p.id_parameter) 
	                where ur.id_user=".$user_id." and tanggal_rekomendasi='".$tanggal_rekomendasi."'")->result();
					$this->load->view('public/rekomendasi/hasil', $data);
				}else{
					$this->load->view('public/rekomendasi/parameter', $data);
				}
			}else if($param_id>6){
				//ini adalah proses terakhir inferensi (parameter id > jumlah data parameter)
				$kriteria_pilihan = $this->input->post('kriteria');
				//ambil data semua data user rekomendasi
				$rekomen = $this->db->query("select * from user_rekomendasi where id_user=".$user_id." and tanggal_rekomendasi='".$tanggal_rekomendasi."'")->result();
                foreach($rekomen as $r){
                	//melakukan pengecekan data rule berdasarkan id kriteria yang dipilh sebelumnya
                    $cek_kriteria = $this->db->query("select * from rule_detail rd where rd.id_rule=".$r->id_rule." and rd.id_kriteria=".$kriteria_pilihan." and rd.id_parameter = ".($param_id-1)."")->result();
                    if(empty($cek_kriteria)){
                    	//hapus data rule yang tidak memiliki id kriteria yag dipilih sebelumnya dari tabel user rekomendasi
                        $this->db->query('delete from user_rekomendasi where id_user='.$user_id.' and id_rule='.$r->id_rule." and tanggal_rekomendasi='".$tanggal_rekomendasi."'");
                    }
                }
                //untuk menyimpan jawaban user
                $array_jawaban = array(
                	'user_jawaban_tanggal'=>$tanggal_rekomendasi,
                	'id_parameter' => ($param_id-1),
                	'id_kriteria' => $kriteria_pilihan,
                	'id_user' => $user_id,
                );
                $this->db->insert('user_jawaban',$array_jawaban);
                //ambil data rule yang tersisa dari tabel user rekomendasi dan join ke tabel produk
				$data['produk'] = $this->db->query("SELECT pt.*, bt.name
				from user_rekomendasi ur 
				join rule r on (ur.id_rule = r.id_rule)
				join products_tabel pt on(pt.id_product = r.id_product) 
				join brands_tabel bt on(bt.id_brand = pt.id_brand)
				where ur.id_user = ".$user_id." and tanggal_rekomendasi='".$tanggal_rekomendasi."'")->result();
				// ambil smua data kriteria yang dipilih user
				$data['kriteria'] = $this->db->query("SELECT k.id_kriteria,k.kriteria_name,p.parameter_name
				from user_rekomendasi ur 
				join rule r on (ur.id_rule = r.id_rule)
                join rule_detail rd on(r.id_rule = rd.id_rule) 
                join kriteria k on (rd.id_kriteria = k.id_kriteria) 
				join parameter p on (k.parameter_id=p.id_parameter) 
                where ur.id_user=".$user_id." and tanggal_rekomendasi='".$tanggal_rekomendasi."'")->result();
				$data['title'] = "Hasil Rekomendasi | Adney's Shop";
				$this->load->view('public/rekomendasi/hasil', $data);
				//end inference engine
			}
		}else{                        
			redirect('public/recommended/parameter');
		}
	}

}