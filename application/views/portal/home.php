<!-- <?= print_r($event)?> -->
<div class="container">
	<div class="h-400x h-sm-auto">
		<div class="h-100 h-sm-auto oflow-hidden">

		<!--	<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-75 h-sm-300x"> -->
					<div id="carouselExampleIndicators" class="carousel slide pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x" data-ride="carousel">
						<!-- <ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol> -->
						<div class="carousel-inner">
						<?php
						$i = 0; 
						foreach ($event as $e) {	
							?>
							
								<div class="carousel-item <?php if($i++==0) echo 'active' ?>">
								<a href="<?=site_url('portal/read_event/'.$e->id_event)?>">
									<img class="d-block" src="<?= base_url('assets/uploads/event/'.$e->filename) ?>">
									<div class="abs-blr color-black p-20 bg-sm-color-7">
									<h3 class="mb-15 mb-sm-5 font-sm-13" style="background:white;"><b><?=$e->title?></b></h3>
									
									</div><!--abs-blr -->
								</a>
								</div>
								
								
							<?php } ?>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
				<!--	</div> -->
			</div><!-- w-1-3 -->

			<div class="float-left float-sm-none w-16-16 w-sm-100 h-100 h-sm-600x">

				<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
					<a class="side_menu pos-relative h-100 dplay-block" href="#">
						<div class="abs-tlr p-20 bg-sm-color-7 text-center">
							<div class="mb-10 mb-sm-5"><i class="fas fa-medal" style="font-size:5em"></i></div>
						</div><!--abs-blr -->
						<div class="abs-blr p-20 bg-sm-color-7 text-center">
							<h5 class="mb-10 mb-sm-5"><b>Pusat Unggulan</b></h4>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->

				<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
					<a class="side_menu pos-relative h-100 dplay-block" href="#">
						<div class="abs-tlr p-20 bg-sm-color-7 text-center">
							<div class="mb-10 mb-sm-5"><i class="far fa-file-alt" style="font-size:5em;"></i></div>
						</div><!--abs-blr -->
						<div class="abs-blr p-20 bg-sm-color-7 text-center">
							<h5 class="mb-10 mb-sm-5"><b>E Journal</b></h4>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->

			</div><!-- float-left -->

			<div class="float-left float-sm-none w-16-16 w-sm-100 h-100 h-sm-600x">

				<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
					<a class="side_menu pos-relative h-100 dplay-block" href="#">
						<div class="abs-tlr p-20 bg-sm-color-7 text-center">
							<div class="mb-10 mb-sm-5"><i class="fas fa-chart-bar" style="font-size:5em;"></i></div>
						</div><!--abs-blr -->
						<div class="abs-blr p-20 bg-sm-color-7 text-center">
							<h5 class="mb-10 mb-sm-5"><b>Info Grafis</b></h4>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->

				<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
					<a class="side_menu pos-relative h-100 dplay-block" href="#">
						<div class="abs-tlr p-20 bg-sm-color-7 text-center">
							<div class="mb-10 mb-sm-5"><i class="fas fa-tablet-alt" style="font-size:5em;"></i></div>
						</div><!--abs-blr -->
						<div class="abs-blr p-20 bg-sm-color-7 text-center">
							<h5 class="mb-10 mb-sm-5"><b>Aplikasi</b></h4>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->

			</div><!-- float-left -->

		</div><!-- h-2-3 -->

		</div><!-- h-2-3 -->
</div><!-- container -->


<section>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-lg-8">
				<h4 class="p-title"><b>PENGUMUMAN</b></h4>
				<div class="row">
					<div class="col-sm-12">
					<?php
							foreach($portal as $p){
						?>
						<a class="oflow-hidden pos-relative mb-20 dplay-block" href="<?= site_url('portal/read_pengumuman/'.$p->id_pengumuman) ?>">
						<?php if($p->sumber == 'unsri'){
							?>
								<div class="wh-100x abs-tlr"><img src="<?= base_url('assets/portal/images/unsri_logo_small.png') ?>" alt=""></div>
							<?php
						}else if($p->sumber == 'ristekdikti'){
							?>
								<div class="wh-100x abs-tlr"><img src="<?= base_url('assets/portal/images/ristekdikti_real_small.png') ?>" alt=""></div>
							<?php
						} ?>	
						
							<div class="ml-120 min-h-100x">
								<h5><b><?=$p->title?></b></h5>
								<h6 class="color-lite-black pt-10">by <span class="color-black"><b><?=$p->username?>,</b></span><?= $p->post_date?></h6>
							</div>
						</a><!-- oflow-hidden -->
							<?php } ?>

					</div><!-- col-sm-6 -->

				</div><!-- row -->

				<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>SELENGKAPNYA</b></a>
			</div><!-- col-md-9 -->

			<div class="col-md-6 col-lg-4">
				<h4 class="p-title"><b>LINK</b></h4>
				<div class="row">
					<div class="col-sm-12">
						<a class="oflow-hidden pos-relative mb-20 dplay-block bag_link" href="#">
							<!--<div class="wh-100x abs-tlr"><img src="images/polular-1-100x100.jpg" alt=""></div>-->
							<div class="ml-120 min-h-100x">
								<h5><b>LINK 1</b></h5>
							</div>
						</a><!-- oflow-hidden -->

						<a class="oflow-hidden pos-relative mb-20 dplay-block bag_link" href="#">
							<!--<div class="wh-100x abs-tlr"><img src="images/polular-2-100x100.jpg" alt=""></div>-->
							<div class="ml-120 min-h-100x">
								<h5><b>LINK 2</b></h5>
							</div>
						</a><!-- oflow-hidden -->

						<a class="oflow-hidden pos-relative mb-20 dplay-block bag_link" href="#">
							<!--<div class="wh-100x abs-tlr"><img src="images/polular-3-100x100.jpg" alt=""></div>-->
							<div class="ml-120 min-h-100x">
								<h5><b>LINK 3</b></h5>
							</div>
						</a><!-- oflow-hidden -->

						<a class="oflow-hidden pos-relative mb-20 dplay-block bag_link" href="#">
							<!--<div class="wh-100x abs-tlr"><img src="images/polular-4-100x100.jpg" alt=""></div>-->
							<div class="ml-120 min-h-100x">
								<h5><b>LINK 4</b></h5>
							</div>
						</a><!-- oflow-hidden -->
					</div><!-- col-sm-6 -->
			</div><!-- col-md-3 -->

		</div><!-- row -->
	</div><!-- container -->
</section>
