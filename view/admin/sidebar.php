		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
				
				<ul class="nav nav-list">
					<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='home'){ echo 'active';}}else{ echo 'active';	} ?>">
						<a href="index.php">
							<i class="menu-icon glyphicon glyphicon-home"></i>
							<span class="menu-text"> Beranda </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='anggota' or $_GET['mod']=='cicilan' or $_GET['mod']=='cicilan_a') { echo 'active';}}?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon glyphicon glyphicon-list"></i>
							<span class="menu-text"> Master </span>
						<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='anggota'){ echo 'active';}}?>">
								<a href="?mod=anggota">
									<i class="menu-icon fa fa-caret-right"></i>
									Anggota
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='cicilan'){ echo 'active';}}?>">
								<a href="?mod=cicilan">
									<i class="menu-icon fa fa-caret-right"></i>
									Angsuran Pinjaman Dana
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='cicilan_a'){ echo 'active';}}?>">
								<a href="?mod=cicilan_a">
									<i class="menu-icon fa fa-caret-right"></i>
									Angsuran Kredit Alat Pertanian
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					
					
					
					
					<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='simpan' or $_GET['mod']=='angsuran_a' or $_GET['mod']=='peminjaman_a' or $_GET['mod']=='peminjaman' or $_GET['mod']=='angsuran' or $_GET['mod']=='saldo') { echo 'active';}}?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon glyphicon glyphicon-list"></i>
							<span class="menu-text"> Transaksi </span>
						<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='simpan'){ echo 'active';}}?>">
								<a href="?mod=simpan">
									<i class="menu-icon fa fa-caret-right"></i>
									Tabungan
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='peminjaman'){ echo 'active';}}?>">
								<a href="?mod=peminjaman">
									<i class="menu-icon fa fa-caret-right"></i>
									Pinjaman Dana
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='angsuran'){ echo 'active';}}?>">
								<a href="?mod=angsuran">
									<i class="menu-icon fa fa-caret-right"></i>
									Angsuran Pinjaman Dana
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='peminjaman_a'){ echo 'active';}}?>">
								<a href="?mod=peminjaman_a">
									<i class="menu-icon fa fa-caret-right"></i>
									Kredit Alat Pertanian
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='angsuran_a'){ echo 'active';}}?>">
								<a href="?mod=angsuran_a">
									<i class="menu-icon fa fa-caret-right"></i>
									Angsuran Kredit Alat Pertanian
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						
						
						
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='saldo'){ echo 'active';}}?>">
								<a href="?mod=saldo">
									<i class="menu-icon fa fa-caret-right"></i>
									Saldo
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
					</li>
					
					<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='laporan') { echo 'active';}}?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon glyphicon glyphicon-print"></i>
							<span class="menu-text"> Laporan </span>
						<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_anggota'){ echo 'active';}}?> ">
								<a href="view/admin/l_anggota.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									 Anggota
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_cicilan'){ echo 'active';}}?>">
								<a href="view/admin/l_cicilan.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									 Angsuran Pinjaman Dana
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_cicilan_a'){ echo 'active';}}?>">
								<a href="view/admin/l_cicilan_a.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									 Angsuran Kredit Alat Pertanian
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_tabungan'){ echo 'active';}}?>">
								<a href="view/admin/l_simpan.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									Tabungan
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_peminjama'){ echo 'active';}}?>">
								<a href="view/admin/l_peminjaman.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									 Pinjaman Dana
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_angsuran'){ echo 'active';}}?>">
								<a href="view/admin/l_angsuran.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									 Angsuran Pinjaman Dana
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_peminjama_a'){ echo 'active';}}?>">
								<a href="view/admin/l_peminjaman_a.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									 Kredit alat Pertanian
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_angsuran_a'){ echo 'active';}}?>">
								<a href="view/admin/l_angsuran_a.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									 Angsuran Kredit alat Pertanian
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						<ul class="submenu">
							
							<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='l_saldo'){ echo 'active';}}?>">
								<a href="view/admin/l_saldo.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									 Saldo
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
						
						
						
						
						
						
						
					</li>
					<li class="<?php if(isset($_GET['mod'])){if($_GET['mod']=='admin'){ echo 'active';}}?>">
						<a href="?mod=admin">
							<i class="menu-icon glyphicon glyphicon-cog"></i>
							<span class="menu-text"> Pengaturan Admin </span>
						</a>

						<b class="arrow"></b>
					</li>
					

					<li class="">
						<a href="?mod=keluar">
							<i class="menu-icon glyphicon glyphicon-off"></i>
							<span class="menu-text"> Keluar </span>
						</a>

						<b class="arrow"></b>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Beranda</a>
							</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form method="post" action="?mod=<?php echo $mod; ?>&aksi=view" class="form-search">
								<span class="input-icon">
									<input type="text" name="cari" placeholder="Search <?php echo ucfirst($mod) ?>" class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

