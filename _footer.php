
	<!-- footer-section-starts-here -->
	<div class="footer">
		<div class="footer-top">
			<div class="wrap">
				<div class="col-md-3 col-xs-6 col-sm-4 footer-grid">
					<h4 class="footer-head">Hakkımızda</h4>
					<p>Olay-haber.xyz;Güncel,Politika,Spor,Magazin,Kültür ve Sanat,Dış Haberler ve diğer tüm kategorilerde güncel haber sunmaktayız</p>
					<p>Tarafsız habercilik,Açıklık,Yasalara %100 uygun haber sitesiyiz</p>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-2 footer-grid">
					<h4 class="footer-head">Kategoriler</h4>
					<ul class="cat">

						<?php
					foreach($kategoriler as $rs)
				{
				?>
					<li><a href="<?=base_url()?>home/kategori/<?=$rs->Id?>/<?=$rs->adi?>"><?=$rs->adi?></a>
					</li>
				<?php 
				}
				?>
					
					</ul>
				</div>
			<div class="col-md-4 col-xs-6 col-sm-6 footer-grid">
					<h4 class="footer-head">Galeri</h4>
				<ul class="flickr">
					<?php 
					foreach($resimler as $rs)
					{

					?>
					<div class="col-xs-6 col-md-3 related-grids">
						<a class="thumbnail">
						<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
						</a>
					</div>	
					<?php 
					} 
					?>
					<div class="clearfix"></div>
				</ul>
			</div>
			<div class="col-md-3 col-xs-12 footer-grid">
					<h4 class="footer-head">İletişim</h4>
					<address>
				<ul class="location">
							
						</li></br></span>
						</li>		
						<li><span class="glyphicon glyphicon-map-marker"></span></li>
						<li>Adres:Karabük Üniversitesi Demir Çelik Kampüsü 78050 KARABÜK</li>
						<div class="clearfix"></div>
				</ul>	
				<ul class="location">
						<li><span class="glyphicon glyphicon-earphone"></span></li>
						<li><h4>Birim Telefon:</h4>
								</p>+90 370 418 73 00</p>
								<p>+90 370 418 73 01</p>
						</li>
						<div class="clearfix"></div>
				</ul>	
				<ul class="location">
						<li><span class="glyphicon glyphicon-envelope"></span></li>
						<li><a href="mailto:info@example.com">oozgecengiz@hotmail.com</a></li>
						<div class="clearfix"></div>
				</ul>						
					</address>
			</div>
						<div class="clearfix"></div>
		</div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
				<div class="copyrights col-md-6">
					<p> © 2015 Express News. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
				</div>
				<div class="footer-social-icons col-md-6">
					<ul>
						<li><a class="facebook" href="https://www.facebook.com/"></a></li>
						<li><a class="twitter" href="https://twitter.com/"></a></li>
						<li><a class="flickr" href="https://www.flickr.com/"></a></li>
						<li><a class="googleplus" href="https://plus.google.com/?hl=tr"></a></li>
						<li><a class="dribbble" href="https://dribbble.com/"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- footer-section-ends-here -->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				wrapID: 'toTop', // fading element id
				wrapHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
</body>
</html>