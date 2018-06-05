	<body>
	  	<div class="header">
		     <div class="container">
		        <div class="row">
		           <div class="col-md-5">
			            <!-- Logo -->
			            <div class="logo">
			            	<h1><a href="index.html">Marketing Integrated Systems</a></h1>
			            </div>
		           </div>
		           <!-- <div class="col-md-5">
		              	<div class="row">
		                	<div class="col-lg-12">
		                  		<div class="input-group form">
		                       		<input type="text" class="form-control" placeholder="Search...">
		                       		<span class="input-group-btn">
		                         		<button class="btn btn-primary" type="button">Search</button>
		                       		</span>
		                  		</div>
		                	</div>
		              	</div>
		           </div> -->
		           <div class="col-md-offset-5 col-md-2">
			            <div class="navbar navbar-inverse" role="banner">
			                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
			                    <ul class="nav navbar-nav">
			                		<li class="dropdown">
			                    		<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
			                        	<ul class="dropdown-menu animated fadeInUp">
			                          		<li><a href="profile.html">Profile</a></li>
			                          		<li><a href="login.html">Logout</a></li>
			                        	</ul>
			                      	</li>
			                    </ul>
							</nav>
			            </div>
		           </div>
		        </div>
		     </div>
		</div>
		<div class="page-content">
	    	<div class="row">
	    		<div class="col-md-2">
				  	<div class="sidebar content-box" style="display: block;">
		                <ul class="nav">
		                    <!-- Main menu -->
		                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
		                    <li class="submenu">
		                         <a href="#">
		                            <i class="glyphicon glyphicon-hdd"></i> Data Master
		                            <span class="caret pull-right"></span>
		                         </a>
		                         <ul>
		                            <li><a href="<?php echo base_url('Master/Master/master_bb_type')?>">Jenis Reklame</a></li>
		                            <li><a href="<?php echo base_url('Master/Master/master_location_code')?>">Kode Lokasi</a></li>
		                        </ul>
		                    </li>
		                </ul>
		            </div>
				</div>