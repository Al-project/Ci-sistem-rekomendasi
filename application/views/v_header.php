
<html lang="en">
<head>
    <style type="text/css">
<!--
.style1 {font-size: 16px}
-->
    </style>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			 <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet">
		 <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                         <i class="icon-reorder shaded"></i>
					<a href="<?php echo base_url();?>#" class="brand">
<font size="7px">					Golek Konco </a></font>

                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown"> <a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown"> 
							<font size="4px">Dropdown </font>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>#">Item No. 1</a></li>
                                    <li><a href="<?php echo base_url();?>#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="<?php echo base_url();?>#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url();?>#">Support </a></li>
                            <li class="nav-user dropdown"><a href="<?php echo base_url();?>#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <img src="<?php echo base_url();?>assets/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>#">Your Profile</a></li>
                                    <li><a href="<?php echo base_url();?>#">Edit Profile</a></li>
                                    <li><a href="<?php echo base_url();?>#">Account Settings</a></li>
                                    <li class="divider"></li>
                                     <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url().'Admin/logout' ?>">
									 Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
				
				 <!-- /Menu -->
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo base_url();?>#"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="<?php echo base_url();?>#"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li><a href="<?php echo base_url();?>#"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="<?php echo base_url();?>#"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                 <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url().'Admin/logout' ?>">
								  </a></li>
								 <li class="nav-item">
                            </ul>
                        </div>
                        <!--/.sidebar-->
						
                    </div>
                   
				   <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
       
