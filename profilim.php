
	<div class="main-body">
		<div class="wrap">
		<ol class="breadcrumb">
			  <li><a href="<?=base_url()?>">Anasayfa</a></li>
			  <li class="active">Üye Hesap</a></li>
		</ol>

		<div class="about-page">
			<div class="content-left">
				<div class="about">
					
				<div class="contact_grid">
	 	  		<div class="col-md-6 contact-top">
	 	  		
			  
			     <form method="post" action="<?=base_url()?>uye/profil_guncelle/<?=$veri[0]->Id?>">
			     	<header>
					<h2>Üye Hesap Bilgileri</h2>
			  	</header><br><br>


			  	<div class="list-group col-xs-5">
			  		<a href="#" class="list-group-item active">&nbsp;<span class="hidden-xs"><?=$this->session->uye_session["adsoy"]?></span>
                        
                    </span>&nbsp;</a>
			  		<a href="#" class="list-group-item">Profilim</a>
			  		<a href="#" class="list-group-item">Mesajlarım</a>
			  		<a href="#" class="list-group-item">Favori Haberlerim</a>
			  		<a href="#" class="list-group-item">Çıkış</a>
			  	</div>

			     	<?php 
			     	if ($this->session->flashdata("mesaj")) { ?>
                        <div>
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close"></button>
                            <span class="badge badge-warning"><strong><?=$this->session->flashdata("mesaj")?></strong></span>
                        </div>
                    <?php } ?>

                    <div class="col-xs-5 s-grid-right contact-top">
						     <form>
								<div class="to">
			                     	Adı Soyadı  :<input type="adsoy" name="adsoy" value="<?=$this->session->uye_session["adsoy"]?>"  class="form-control"><br> 
								 	E-mail      :<input type="email" name="email" placeholder="Email*" value="<?=$this->session->uye_session["email"]?>" class="form-control"><br> 
								 	Yetki       :<input type="yetki" name="yetki" placeholder="Yetki*" value="<?=$this->session->uye_session["yetki"]?>" class="form-control"><br> 
								 	Telefon  :<input type="tel" placeholder="Tel*" name="tel" value="<?=$uye[0]->tel?>"  class="form-control"><br>
								</div>
				                
			                 	<div class="form-submit1">
			           				<input name="guncelle" type="submit" id="submit" value="Güncelle"><br>
			           				<p class="m_msg">Lütfen geçerli e-posta adresi yazınız</p>
								</div>
								<div class="clearfix"> </div>
                			</form>
			        </div>

				
	                
         	</div>
   		 </div>
		</div>
	</div>
	<div class="clearfix"></div>
	</div>

	</div>
	</div>
</body>
</html>