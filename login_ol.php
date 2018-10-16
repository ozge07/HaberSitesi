
	<div class="main-body">
		<div class="wrap">
		<ol class="breadcrumb">
			  <li><a href="<?=base_url()?>">Anasayfa</a></li>
			  <li class="active">Login</a></li>
		</ol>

		<div class="about-page">
			<div class="col-md-8 content-left">
				<div class="about">
					<?php 
			     	if ($this->session->flashdata("mesaj")) { ?>
                        <div>
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close"></button>
                            <span class="badge badge-warning"><strong><?=$this->session->flashdata("mesaj")?></strong></span>
                        </div>
                    <?php } ?>
					
				<div class="contact_grid">

	 	  		<div class="col-md-6 contact-top">
	 	  		<header>
					<h2>Kayıt Ol</h2>
			  	</header>



			  	<p class="contact_msg">Bilgilerinizi giriniz</p>
			  
			     <form method="post" action="<?=base_url()?>home/kayit_ol">
			     	

					<div class="to">
						<div class="col-sm-12 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="adsoy" name="adsoy" placeholder="Ad Soyad" class="form-control"></div>
                                </div>
                        </div><br>
                     	<div class="col-sm-12 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="email" name="email" placeholder="Email*"  class="form-control"></div>
                                </div>
                        </div>

                        <div class="col-sm-12 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="password" name="sifre" placeholder="Şifre*" class="form-control"></div>
                                </div>
                        </div>	
                        
						<div class="col-sm-12 controls">
                                <div class="row">
                                    <div class="col-xs-9">
                                    	<select class="form-control" required name="yetki">
                                            <option>Üye</option>
                                            <option>Admin</option>
                                       	</select>
                                   </div>
                                </div>
                        </div><br>
                        
						<div class="col-sm-12 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="sehir" name="sehir" placeholder="Sehir" class="form-control"></div>
                                </div>
                        </div><br>

					</div>
					
	                <div class="form-submit1">
			           <input name="submit" type="submit" id="submit" value="Kayıt ol"><br>
			           <p class="m_msg">Lütfen geçerli e-posta adresi yazınız</p>
					</div>
					<div class="clearfix"> </div>
                </form>
         	</div>
          <div class="col-md-6 contact-top_right">
			  <header>
							<h2>Giriş Yap</h2>
			  </header>

			  
			  <p class="contact_msg">Bilgilerinizi giriniz</p>
			  <br><br>
			  <form method="post" action="<?=base_url()?>home/login">
					<div class="to">
						
                     	<div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="email" name="email" placeholder="Email*"  class="form-control"></div>
                                </div>
                        </div>

                        <div class="col-sm-9 controls">
                                <div class="row">
                                    <div class="col-xs-9"><input type="password" name="sifre" placeholder="Şifre*" class="form-control"></div>
                                </div>
                        </div>	
					</div>
					
	                <div class="form-submit1">
			           <br><br><input name="giriş_yap" type="submit" id="submit" value="Giriş Yap"><br>
			           <p class="m_msg">Lütfen geçerli e-posta adresi yazınız</p>
					</div>
					<div class="clearfix"> </div>
                </form>
			  
	 	  </div>
		<div class="clearfix"></div>
    </div>
				</div>
			</div>
			
		<div class="clearfix"></div>
	</div>		
	</div>
	</div>
</body>
</html>