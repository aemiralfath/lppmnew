<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Form Event</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?=site_url()?>l">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Basic Form</strong>
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
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
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
                            <form method="POST" action="<?=site_url("admin/tambah_event")?>">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" name="title" placeholder="input title"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="ibox-content no-padding"><label class="col-sm-2 col-form-label">Content</label>

                                    <textarea class="summernote" name="content"></textarea>
                                    

                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Author</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="author">
                                        <?php
                                            foreach($author as $a){
                                                echo "<option value='$a->username'>$a->nama</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <input class="btn btn-white btn-sm" type="reset" value="Cancel">
                                        <input class="btn btn-primary btn-sm" type="submit" value="Save changes" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    