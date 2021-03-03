 <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				
					
			<div class="profile-section pt-3 pt-lg-0">
				 <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.png" alt="image" >			
					
					 <div class="bio mb-3">Welcome <?php echo @$_SESSION['name'];?><br></div>
					
			     
				</div>

				
				<ul class="navbar-nav flex-column text-left" id="navbar-nav">
					<li class="nav-item active">
					    <a class="nav-link" href="home.php"><i class="fas fa-home fa-fw mr-2"></i>Home 
					    	<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="blog-post.php" style="text-decoration:none"><i class="fas fa-plus fa-fw mr-2"></i>Add Post </a>
					</li>
						<li class="nav-item">
					    <a class="nav-link" href="blog-list.php" style="text-decoration:none"><i class="fas fa-tasks fa-fw mr-2"></i>Manage Post </a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="about.php" style="text-decoration:none"><i class="fas fa-user fa-fw mr-2"></i>My Details</a>
					</li>

						<li class="nav-item">
					    <a class="nav-link" href="?logout=true"  style="text-decoration:none"><i class="fas fa-sign-out-alt fa-fw mr-2"></i>Logout</a>
					</li>
				</ul>
				
		
			</div>
		</nav>

