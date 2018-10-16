<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('Database_Model');
                $this->load->helper('url');
        }

	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler WHERE grubu='son_dakika'");
		$data["son_dakika"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler ORDER BY Id DESC LIMIT 5");//enson eklenen 4 ürün
		$data["yeni"]=$query->result();

		$query=$this->db->query("SELECT * FROM uye_haberleri WHERE durum='onaylandi'");
		$data["onaylandi"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler ORDER BY RAND() LIMIT 5");
		$data["random"]=$query->result();

		$query=$this->db->get("kategoriler");
		$data["kategoriler"]=$query->result();




		//Header meta tag bilgileri

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_content');
		$this->load->view('_footer');
	

	}


	public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler WHERE grubu='son_dakika'");
		$data["son_dakika"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda ||";
		$data["menu"]="hakkimizda";
		
		$this->load->view('_header',$data);
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
		
	

	}

	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler WHERE grubu='son_dakika'");
		$data["son_dakika"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim ||";
		$data["menu"]="iletisim";
		
		$this->load->view('_header',$data);
		$this->load->view('iletisim');
		$this->load->view('_footer');
	

	}

	public function bize_yazin()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler WHERE grubu='son_dakika'");
		$data["son_dakika"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Bize Yazın ||";
		$data["menu"]="bize_yazin";
		
		$this->load->view('_header',$data);
		$this->load->view('bize_yazin');
		$this->load->view('_footer');
	

	}

	public function mesaj_kaydet()
	{
		
		//Form verilerini alacağız
		$data=array(
			'adsoy' => $this->input->post('adsoy'), //post('adsoy') formdaki isim
			'email' => $this->input->post('eposta'),
			'tel' => $this->input->post('tel'),
			'mesaj' => $this->input->post('mesaj'),
			'IP' => $_SERVER['REMOTE_ADDR']
		);
		$this->db->insert("mesajlar",$data);
		
		$adsoy=$this->input->post('adsoy');
		$email=$this->input->post('email');

		//Email Ayarlarını veritabanından okuma
		$query=$this->db->get("ayarlar"); //settings tablosunun veritabanından çek
		$data["veri"]=$query->result(); //sonuçları veri değişkenine yükle

		//Email Server Ayarları
		$config=Array(
			'protocol'=>'mail',
			'smtp_host'=>$data["veri"][0]->smtpserver,
			'smtp_port'=>$data["veri"][0]->smtpport,
			'smtp_user'=>$data["veri"][0]->smtpemail,
			'smtp_pass'=>$data["veri"][0]->password,
			'mailtype'=>'html',
			'charset'=>'utf-8',
			'wordwrap'=>TRUE
		);

		//İstediğiniz şekilde mail içeriğini html olarak oluşturabiliriz

		$mesaj="Değerli : ".$adsoy."<br> Göndermiş olduğunuz mesaj alınmıştır.<br>En kısa sürede sizinle iletişime geçilecektir.<br>Teşekkür ederiz.";
		$mesaj.="==============================================<br>";
		$mesaj.=$data["veri"][0]->name."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->sehir."<br>";
		$mesaj.=$data["veri"][0]->tel."<br>";
		$mesaj.=$data["veri"][0]->fax."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		$mesaj.="Gönderdiğiniz Mesaj Aşağıdaki gibidir<br>===========<br>";
		$mesaj.=$this->input->post('mesaj');

		//Email gönderme
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail); //smtpemailden gönderilecek
		$this->email->to($email);//kullanıcıya gidecek
		$this->email->subject($data["veri"][0]->name." Form Alındı Mesajı");
		$this->email->message($mesaj);//göndereceğimiz mesaj

		//Send mail
		if($this->email->send())
			$this->session->set_flashdata("email_sent","Email başarı ile gönderildi.");
		else
		{
			$this->session->set_flashdata("email_sent","Email Gondermede Hata oluştu.");
			show_error($this->email->print_debugger()); //ayrıntılı hata dökümü için
		}
	

		$this->session->set_flashdata("mesaj","Mesajınız alınmıştır");
		redirect(base_url().'home/bize_yazin'); 
		
	}

	public function login_ol()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result(); 

		$query=$this->db->query("SELECT * FROM haberler WHERE grubu='son_dakika'");
		$data["son_dakika"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Login ||";
		$data["menu"]="uye";

		$this->load->view('_header',$data);
		$this->load->view('login_ol');
		$this->load->view('_footer');
	

	}

	public function yorum_ekle()
	      {
		
		    $data = array(
			'adsoy'=> $this->session->uye_session['adsoy'],
			'haber_id'=> $this->input->post('haber_id'),
			'yorum'=> $this->input->post('yorum')
			);
			
			$result = $this->Database_Model->insert_data("yorumlar",$data);
			if($result)
			{
			
		  	$this->session->set_flashdata("mesaj","Yorum basariyla eklendi.");
		  	redirect(base_url().'home/haberdetay/'.$this->input->post('haber_id'));
		  }

		  else
		  	{
		  		$this->session->set_flashdata("mesaj","Yorum eklenemiyor.");
		  	}
		  }



	public function login()
	{
		$email=$this->input->post("email");
		$sifre=$this->input->post("sifre");

		//Zarrlı kodlardan temizleme
		echo $email=$this->security->xss_clean($email);
		echo $sifre=$this->security->xss_clean($sifre);
		//exit();

		$this->load->model('Database_Model');
		$result=$this->Database_Model->login('uyeler',$email,$sifre);

		if($result)//databaseden veri gelir (eğer dolu geliyorsa)
		{
			//Kullanici var ise bilgileri diziye aktariliyor
			$sess_array=array(
				'id'=>$result[0]->Id,
				'yetki'=>$result[0]->yetki,
				'email'=>$result[0]->email,
				'adsoy'=>$result[0]->adsoy,
				'resim'=>$result[0]->resim
			);
			//print_r($sess_array); //ekrana yazma komutu
			//echo "Login oldu";
			//exit();
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url());


		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı veya şifre!");
			//echo hata var;
			redirect(base_url()."home/login_ol");
		}
		
	}


	public function kayit_ol()
	{
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'sifre'=>$this->input->post('sifre'),
			'yetki'=>$this->input->post('yetki'),
			'sehir'=>$this->input->post('sehir')
		);

		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydınız başarıyla gerçekleştirildi!");
		redirect(base_url()."home/login_ol");

	}



	public function haberdetay($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();

		$data["menu"]="haber";
		$data["sayfa"]=null;

		$data["yorum"]=$this->Database_Model->get_yorum($id);

		$data["veri"]=$this->Database_Model->get_haber($id);

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id=$id");
		$data["resimler"]=$query->result();


		$this->load->view('haber_detay',$data);
	}

	




	public function son_dakika()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
		$data["resimler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler WHERE grubu='son_dakika'");
		$data["son_dakika"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler ORDER BY Id DESC LIMIT 5");//enson eklenen 4 ürün
		$data["yeni"]=$query->result();

		$query=$this->db->query("SELECT * FROM haberler ORDER BY RAND() LIMIT 5");
		$data["random"]=$query->result();

		$query=$this->db->get("kategoriler");
		$data["kategoriler"]=$query->result();




		//Header meta tag bilgileri

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('son_dakika');
		$this->load->view('_footer');
	

	}

	public function sayfayok()
	{

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["menu"]="home";

		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('sayfayok');
		$this->load->view('_footer');


	}



	public function kategori($id)
	{
		//$result=$this->Database_Model->get_kategori($id);
		//if($result)
		//{
			$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$query->result();

			$query=$this->db->query("SELECT * FROM haberler_resim WHERE haber_id ORDER BY Id DESC LIMIT 8");
			$data["resimler"]=$query->result();

			$query=$this->db->query("SELECT * FROM haberler WHERE grubu='son_dakika'");
			$data["son_dakika"]=$query->result();

			$query=$this->db->query("SELECT * FROM haberler ORDER BY Id DESC LIMIT 5");//enson eklenen 4 ürün
			$data["yeni"]=$query->result();

			$query=$this->db->query("SELECT * FROM haberler ORDER BY RAND() LIMIT 5");
			$data["random"]=$query->result();


			$sorgu=$this->db->query("SELECT * FROM haberler WHERE kategori=$id");
			$data["veri"]=$sorgu->result();

			$data["menu"]="kategoriler";
			$data["sayfa"]=null;

			$query=$this->db->get("kategoriler");
			$data["kategoriler"]=$query->result();

			$this->load->view('_header',$data);
			$this->load->view('_slider');
			$this->load->view('kategori');
			$this->load->view('_footer');

	}
		
}


	



