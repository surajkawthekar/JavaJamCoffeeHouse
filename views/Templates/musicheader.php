		<html>
		<head>
			<title>JavaJam Coffee House</title>
			<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css\javacoffee.css">
		<style>
			/* width */
::-webkit-scrollbar {
    width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #D2B48C; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #D2B48C; 
}
		</style>
		</head>
		<body>
		<div id="wrapper">
			<div class="row">
				<div class="columnleft">
					<img id="javajamlogo" src="<?php echo base_url();?>.\images\javajamlogo.jpg">
					<nav><ul class="sidebar">
						<li><a class="sidebar" href="<?php echo base_url();?>index.php/HomeController/index/HomeView.php">Home</a></li>
						<li><a class="sidebar" href="<?php echo base_url();?>index.php/HomeController/menu/MenuView.php">Menu</a></li>
						<li><a class="sidebar" href="<?php echo base_url();?>index.php/MusicController/music">Music</a></li>
						<li><a class="sidebar" href="<?php echo base_url();?>index.php/JobsController/jobs">Jobs</a></li>
						<li><a class="sidebar" href="<?php echo base_url();?>index.php/GearController/gear">Gear</a></li>
						<li><a class="sidebar" href="<?php echo base_url();?>index.php/GearController/cart">Cart</a></li>
						<li><a class="sidebar" href="<?php echo base_url();?>index.php/GearController/placeyourorder">Order</a></li>
					</ul>
					</nav>
				</div>