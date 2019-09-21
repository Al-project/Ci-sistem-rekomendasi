<!-- Navigation -->

          
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <br>
                        <li>
                            <a href="#"><i class="fa fa-desktop fa-fw"></i> Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="<?php echo base_url('kategori'); ?>"><i class="fa fa-users fa-fw"></i> Kategori</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('klasifikasi'); ?>"><i class="fa fa-book fa-fw"></i> Klasifikasi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('dataset'); ?>"><i class="glyphicon glyphicon-user"></i> Dataset </a>
                                </li>
								<li>
                                    
									<a href="<?php echo base_url(); ?>hobi/data"><i class="fa fa-book fa-fw"></i> Dataset Klasifikasi</a>
                                </li>
                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-file-text fa-fw"></i> Module Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="<?php echo base_url('klasifikasi/laporan'); ?>"><i class="fa fa-users fa-fw"></i> Histori Klasifikasi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('kategori/all_temp'); ?>"><i class="fa fa-book fa-fw"></i> List Restore</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('klasifikasi/akurasi'); ?>"><i class="fa fa-book fa-fw"></i> Detail Akurasi</a>
                                </li>
								
								<li>
                                    
									<a href="<?php echo base_url(); ?>hobi/testing"><i class="fa fa-book fa-fw"></i> Dataset Klasifikasi</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>