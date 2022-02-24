<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Bootstrap - Nav</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-danger fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Demo Nav Bootstrap 4</h2><hr>
		<div class="row">
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Dengan List</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<h4>Horizontal</h4>
				    	<ul class="nav">
						  <li class="nav-item">
						    <a class="nav-link active" href="#">Active</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li>
						</ul>
						<hr>
						<h4>Vertical</h4>
						<ul class="nav flex-column">
						  <li class="nav-item">
						    <a class="nav-link active" href="#">Active</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li>
						</ul>
					</p>
				  </div>
				</div>			
			</div>
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Dengan Nav Link</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<h4>Horizontal</h4>
				    	<nav class="nav">
						  <a class="nav-link active" href="#">Active</a>
						  <a class="nav-link" href="#">Link</a>
						  <a class="nav-link" href="#">Link</a>
						  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						</nav>
						<hr>
						<h4>Vertical</h4>
						<nav class="nav flex-column">
						  <a class="nav-link active" href="#">Active</a>
						  <a class="nav-link" href="#">Link</a>
						  <a class="nav-link" href="#">Link</a>
						  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						</nav>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Alignment Center</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<ul class="nav justify-content-center">
						  <li class="nav-item">
						    <a class="nav-link active" href="#">Active</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li>
						</ul>
					</p>
				  </div>
				</div>
			</div>
		
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Alignment Right</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<ul class="nav justify-content-end">
						  <li class="nav-item">
						    <a class="nav-link active" href="#">Active</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li>
						</ul>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Tabs</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<ul class="nav nav-tabs">
						  <li class="nav-item">
						    <a class="nav-link active" href="#">Active</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li>
						</ul>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Pills</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<ul class="nav nav-pills">
						  <li class="nav-item">
						    <a class="nav-link active" href="#">Active</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li>
						</ul>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Tabs with dropdowns</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<ul class="nav nav-tabs">
						  <li class="nav-item">
						    <a class="nav-link active" href="#">Active</a>
						  </li>
						  <li class="nav-item dropdown">
						    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
						    <div class="dropdown-menu">
						      <a class="dropdown-item" href="#">Action</a>
						      <a class="dropdown-item" href="#">Another action</a>
						      <a class="dropdown-item" href="#">Something else here</a>
						      <div class="dropdown-divider"></div>
						      <a class="dropdown-item" href="#">Separated link</a>
						    </div>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li>
						</ul>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Pills with dropdowns</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<ul class="nav nav-pills">
						  <li class="nav-item">
						    <a class="nav-link active" href="#">Active</a>
						  </li>
						  <li class="nav-item dropdown">
						    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
						    <div class="dropdown-menu">
						      <a class="dropdown-item" href="#">Action</a>
						      <a class="dropdown-item" href="#">Another action</a>
						      <a class="dropdown-item" href="#">Something else here</a>
						      <div class="dropdown-divider"></div>
						      <a class="dropdown-item" href="#">Separated link</a>
						    </div>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						  </li>
						</ul>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Fill</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<nav class="nav nav-pills nav-fill">
						  <a class="nav-item nav-link active" href="#">Active</a>
						  <a class="nav-item nav-link" href="#">Much longer nav link</a>
						  <a class="nav-item nav-link" href="#">Link</a>
						  <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						</nav>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Working with flex utilities</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<nav class="nav nav-pills nav-fill">
						  <a class="nav-item nav-link active" href="#">Active</a>
						  <a class="nav-item nav-link" href="#">Much longer nav link</a>
						  <a class="nav-item nav-link" href="#">Link</a>
						  <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						</nav>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">JavaScript Behavior List</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home"></i> Home</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-image"></i> Profile</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-phone"></i> Contact</a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						  	Home
						  </div>
						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						  	Profile
						  </div>
						  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						  	Contact
						  </div>
						</div>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  	<h5 class="card-header bg-success text-white" align="center">JavaScript Behavior Nav</h5>
				  	<div class="card-body">
					    <p class="card-text">
					    	<nav>
							  <div class="nav nav-tabs" id="nav-tab" role="tablist">
							    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-home"></i> Home</a>
							    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-image"></i> Profile</a>
							    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fa fa-phone"></i> Contact</a>
							  </div>
							</nav>
							<div class="tab-content" id="nav-tabContent">
							  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							  	Home
							  </div>
							  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							  	Profile
							  </div>
							  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							  	Contact
							  </div>
							</div>
						</p>
				  	</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  	<h5 class="card-header bg-success text-white" align="center">JavaScript Behavior Pills Horizontal</h5>
				  	<div class="card-body">
					    <p class="card-text">
					    	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-home"></i> Home</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-phone"></i> Contact</a>
							  </li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
							  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							  	Home
							  </div>
							  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							  	Profile
							  </div>
							  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
							  	Contact
							  </div>
							</div>
						</p>
				  	</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">JavaScript Behavior Pills Vertical</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<div class="row">
						  <div class="col-3">
						    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home"></i> Home</a>
						      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-image"></i> Profile</a>
						      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-envelope"></i> Pesan</a>
						    </div>
						  </div>
						  <div class="col-9">
						    <div class="tab-content" id="v-pills-tabContent">
						      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						      	Home
						      </div>
						      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						      	Profile
						      </div>
						      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
						      	Messages
						      </div>
						    </div>
						  </div>
						</div>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Using data Attributes</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<!-- Nav tabs -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="homeDA-tab" data-toggle="tab" href="#homeDA" role="tab" aria-controls="homeDA" aria-selected="true"><i class="fa fa-home"></i> Home</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="profileDA-tab" data-toggle="tab" href="#profilesDA" role="tab" aria-controls="profileDA" aria-selected="false"><i class="fa fa-image"></i> Profile</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="messagesDA-tab" data-toggle="tab" href="#messagesDA" role="tab" aria-controls="messagesDA" aria-selected="false"><i class="fa fa-envelope"></i> Messages</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="settingsDA-tab" data-toggle="tab" href="#settingsDA" role="tab" aria-controls="settingsDA" aria-selected="false"><i class="fa fa-cog"></i> Settings</a>
						  </li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
						  <div class="tab-pane active" id="homeDA" role="tabpanel" aria-labelledby="homeDA-tab">
						  	Home
						  </div>
						  <div class="tab-pane" id="profilesDA" role="tabpanel" aria-labelledby="profileDA-tab">
						  	Profile
						  </div>
						  <div class="tab-pane" id="messagesDA" role="tabpanel" aria-labelledby="messagesDA-tab">
						  	Messages
						  </div>
						  <div class="tab-pane" id="settingsDA" role="tabpanel" aria-labelledby="settingsDA-tab">
						  	Settings
						  </div>
						</div>
					</p>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Fade Effect</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="homeFE-tab" data-toggle="tab" href="#homeFE" role="tab" aria-controls="homeFE" aria-selected="true"><i class="fa fa-home"></i> Home</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="profileFE-tab" data-toggle="tab" href="#profileFE" role="tab" aria-controls="profileFE" aria-selected="false"><i class="fa fa-image"></i> Profile</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="messagesFE-tab" data-toggle="tab" href="#messagesFE" role="tab" aria-controls="messagesFE" aria-selected="false"><i class="fa fa-envelope"></i> Messages</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="settingsFE-tab" data-toggle="tab" href="#settingsFE" role="tab" aria-controls="settingsFE" aria-selected="false"><i class="fa fa-cog"></i> Settings</a>
						  </li>
						</ul>

						<div class="tab-content">
						  	<div class="tab-pane fade show active" id="homeFE" role="tabpanel" aria-labelledby="home-tab">
								Home
							</div>
						  	<div class="tab-pane fade" id="profileFE" role="tabpanel" aria-labelledby="profile-tab">
						  		Profile
						  	</div>
						  	<div class="tab-pane fade" id="messagesFE" role="tabpanel" aria-labelledby="messages-tab">
						  		Messages
						  	</div>
						  	<div class="tab-pane fade" id="settingsFE" role="tabpanel" aria-labelledby="settings-tab">
						  		Settings
						  	</div>
						</div>
					</p>
				  </div>
				</div>
			</div>
		</div>
		<hr>	
	</div>

	<div class="navbar bg-dark fixed-bottom">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

</body>
</html>