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
		<link rel="stylesheet" href="css/style.css">
		<!-- <link type="text/css" rel="stylesheet" href="style.css"> -->
		<style>
			img { border: 0;}
		.jumbotron .container{
			margin-bottom: -40px;
		}
		</style>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		
		
		<script src="picturefill.min.js"></script>
		<script src="prefixfree.min.js"></script>
	</head>
	<body onload="navLink('form')">
	
		<?php include('includes/navbar.php'); 
		
			$message = "";		

			 // sql enter FORM INFO inTO Db
			 $mysql = new mysqli("localhost", "root", "root", "aeaDB", 8889);
			 
			  // If the connection didn't work out, there will be a connect_errno property on the $mysql object.  End
					// the script with a fancy message.
            if ($mysql->connect_errno) {
                echo "Failed to connect to MySQL: (" . $mysql->connect_error . ")";
            }
			
			if(isset($_POST['id'])){
			
			if (empty($_POST["firstname"])){
				$message = "<br>Please enter your first name.";
			} elseif(empty($_POST["lastname"])){
			//$firstname = document.getElementById("first");
					$message =  "Please  enter your last name.";
				} elseif(empty($_POST["email"])){
						$message =  "Please  enter your email address.";
					} elseif(empty($_POST["phonenumber"])){
							$message =  "Please  enter your phone number.";
						} else{
						   //echo "<h4>Your Info:</h4>";
						   $firstname = test_input($_POST["firstname"]);
						  // echo $firstname . "<br>";
						   $lastname = test_input($_POST["lastname"]);
						  // echo $lastname . "<br>";
						   $email = test_input($_POST["email"]);
						 //  echo $email . "<br>";
						   $phone = test_input($_POST["phonenumber"]);
						 //  echo $phone;
				
							
										
							$stmt = $mysql->prepare("insert into attendees (firstname, lastname, email, phonenumber) values (?, ?, ?, ?)");
							$stmt->bind_param('ssss', $firstname, $lastname, $email, $phone);

							$firstname  = $_POST['firstname'];
							$lastname   = $_POST['lastname'];
							$email 		= $_POST['email'];
							$phone      = $_POST['phonenumber'];

							$stmt->execute();

							$stmt->close();
							$mysql->close();

							$message = "Thank you, '".$firstname." ".$lastname."' An AEA representative will contact you within one business day.";
						}

			
					/*
			 $mysql = new mysqli("localhost", "root", "root", "aeaDB", 8889);
					  $result = $mysql->query("select id, firstname, lastname, email,  phonenumber from attendees");

				for ($i = 0; $i < $result->num_rows; $i++) {
					  $result->data_seek($i);
					  $aRow = $result->fetch_assoc();
					} */ 		  
		}
				function test_input($data) {
				   $data = trim($data);
				   $data = stripslashes($data);
				   $data = htmlspecialchars($data);				
					return $data;
				}
		
		?>
		

		<div class="jumbotron fluid jumbotron-danger">
			<div class="container">
				  <h2>Want to learn more about the workshops?</h2>
				  <p>Please enter your contact information below.</p>
			</div>	
		</div>
		<div class="container">		
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="row">
					<div class="col-md-12">	
							<legend>Contact Me</legend>
					</div>	
				</div>					
				<div class="row">	
					<div class="col-md-push-1 col-md-5 col-sm-6 form"><!-- Grouping of related elements -->
						<fieldset>
							<!-- form accessibility for the vision impaired-->	
							<p><label for="firstName">First Name</label>&nbsp; <input type="text" name="firstname" id="first"  value="<?php print($_POST['firstname']); ?>" /> </p>
							<p><label for="name">Last Name</label>&nbsp; <input type='text' name="lastname"  value="<?php print($_POST['lastname']); ?>"/></p>
							
                <input type="hidden" name="id" value="isset" />
						</fieldset>
					</div>			
					<div class="col-md-5 col-md-pull-1 col-sm-6 form">
						<p><label for="email">Email</label>&nbsp;&nbsp;&nbsp; <input type="email" name="email" value="<?php print($_POST['email']); ?>"/> </p>
						<p><label for="phone">Phone</label>&nbsp; <input type="text" name="phonenumber" value="<?php print($_POST['phone']); ?>" /> </p>
					<br />
					</div>
				</div> 
			<!-- 	<div class="row">
					<div class="col-md-11 col-md-push-1 ">
						<fieldset><input type="checkbox" name="zom" value="makeup" /> <label>Need Help</label>
							<br /> 
								<input type="checkbox" name="zom" value="benefits" /> <label>Health benefits</label> 
							<br /> 
							<br /> 
						</fieldset>
					</div>		
				</div>		

		
				<div class="row">
					<div class="col-md-11 col-md-push-1 ">
						<p><label  class="label1">Select Your Video</label> 
						<select name="video">
							<option>Microsoft Access</option>
							<option>Microsoft Word</option>
							<option>Microsoft Excel</option>
							<option>Introduction to SQL</option>
							<option>Computer Fitness</option>	
						</select></p>
					</div>		
				</div>	<p><label>Questions? Ask them below</label>
						<br /> 
						<textarea placeholder="Get info or ask a question!" name="info"></textarea></p>	-->
	
				<div class="row">
					<div class="col-md-11 col-md-push-1">
						<p><button>Send this form</button></p>
					</div>	
				</div>	
			</form>
			<div class="row">
				<div class="col-md-11 col-md-push-1">
					<p><?php print($message);?></p>
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
		