<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('Database_Model');
                $this->load->helper('url');

                if(!$this->session->userdata("uye_session"))
                	redirect(base_url().'home/login_ol');
        }

	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result(); 

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler WHERE kaynak='Admin'");
		$data["Admin"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		$query=$this->db->get("kategoriler");
		$data["kategoriler"]=$query->result();


		$data["sayfa"]="Üye Paneli";
		$data["menu"]="uye";

		
		$this->load->view('_header',$data);
		$this->load->view('hesabim');
		$this->load->view('_footer');
	

	}

	public function cikis()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url());
	}

	public function hesabim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result(); 

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM haberler WHERE grubu='son_dakika'");
		$data["son_dakika"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Hesabı || ";
		$data["menu"]="uye";

		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		$this->load->view('_header',$data);
		$this->load->view('hesabim');
		$this->load->view('_footer');
	}

	public function uye_guncelle()
	{
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'sifre'=>$this->input->post('sifre'),
			'tel'=>$this->input->post('tel'),

		);
		$id=$this->session->uye_session["id"];

		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj","Uye Bilgileriniz Güncellendi");
		redirect(base_url().'uye/hesabim');
	}

	



	

}

