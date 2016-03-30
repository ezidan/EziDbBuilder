	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="index.php">EZI DB Builder</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Files<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#" data-toggle="modal" data-target="#NewProject">New</a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#OpenProject">Open</a>
								</li>
								<li>
									<a href="#">Import</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Save</a>
								</li>
								<li>
									<a href="#">Export</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Quit</a>
								</li>
							</ul>
						</li>
					<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tables<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#"  data-toggle="modal" data-target="#NewTable" >New</a>
								</li>
								<li>
									<a href="#">Delete</a>
								</li>
								
							</ul>
						</li>					
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="help.php">Help</a>
						</li>						
					</ul>


				</div>
				
			</nav>
		</div>
	</div>

<hr>
	<?php
echo "Your IP Address is : ".$_SERVER['REMOTE_ADDR'];
	?>
	<hr>