<!DOCTYPE html>
<html lang="EN">
	<head>
		<title>AEA Computer Consulting</title>
		<meta charset="utf-8" />	
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<!-- create 16x16 png, convert to ico -->
		<link rel="icon" href="favicon.ico">
		<!-- <link type="text/css" rel="stylesheet" href="style.css"> -->
		<style>
		.jumbotron .container h1{
			vertical-align: middle;
			font-size: 50px;
			display: inline;
		}
		h2 .label, h3{
			margin-bottom: 30px;
		}
		.jumbotron .container img{
			display: inline;
		}
			
		.navbar-brand img{
		height: 30px;
		width:auto;
		}
		.btn-group {
			margin-right: 2px;
		}
		.jumbotron .container{
			margin-top: 30px;
			margin-bottom: -40px;
		}
		
		
		</style>
		
		<link rel="stylesheet" href="css/style.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		
		
		<script src="picturefill.min.js"></script>
		<script src="prefixfree.min.js"></script>
	</head>
	<body onload="navLink('home')">
		<?php include('includes/navbar.php'); ?>
		
		<div class="jumbotron fluid jumbotron-danger">
			<div class="container"> 
			<img src="images/aea2.png" class="img-responsive inline">
				<h1>Computer Consulting</h1>
				<p>The one-stop for your computing needs: workshops and custom projects.</p>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				  <h2><span class="label label-primary">Workshops @ Work</span></h2>
				  <p>Want to learn Word, PowerPoint, how to create a Website? <a href="workshops.php">Workshops</a> can be scheduled on your premises for a group or for one-to-one learning. <br /> You provide the computers; AEA does the rest!</p>
					<h3>Microsoft Office</h3>
					<div class="btn-group  btn-group-sm" role="group">
						<a href="word.htm" class="btn btn-default">Word</a>&nbsp;&nbsp;
						<a href="excel.htm" class="btn btn-default">Excel</a>&nbsp;&nbsp;
						<a href="ppoint.htm" class="btn btn-default">PowerPoint</a>&nbsp;&nbsp;
						<a href="access.htm" class="btn btn-default">Access</a>&nbsp;&nbsp;
					</div>

					<h3>Computer and Internet</h3>
					<div class="btn-group  btn-group-sm" role="group">
						<a href="begin.htm" class="btn btn-default">Intro to Computers</a>&nbsp;
						<a href="fit.htm" class="btn btn-default">Computer Fitness</a>
						<a href="net.htm" class="btn btn-default">HTML and CSS</a>&nbsp;</p>
					</div>
				</div>
						
				<div class="col-sm-4">
					<h2><span class="label label-primary">Projects that Work</span></h2>
					<p>AEAink can create a Website for an organization, business, or for personal use; redesign an existing site; or update information on a site as needed. <!--Check out AEA's <a href="portfolio.htm">portfolio</a> of sites.--></p>
				</div>
				
				<div class="col-sm-4">
					<h2><span class="label label-primary">Programs/Projects</span></h2>
					<img class="img-responsive" src="images/closeup.jpg">
					<ul>
						<li><a href="workshops.html">Computer Training</a></li>
						<li>Database in <a href="workshops.html">Access</a></li>
						<li>Budget Spreadsheet in <a href="workshops.html">Excel</a></li>
						<li>Publishing in <a href="workshops.html">Word</a></li>
						<li>Custom Projects</li>
					</ul>
				</div>
			</div>
				
		</div>
		<div class="container fluid">
			<footer>
					<?php include ('includes/bottom.php');?>
			</footer>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
