<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Pengumuman</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?=site_url('admin')?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Pengumuman</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Data Pengumuman</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Event</h5>
                        <div class="ibox-tools">
                        <a href="<?=site_url('admin/tambah_pengumuman')?>"><button class="btn btn-white">+ Tambah Pengumuman</button></a>
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Post Date</th>
                        <th>Source</th>
                        <th>Photo</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($pengumuman as $e) {
                    ?>
                    <tr>
                        <td><?=$e->title?></td>
                        <td><?=$e->content?></td>
                        <td><?=$e->post_date?></td>
                        <td><?=$e->sumber?></td>
                        <td><a href="<?=site_url('admin/pengumuman_files/'.$e->id_pengumuman)?>">link</a></td>
                        <td><?=$e->nama?></td>
                        <td>
                            <a href="<?=site_url('admin/edit_pengumuman/'.$e->id_pengumuman)?>" style="color:white"><button class="btn btn-warning">Edit</button></a>
                            <a href="<?=site_url('admin/deletePengumuman/'.$e->id_pengumuman)?>" style="color:white"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                        <?php } ?>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>