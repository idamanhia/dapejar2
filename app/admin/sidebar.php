
    <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="<?=$assetLink?>assets/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>
                            <li class="sidebar-item <?=active($url[0],'')?>">
                                <a href="<?=$domain?>" class='sidebar-link'>
                                    <i data-feather="home" width="20"></i> 
                                    <span>Dashboard</span>
                                </a>
                                
                            </li>
                            
                            <!-- <li class='sidebar-title'>MENU</li> -->
                            <li class="sidebar-item <?=active($url[0],'peralatan-utama')?> ">
                                <a href="<?=$domain?>peralatan-utama/" class='sidebar-link'>
                                    <i data-feather="users" width="20"></i> 
                                    <span>Peralatan Utama</span>
                                </a>
                            </li>


                            <!-- 
                            <li class="sidebar-item <?=active($url[0],'tanggal-spt')?> ">
                                <a href="<?=$domain?>tanggal-spt/" class='sidebar-link'>
                                    <i data-feather="calendar" width="20"></i> 
                                    <span>Tanggal SPT</span>
                                </a>
                            </li>

                            <li class="sidebar-item <?=active($url[0],'cuti-pegawai')?> ">
                                <a href="<?=$domain?>cuti-pegawai/" class='sidebar-link'>
                                    <i data-feather="book" width="20"></i> 
                                    <span>Cuti Pegawai</span>
                                </a>
                            </li>

                            <li class="sidebar-item <?=active($url[0],'kenaikan-pangkat')?> ">
                                <a href="<?=$domain?>kenaikan-pangkat/?unit_kerja=1&jabatan=0&bulan=04&tahun=<?=date("Y")?>" class='sidebar-link'>
                                    <i data-feather="chevrons-up" width="20"></i> 
                                    <span>Kenaikan Pangkat</span>
                                </a>
                            </li>
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i data-feather="briefcase" width="20"></i> 
                                    <span>Daftar Tabel</span>
                                </a>
                                
                                <ul class="submenu ">
                                    
                                    <li class="sidebar-item <?=active($url[0],'tabel-agama')?> ">
                                        <a href="<?=$domain?>tabel-agama/" >
                                            <i data-feather="user" width="20"></i> 
                                            <span>Agama</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-item <?=active($url[0],'tabel-jabatan')?> ">
                                        <a href="<?=$domain?>tabel-jabatan/" >
                                            <i data-feather="trending-up" width="20"></i> 
                                            <span>Jabatan</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-item <?=active($url[0],'tabel-bidang')?> ">
                                        <a href="<?=$domain?>tabel-bidang/" >
                                            <i data-feather="layers" width="20"></i> 
                                            <span>Bidang</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-item <?=active($url[0],'tabel-sub-bidang')?> ">
                                        <a href="<?=$domain?>tabel-sub-bidang/" >
                                            <i data-feather="square" width="20"></i> 
                                            <span>Sub Bidang</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                                
                            </li>
                             -->

                            <li class="sidebar-item <?=active($url[0],'logout')?> ">
                                <a href="<?=$domain?>logout/" class='sidebar-link'>
                                    <i data-feather="log-out" width="20"></i> 
                                    <span>Keluar</span>
                                </a>
                            </li>
                </div>
                        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>

