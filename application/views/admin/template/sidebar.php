<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?=$admin->nama?></span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                            <span class="text-muted text-xs block">menu <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="<?=site_url("logout")?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="<?php if($active == 1) echo "active";?>">
                    <a href="<?=site_url('admin')?>"><i class="fa fa-th-large"></i> <span class="nav-label">DashBoard</span></a>
                </li>
                <li class="<?php if($active == 2) echo "active";?>">
                    <a href="<?=site_url('admin/event')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Event</span> <span class="fa arrow"></span></a>
                    <!-- <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                    </ul> -->
                </li>
                <li class="<?php if($active == 3) echo "active";?>">
                    <a href="<?=site_url('admin/pengumuman')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Pengumuman</span> <span class="fa arrow"></span></a>
                    <!-- <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                    </ul> -->
                </li>
            </ul>
            </ul>

        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">   