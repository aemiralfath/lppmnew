            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Event</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?=site_url('admin')?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Event</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Data Event</strong>
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
                            <button class="btn btn-white"><a href="<?=site_url('admin/tambah_event')?>">+ Tambah Event</a></button>
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
                        <th>Photo</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($event as $e) {
                    ?>
                    <tr>
                        <td><?=$e->title?></td>
                        <td><?=$e->content?></td>
                        <td><?=$e->post_date?></td>
                        <td><a href="<?=site_url('admin/event_photo/'.$e->username)?>">link</a></td>
                        <td><?=$e->nama?></td>
                        <td>
                            <button class="btn btn-warning"><a href="<?=site_url('admin/edit_event/'.$e->id_event)?>" style="color:white">Edit</a></button>
                            <button class="btn btn-danger"><a href="<?=site_url('admin/delete_event/'.$e->id_event)?>" style="color:white">Delete</a></button>
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