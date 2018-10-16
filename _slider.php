<div class="main-body">
		<div class="wrap">
			<div class="col-md-8 content-left">
				<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
						<?php
							$say=0;
							$aktf=null;
							foreach($son_dakika as $rs)
							{
								$say++;
								if($say==1)
									$aktf="active";
								else
									$aktf=null;
								?>
							<li "<?=$aktf?>">
								<a href="<?=base_url()?>home/haberdetay/<?=$rs->Id?>">
								<img style="width:100%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="">
								</a>
								<i><h4><?=$rs->adi?></h4></i>
								<i><p><span><?=$rs->aciklama?></span></p></i>
							</li>
						<?php 
						} 
						?>
					</ul>
							
					</div>
				</div>