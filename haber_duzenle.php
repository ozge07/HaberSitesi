<?php 
$this->load->view('_header');
?>
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
	 	  		<div class="col-md-6 contact-top">
	 	  		
			  
			 <form method="post" action="<?=base_url()?>uye_haber/haber_guncelle/<?=$veri[0]->Id?>">
			     	<header>
					<h2>Üye Hesap Bilgileri</h2>
			  	</header><br><br>


			  	<div class="list-group col-xs-5">
			  		<a href="#" class="list-group-item active">&nbsp;<span class="hidden-xs"><?=$uye[0]->adsoy?></span> 
                    </span>&nbsp;</a>
                    <a href="<?=base_url()?>uye/hesabim" class="list-group-item">Hesabım</a>
                    <a href="<?=base_url()?>uye_haber/haberler_kaydet" class="list-group-item">Haber ekle</a>
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

                    <div class="col-xs-5 s-grid-right contact-top">
						     <form class="form-horizontal" method="post" action="<?=base_url()?>uye_haber/haber_guncelle/<?=$veri[0]->Id?>">
                                           
                                                    <label for="inputName" class="col-md-3 control-label">
                                                            Haber Adı:
                                                        </label>
                                                        <input type="adi" value="<?=$veri[0]->adi?>" placeholder="Ad Soyad*" name="adi"  class="form-control"><br>

                                            

                                                     
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Kategori:
                                                        </label>
                                                            <select class="form-control" required name="kategori" >
                                                                <option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
                                                           <?php foreach($veriler as $rs) { ?>

                                                                <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
                                                            <?php } ?>
                                                            </select><br>
                                                           
                                                        
                                                    

                                                    <label for="inputPassword" class="col-md-3 control-label">
                                                            Description:
                                                        </label><input type="description" placeholder="Description*" value="<?=$veri[0]->description?>" name="description"  class="form-control"><br>


                                                    
                                                        
                                                           <h5><b>Açıklama:</b></h5>
                                                        
                                                                <textarea name="aciklama" id="editor1"  rows=15 cols=30><?=$veri[0]->aciklama?>
                                                                </textarea>
                                                                <script>
                                                                  CKEDITOR.replace( 'editor1' );
                                                                </script><br>
                                                          

                                                     <label for="inputName" class="col-md-3 control-label">
                                                            Keywords:
                                                        </label><input type="keywords" placeholder="Keywords*" value="<?=$veri[0]->keywords?>" name="keywords"  class="form-control"><br>

                                                     
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Grubu:
                                                        </label>
                                                       
                                                            <select class="form-control" required name="grubu">
                                                                <option><?=$veri[0]->grubu?></option>
                                                                <option>son_dakika</option>
                                                                <option>gundem</option>
                                                            </select><br>

                                                   

                                                   
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Yetki:
                                                        </label>
                                                        
                                                            <select class="form-control" required       name="yetki" value="<?=$veri[0]->yetki?>">
                                                                <option><?=$veri[0]->Yetki?></option>
                                                                <option>Üye</option>
                                                                <option>Admin</option>
                                                            </select><br>


                                                            <label for="inputName" class="col-md-3 control-label">
                                                            Resim:
                                                        </label>
                                                                <input id="inputName"  type="file" name="resim" placeholder="Yükleme için gözat" class="form-control"><br>

                                                <div class="form-actions pal">
                                                    <div class="form-group mbn">
                                                        <div class="col-md-offset-3 col-md-6">
                                                            <button type="submit" class="btn btn-primary">
                                                                Kaydet
                                                            </button>
                                                        </div>
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
<?php
$this->load->view('_footer');
?>