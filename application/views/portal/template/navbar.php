<header>
	<div class="container">
		<a class="logo" href="<?=base_url()?>"><img src="<?= base_url('assets/portal/images/logo-lppm.jpg') ?>" alt="Logo"></a>
		<a class="right-area src-btn" href="#" >
			<i class="active src-icn ion-search"></i>
			<i class="close-icn ion-close"></i>
		</a>
		<div class="src-form">
			<form>
				<input type="text" placeholder="Search here">
				<button type="submit"><i class="ion-search"></i></a></button>
			</form>
		</div><!-- src-form -->
		
		<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

		<ul class="main-menu" id="main-menu">
			<li><a href="<?=base_url()?>">BERANDA</a></li>
			<li class="drop-down"><a href="#">PROFIL<i class="ion-arrow-down-b"></i></a>
				<ul class="drop-down-menu drop-down-inner">
					<li><a href="<?= site_url('portal/read_sejarah') ?>">SEJARAH LPPM</a></li>
					<li><a href="<?= site_url('portal/read_struktur') ?>">STRUKTUR ORGANISASI</a></li>
					<li><a href="<?= site_url('portal/read_visi') ?>">VISI DAN MISI</a></li>
					<li><a href="<?= site_url('portal/read_rip') ?>">RIP</a></li>
					<li><a href="<?= site_url('portal/read_renstra') ?>">RENSTRA</a></li>
				</ul>
			</li>
			<li><a href="<?= site_url('portal/read_kontak') ?>">KONTAK</a></li>
		<!--<li><a href="05_FAQS-single.html">EXPLAINED</a></li>
			<li><a href="06_contact-us.html">ICON CLAENDER</a></li>-->
		</ul>
		<div class="clearfix"></div>
	</div><!-- container -->
</header>
