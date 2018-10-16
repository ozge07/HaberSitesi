<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye_haber extends CI_Controller {
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

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Paneli";
		$data["menu"]="uye";

		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		$query=$this->db->get("kategoriler");
		$data["kategoriler"]=$query->result();

		$id=$this->session->uye_session["id"];
		$data["veriler"]=$this->Database_Model->get_uye_haberler($id);
		$this->load->view('uye_haber_liste',$data);



	}


	public function haberler_ekle()
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
		$this->load->view('haber_ekle');
		$this->load->view('_footer');
	}

	public function haberler_kaydet()
	{
		

		$data=array(
			'adi' => $this->input->post('adi'), //post('adi') formdaki isim
			'kategori' => $this->input->post('kategori'),
			'description' => $this->input->post('description'),
			'aciklama' => $this->input->post('aciklama'),
			'keywords' => $this->input->post('keywords'),
			'grubu' => $this->input->post('grubu'),
			'tarih' => $this->input->post('tarih'),
			'yetki' => $this->input->post('yetki'),
			'uye_id'=>$this->session->uye_session["id"]

		);

		

		$this->db->insert("uye_haberleri",$data);
		$this->session->set_flashdata("mesaj","Haber kaydı gerçekleştirildi!");
		
		redirect(base_url().'uye_haber'); 

	}

	public function haberler_duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
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


		$query=$this->db->query("SELECT * FROM kategoriler");
		$data["veriler"]=$query->result();
		
		$id=$this->session->uye_session["id"];
		$data["veri"]=$this->Database_Model->get_uye_haberi($id);
		$this->load->view('haber_duzenle',$data);
	}

	public function haber_guncelle($id)
	{

		//Form verilerini alacağız
		$data=array(
			'adi' => $this->input->post('adi'), //post('adsoy') formdaki isim
			'kategori' => $this->input->post('kategori'),
			'description' => $this->input->post('description'),
			'aciklama' => $this->input->post('aciklama'),
			'keywords' => $this->input->post('keywords'),
			'grubu' => $this->input->post('grubu'),
			
			'yetki' => $this->input->post('yetki')
		);

		$this->load->model('Database_Model');
		$this->session->set_flashdata("mesaj","Haber Güncellendi!");
		$this->Database_Model->update_data("uye_haberleri",$data,$id);


		redirect(base_url().'uye_haber');

	}

	public function sil($id)
	{
		$this->db->query("DELETE FROM uye_haberleri WHERE Id=$id");
		redirect(base_url().'uye_haber');

	}

	public function resim_yukle($id)
		
	{
		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();

		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result(); 
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Hesabı | ";

		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		$query = $this->db->query("SELECT * FROM uye_haberleri WHERE Id = $id");
		$data["veri"]=$query->result();
		
		$data["id"]=$id;
		$this->load->view('haberler_resim_yukle',$data);

	}

	public function resim_kaydet($id)
	{
		$data["id"]=$id;
		
		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;


        //Ayarlar ile kütüphaneyi çağır
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim')) //Yükle -> Eğer hata varsa
        {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
            redirect(base_url().'uye_haber/resim_yukle/'.$id);
        }
        else  //Hata yoksa
        {
            $upload_data = $this->upload->data();

            $data=array(
			'resim' =>$upload_data["file_name"]
		    );

		    $this->load->model('Database_Model');
		    $this->Database_Model->update_data("uye_haberleri", $data, $id);
		    $this->session->set_flashdata("mesaj","Haber Güncellendi");
            redirect(base_url().'uye_haber');

		}

}
}

