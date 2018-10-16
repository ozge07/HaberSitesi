<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
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
	 	  		<div class="col-md-10 contact-top">
	 	  		
			  
			 <form method="post" action="<?=base_url()?>uye_haber/haberler_kaydet">
			     	<header>
					<h2>Üye Hesap Bilgileri</h2>
			  	</header><br><br>


			  	<div class="list-group col-xs-3">
			  		<a href="#" class="list-group-item active">&nbsp;<span class="hidden-xs"><?=$uye[0]->adsoy?></span> 
                    </span>&nbsp;</a>
                    <a href="<?=base_url()?>uye/hesabim" class="list-group-item">Hesabım</a>
                    <a href="<?=base_url()?>uye_haber/haberler_ekle" class="list-group-item">Haber ekle</a>
			  		<a href="#" class="list-group-item">Mesajlarım</a>
			  		<a href="<?=base_url()?>uye_haber" class="list-group-item">Haberlerim</a>
			  		<a href="<?=base_url()?>uye/cikis" class="list-group-item">Çıkış</a>
			  	</div></form>

			     	<?php 
			     	if ($this->session->flashdata("mesaj")) { ?>
                        <div>
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close"></button>
                            <span class="badge badge-warning"><strong><?=$this->session->flashdata("mesaj")?></strong></span>
                        </div>
                    <?php } ?>

                    <div class="col-md-10 s-grid-right contact-top">
						     <form class="form-horizontal" method="post" action="<?=base_url()?>uye_haber/haberler_kaydet">
                                            <div class="form-body pal">
                                                    <label for="inputName" class="col-md-3 control-label">
                                                            Haber Adı:
                                                        </label><input type="adi" placeholder="Haber Adi*" name="adi"  class="form-control"><br>

                                            

                                                     
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Kategori:
                                                        </label>
                                                            <select class="form-control" required name="kategori" >
                                                            <?php foreach($kategoriler as $rs) 
                                                            { 
                                                            ?>
                                                                <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
                                                            <?php 
                                                            }
                                                            ?>   
                                                            </select><br>
                                                           
                                                        
                                                    

                                                    <label for="inputPassword" class="col-md-3 control-label">
                                                            Description:
                                                        </label><input type="description" placeholder="Description*" name="description"  class="form-control"><br>


                                                    
                                                        
                                                           <h5><b>Açıklama:</b></h5>
                                                        
                                                                <textarea name="aciklama" id="editor1"  rows=15 cols=30>
                                                                </textarea>
                                                                <script>
                                                                  CKEDITOR.replace( 'editor1' );
                                                                </script><br>
                                                          

                                                     <label for="inputName" class="col-md-3 control-label">
                                                            Keywords:
                                                        </label><input type="keywords" placeholder="Keywords*" name="keywords"  class="form-control"><br>

                                                     
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Grubu:
                                                        </label>
                                                       
                                                            <select class="form-control" required name="grubu">
                                                                <option>son_dakika</option>
                                                                <option>gundem</option>
                                                            </select><br>

                                                    <label for="inputName" class="col-md-3 control-label">
                                                            Tarih:
                                                        </label><input type="date" placeholder="Tarih*" name="tarih" class="form-control"><br>

                                                   
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Yetki:
                                                        </label>
                                                        
                                                            <select class="form-control" required       name="yetki">
                                                                <option>Üye</option>
                                                                <option>Admin</option>
                                                            </select><br>

                                                           
                                                        </div>
                                                    </div>


                                                </div>
                                              

                                                <div class="form-actions pal">
                                                    <div class="form-group mbn">

                                                        <div class="col-md-offset-9 col-md-6">
                                                                            
                                                <br>
                                                <br>
                                                            <button type="submit" class="btn btn-primary">
                                                                Kaydet
                                                            </button>

                                                <br>
                                                <br>
                                                        </div>
                                                    </div>

                                                </div>


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