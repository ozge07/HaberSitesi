<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?=$sayfa?> <?=$veri[0]->adi?></title>
<link href="<?=base_url()?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="<?=$veri[0]->description?>"/>
<meta name="keywords" content="<?=$veri[0]->keywords?>" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="<?=base_url()?>assets/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	</script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<!-- header-section-starts-here -->
	<div class="header">
		<div class="header-top">
			<div class="wrap">
				<div class="top-menu">
					<ul> 
						
						<li class="active"><b>
							<a href="<?=base_url()?>">Anasayfa</a></b>
						</li>
						<li>
							<a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a>
						</li>
						<li>
							<a href="<?=base_url()?>home/iletisim">İletişim</a>
						</li>
						<li>
							<a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a>
						</li>
						<?php
							if($this->session->userdata("uye_session"))
						{?>

							<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span>
								<?=$this->session->uye_session["adsoy"]?>
							 <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?=base_url()?>uye/hesabim"><b>Hesabım</b></a><br></li>
							<li class="divider"></li>
							
							<li>
								<a href="<?=base_url()?>uye/cikis"><b>Çıkış</b></a><br></li>
							<li class="divider"></li>
							
						</ul>	
							</li>
						</ul>

				</div>
							
							<?php }
							 else { 
							 ?> 
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="caret"></span>Üye
						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>uye/yeni_uye">Yeni üye kaydı</a><br></li>
							<li><a href="<?=base_url()?>uye/sifremi_unuttum">Şifremi unuttum</a><br></li>
							
							<form method="post" action="<?=base_url()?>home/login">
								<div>
									<input type="email" name="email" id="inputEmail" placeholder="Email">
								</div>
								<div>
									<input type="password" name="sifre" id="inputPassword" placeholder="Şifre">
								</div>
								<div>
									<label>
										<input type="checkbox">Beni Hatırla</label>
										<button type="submit">Giriş Yap</button>
									</div>
								</form>
						</ul>
					  </li>
					  <?php }
					  ?>
					</ul>
				</div>
			<div class="num">
						<ul>
						<li class="active"><b><a href="<?=base_url()?>home/login_ol">Login</a></b></li>
						</ul>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="logo text-center">
				<a href="<?=base_url()?>">
					<img height="170" src="<?=base_url()?>assets/images/logos.jpg" alt="" />
				</a>
			</div>
			<div class="navigation">
				<nav class="navbar navbar-default" role="navigation">
		    <div class="wrap">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
			</div>
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

				<?php
					foreach($kategoriler as $rs)
				{
				?>
					<li><a href="<?=base_url()?>home/kategori/<?=$rs->Id?>/<?=$rs->adi?>"><?=$rs->adi?></a>
					</li>
				<?php 
				}
				?>

					
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Canlı Yayın<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="https://www.atv.com.tr/webtv/canli-yayin">ATV</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="https://www.kanald.com.tr/canli-yayin">KanalD</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="http://www.haberturk.com/canliyayin">HaberTürk</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="https://www.kanald.com.tr/canli-yayin">StarTv</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="https://www.ntv.com.tr/canli-yayin/ntv">NTV</a>
							</li>
						</ul>
					  </li>

					  <li><h4><a href="<?=base_url()?>home/son_dakika">SON DAKİKA</a></h4></li>

					<div class="clearfix"></div>	
				</ul>
	
				<div class="search">
					<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>

						</div>
				    </div>
					<!-- search-scripts -->
					<script src="<?=base_url()?>assets/js/classie.js"></script>
					<script src="<?=base_url()?>assets/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
					</div><br>
					<?php 
					echo date('d.m.Y H:i:s',time() + 7200);
					?>
					<div class="clearfix"></div>

				</div>

			</div>
			
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
			</div>

		</nav>
		</div>
	</div>
	<!-- header-section-ends-here -->
	<div class="wrap">
		<div class="move-text">
			<div class="breaking_news">
				<h2></h2>
			</div>
			<div class="marquee">
				<div class="marquee1">

					</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.marquee.min.js"></script>
			<script>
			  $('.marquee').marquee({ pauseOnHover: true });
			  //@ sourceURL=pen.js
			</script>
		</div>
	</div>
	<!-- content-section-starts-here -->