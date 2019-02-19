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
        <h3 class="mt-30"><b><?=$pengumuman[0]->title?></b></h3>
        <ul class="list-li-mr-20 mtb-15">
          <li>by <a href="#"><b><?=$admin[0]->nama?></b></a></li>
        </ul>
  <?=$pengumuman[0]->content?>
  <p>Lampiran :
  <ul>
  <?php
    foreach ($pengumuman as $p) {
  ?> 
        <li><a href="<?=base_url('assets/uploads/pengumuman/'.$p->filename)?>"><?=$p->caption?></a></li>
<?php } ?>
</ul>
</p>
  <div class="float-left-right text-center mt-40 mt-sm-20">


        </div><!-- float-left-right -->



      </div><!-- col-md-9 -->

      <div class="d-none d-md-block d-lg-none col-md-3"></div>

    </div><!-- row -->

  </div><!-- container -->
</section>
