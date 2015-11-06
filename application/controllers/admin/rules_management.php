<?php 

class rules_management extends CI_controller{

	public function __construct(){
		parent::__construct();
		$login = $this->session->userdata('is_login');
		if (!isset($login) || $login=="") {
			redirect("");
		}
	}

	public function index(){
		//mengambil data aturan/rules
		$rules = $this->db->query("select * from rule")->result();
		// array untuk menyimpan data representasi aturan
		$data['array_rules'] = array();
		$no = 1;
		foreach($rules as $r){
			//mengambil data aturan detail / premis-premis dari aturan
			$rule_detail = $this->db->query("select * from rule_detail where id_rule=".$r->id_rule)->result();
			$text = "IF ";
			foreach($rule_detail as $rd){
				$kriteria = $this->db->query("select k.kriteria_name,p.parameter_name from kriteria k join parameter p on (k.parameter_id = p.id_parameter) where k.id_kriteria=".$rd->id_kriteria)->row();
				$text .= $kriteria->parameter_name.'='.$kriteria->kriteria_name.' AND ';
			}
			$text = substr($text, 0,-4);
			$product = $this->db->query("select * from products_tabel where id_product=".$r->id_product)->row();
			$text .= "THEN ".$product->product_name;
			$data['array_rules'][$no]['id_rule'] = $r->id_rule;
			$data['array_rules'][$no]['kode'] = 'R'.$no;
			$data['array_rules'][$no]['rule_text'] = $text;
			$no++;
		}

		$data['title'] = "Rules List | Adney's Shop";
        $data['user_name'] = $this->session->userdata('user_name');
        $data['tipe_kebutuhan'] = $this->db->query("select * from kriteria where parameter_id=1")->result();
        $data['harga'] = $this->db->query("select * from kriteria where parameter_id=2")->result();
        $data['processor'] = $this->db->query("select * from kriteria where parameter_id=3")->result();
        $data['memori'] = $this->db->query("select * from kriteria where parameter_id=4")->result();
        $data['storage'] = $this->db->query("select * from kriteria where parameter_id=5")->result();
        $data['brand'] = $this->db->query("select * from kriteria where parameter_id=6")->result();
        $data['produk'] = $this->db->query("select * from products_tabel")->result();
        if ($this->session->userdata('id_status') == 1) {
        	$this->load->view('admin/rules/rules_management_list', $data);
        } else {
        	redirect('public/homes');
        }
	}

	public function add(){
		if(!empty($_POST)){
			$id_tipe_kebutuhan = $this->input->post('tipe_kebutuhan');
			$id_harga = $this->input->post('harga');
			$id_processor = $this->input->post('processor');
			$id_memori = $this->input->post('memori');
			$id_storage = $this->input->post('storage');
			$id_brand = $this->input->post('brand');
			$id_produk = $this->input->post('produk');
			$last_id = $this->db->query("select rule_kode from rule order by id_rule desc")->row();
			$last_id = intval(str_replace("R", "", $last_id->rule_kode));
			$new_id = 'R'.($last_id+1);
			$this->db->insert("rule",array('rule_kode'=>$new_id,'id_product'=>$id_produk));
			$id_rule = $this->db->insert_id();
			$this->db->insert("rule_detail",array('id_kriteria'=>$id_tipe_kebutuhan,'id_parameter'=>1,'id_rule'=>$id_rule));
			$this->db->insert("rule_detail",array('id_kriteria'=>$id_harga,'id_parameter'=>2,'id_rule'=>$id_rule));
			$this->db->insert("rule_detail",array('id_kriteria'=>$id_processor,'id_parameter'=>3,'id_rule'=>$id_rule));
			$this->db->insert("rule_detail",array('id_kriteria'=>$id_memori,'id_parameter'=>4,'id_rule'=>$id_rule));
			$this->db->insert("rule_detail",array('id_kriteria'=>$id_storage,'id_parameter'=>5,'id_rule'=>$id_rule));
			$this->db->insert("rule_detail",array('id_kriteria'=>$id_brand,'id_parameter'=>6,'id_rule'=>$id_rule));
			redirect('admin/rules_management');
		}
	}

	public function delete(){
		if(!empty($_POST)){
			$id_rule = $this->input->post('id_rule');
			$this->db->where('id_rule',$id_rule);
			$this->db->delete('rule_detail');
			$this->db->where('id_rule',$id_rule);
			$this->db->delete('rule');
			redirect('admin/rules_management');
		}
	}

}