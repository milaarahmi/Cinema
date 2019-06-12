<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome-all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css? t=<?php echo time();?>">
</head>
<body>
	<div class="menu">
		<a class="col-md-12 menu-item" href="<?php echo base_url();?>Welcome/index"><i class="fas fa-home"></i></a>
		<a class="col-md-12 menu-item" href="<?php echo base_url();?>Welcome/film"><i class="fas fa-film"></i></a>
		<a class="col-md-12 menu-item" ><i class="fas fa-comment"></i></a>
		<a class="col-md-12 menu-item" ><i class="fas fa-user"></i></a>
	</div>
	<div class="content">
		<div class="content-item">
			<div  class="logo">
				CINEMA XXI
			</div>
			<div class="search">
				<form class="search-item">
					<input type="text" name="search" placeholder="Search" class="input-search">
					<i class="fas fa-search logo-search"></i>
				</form>
			</div>
		</div>
			<?php
			if(isset($content)){
				echo $content;
			}
		?>
	</div>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>	
	<?php
		if(isset($js)){
		echo $js;
	}?>
</body>
</html>