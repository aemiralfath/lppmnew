<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2><?=$pengumuman[0]->title?></h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?=site_url('admin')?>">Dahsboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            Pengumuman
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Pengumuman Files</strong>
                        </li>
                    </ol>
                </div>
            </div>



        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Big gallery carousel</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div id="carouselExampleBigIndicators" class="carousel slide" data-ride="carousel">
                                <!-- <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleBigIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleBigIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleBigIndicators" data-slide-to="2"></li>
                                </ol> -->
                                <div class="carousel-inner">
                                    <?php
                                        foreach($pengumuman as $e){
                                    ?>
                                    <div class="carousel-item active">
                                        <a href="<?=base_url('assets/uploads/pengumuman/'.$e->filename)?>"><?=$e->caption?></a>
                                    </div>
                                        <?php } ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleBigIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleBigIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Upload Photo</h5>
                        </div>
                        <div class="ibox-content">
                        <?= form_open_multipart(site_url('admin/pengumuman_files/'.$pengumuman[0]->id_pengumuman)) ?>
                                <div class="custom-file">
                                    <input name="file" type="file" multiple />
                                </div>
                        </div>
                        <div style="text-align:center">
                            <input type="submit" class="btn btn-success" name="submit" value="submit">
                        </div>
                        <?= form_close();?>
                    </div>
                </div>
        </div>
        </div>
        
