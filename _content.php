<div class="articles">
					<header>
						<h3 class="title-head">Gündem</h3>
					</header>

					<?php
					foreach($yeni as $rs)
					{
					?>
				<div class="article">

					<div class="article-left">
						<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber"><h3><?=$rs->adi?></h3></a>
						<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>">
						<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="">
						</a>						
					</div>

					<div class="article-right">

							<div class="article-title">
								<p><?=$rs->tarih?></p>
							</div>

							<div class="article-text">
								<h3><?=$rs->adi?></h3><hr>
								<p><?=$rs->aciklama?></p>
								<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber">
								</a><br><br>
								<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber">
								<img src="<?=base_url()?>assets/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>

					</div>
					<div class="clearfix"></div>
				</div>
				<?php 
					}
				?>
</div>



				<div class="life-style">
					<header>
						<h3 class="title-head">Genel Haberler</h3>
					</header>


					<?php
					foreach($random as $rs)
					{
					?>

					<div class="life-style-grids">

						<div class="life-style-left-grid"><hr>
						<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title=""></a>
						<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>">
						<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="">
						<a class="title" href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title=""><h3><?=$rs->adi?></h3>	
						</a>
						</a>
						</div>

						<div class="life-style-right-grid">

							<div class="article-title">
								<p><?=$rs->tarih?></p>
							</div>

							<div class="article-text">
								<h3><?=$rs->adi?></h3><hr>
								<p><?=$rs->aciklama?></p>
								<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber">
								</a><br><br>
								<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber">
								<img src="<?=base_url()?>assets/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>

					</div>
					<div class="clearfix"></div>

					</div>


					<?php 
						} 
					?>
					
					</div>

					<div class="sports-top">
							<div class="s-grid-left">
								<div class="cricket">
									<header>
										<h3 class="title-head">Rastgele Haberler</h3>
									</header>

									<?php
									foreach($random as $rs)
									{
									?>

									<div class="c-sports-main">
											<div class="c-image">
												<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
											</div>


											<div class="c-text">
												<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber">
												<h2><?=$rs->adi?></h2>
												</a>
												<a class="power" href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>"></a>
												<p class="date"><?=$rs->tarih?></p>
												<a class="reu" href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>">
												<img src="<?=base_url()?>assets/images/more.png" alt="" />
												</a>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
									</div>
										<?php 
										} 
										?>

									</div>
								</div>


							<div class="s-grid-right">
								<div class="cricket">
									<header>
										<h3 class="title-popular">Yeniler</h3>
									</header>

									<?php
									foreach($yeni as $rs)
									{
									?>

									<div class="c-sports-main">
											<div class="c-image">
												<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
											</div>

											<div class="c-text">
												<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber">
												<h2><?=$rs->adi?></h2>
												</a>
												<a class="power" href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>"></a>
												<p class="date"><?=$rs->tarih?></p>
												<a class="reu" href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>">
												<img src="<?=base_url()?>assets/images/more.png" alt="" />
												</a>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
										</div>
										<?php 
										} 
										?>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
				</div>
			<div class="col-md-4 side-bar">
			<div class="first_half">

				<div class="list_vertical">
		         	 	<section class="accordation_menu">
						  <div>
						    <input id="label-1" name="lida" type="radio" checked/>
						   <label for="label-1" id="item1"><i class="ferme"> </i>Gündem<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
						    <div class="content" id="a1">
						    	<div class="scrollbar" id="style-2">
								 <div class="force-overflow">

								 		<?php
										foreach($yeni as $rs)
										{
										?>

										<div class="popular-post-grids">
										<div class="popular-post-grid">
											<div class="post-img">
												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" />
											</div>

											<div class="post-text">
												<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber"><h3><?=$rs->adi?></h3></a>
												<p><?=$rs->tarih?><a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span></a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span></a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span></a></p>
											</div>
											<div class="clearfix"></div>
										</div>
				
										<?php 
											}
										?>

									
									</div>
									</div>
                                </div>
                              </div>
						  </div>
						  <div>
						    <input id="label-2" name="lida" type="radio"/>
						    <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Gizle<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
						    <div class="content" id="a2">
						       <div class="scrollbar" id="style-2">
								   <div class="force-overflow">

								   	<?php
										foreach($yeni as $rs)
										{
										?>

										<div class="popular-post-grids">
										<div class="popular-post-grid">
											<div class="post-img">

												<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" />
											</div>

											<div class="post-text">
												<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title="yeni haber"><h3><?=$rs->adi?></h3></a>
												<p><?=$rs->tarih?><a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span></a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span></a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span></a></p>
											</div>
											<div class="clearfix"></div>
										</div>
				
										<?php 
											}
										?>
									
												</div>
											</div>
										</div>
								    </div>
								 	 </div>
								  <div>

								</div>
								</div>

                                </div>
						    </div>
						  </div>
						</section>
					 </div>
					 <div class="side-bar-articles">

					 					<?php
										foreach($yeni as $rs)
										{
										?>
										<div class="side-bar-article">
											
											<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
											<div class="side-bar-article-title">
												<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>" height=357 title=""><h3><?=$rs->adi?></h3></a>
											</div>
										</div>
										<?php 
											}
										?>
					 </div>
				</div>


					 <div class="secound_half">
					 <div class="tags">
						<header>
							<h3 class="title-head">Döviz</h3>
						</header>
						<p>
						<script src="https://dovizz.net/siteneekle/basit.js" type="text/javascript" charset="utf-8"></script>
						</p>
					 </div>					 
					 <div class="popular-news">
						<header>
							<h3 class="title-popular">Gündemdekiler</h3>
						</header>
						<div class="popular-grids">
							<div class="popular-grid">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/toyH1OCP6kg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

							</div>
							<div class="popular-grid">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/tPLLLsUHtvs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="popular-grid">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/C63Vs6ZvXIc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="popular-grid">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/itRqzlr8Wv8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					</div>
					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- content-section-ends-here -->