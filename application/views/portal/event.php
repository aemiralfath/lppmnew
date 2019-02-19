<section class="ptb-0">
  <div class="mb-30 brdr-ash-1 opacty-5"></div>
  <div class="container">
    <a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
    <a class="mt-10 color-ash" href="#">Visi Misi</a>
  </div><!-- container -->
</section>


<section>
<div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-8 offset-md-2">
        <h3 class="mt-30"><b><?=$event[0]->title?></b></h3>
        <ul class="list-li-mr-20 mtb-15">
          <li>by <a href="#"><b><?=$admin[0]->nama?></b></a></li>
        </ul>
        <div class="h-400x h-sm-auto">
        <div class="h-100 h-sm-auto oflow-hidden">
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
								
									<img class="d-block" src="<?= base_url('assets/uploads/event/'.$e->filename) ?>">
									<div class="abs-blr color-black p-20 bg-sm-color-7">
									<h3 class="mb-15 mb-sm-5 font-sm-13" style="background:white;"><b><?=$e->title?></b></h3>
									<p>heheheh</p>
									</div><!--abs-blr -->
								
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
      </div>
      </div>
      <br>
  <?=$event[0]->content?>
  <div class="float-left-right text-center mt-40 mt-sm-20">


        </div><!-- float-left-right -->



      </div><!-- col-md-9 -->

      <div class="d-none d-md-block d-lg-none col-md-3"></div>

    </div><!-- row -->

  </div><!-- container -->
</section>
