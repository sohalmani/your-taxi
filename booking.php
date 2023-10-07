<?php

include("connection/connect.php");
error_reporting(0);
$book = $_GET['book'];




if(isset($_POST['submit']))                  //if post btn is pressed
{   
$pick = $_POST['pick'];   
$drop = $_POST['drop'];
$phone = $_POST['phone'];
$fname = $_POST['fname'];
$fmid = $_POST['fmid'];
$flast = $_POST['flast'];
$zipcode = $_POST['zipcode'];
$address = $_POST['address'];
$cardno = $_POST['cardno'];
$brand = $_POST['brand'];
$date = $_POST['date'];
$year = $_POST['year'];
$month = $_POST['month'];
$text = $_POST['text'];

                     

	if($pick==' '||$drop==' '||$phone==' '||$fname==' '||$fmid==' '||$flast==' '||$zipcode==' '||$address==' '||$cardno==' '||$brand==''||$date==' '||$year==' '||$month==' '||$text==' ' )
	{
	
	               echo '<div class="alert alert-dismissable fade in">';
                    echo	'<a href="#"  data-dismiss="alert" ></a>';				
				    echo ' All Text Field must be required!';
					echo  	'</div>';	
	
	}
	else
	{
	  
					
	$sql = "INSERT INTO personal(pickup,dropoff,phone,first,mid,last,cod,address,cardno,cardbrand,ed,ey,em,message) VALUES ('$pick', '$drop','$phone','$fname','$fmid','$flast','$zipcode','$address','$cardno','$brand','$date','$year','$month','$text')";
	mysqli_query($db, $sql);
	
  echo '<div class="alert alert-success alert-dismissable fade in">';
 echo	'<a href="#" data-dismiss="alert" ></a>';
 echo 'Your Booking submit Successfully. Details are send to your Registered E-mail Address.';
echo  	'</div>';
	}
	
	
}




$sql="select * from admin where v_id='$book'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);
						$id =  $row['v_id'];
						$cimage =  $row['cimage'];
						$cname =  $row['cname'];
						$seat =  $row['seat'];
						$price =  $row['price'];
						$ctext =  $row['ctext'];
						
		
						$air_c =  $row['air_c'];
						$fuel =  $row['fuel'];
						$gps =  $row['gps'];
						$safety =  $row['safety'];
						$km =  $row['km'];
						
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Booking</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		
	<link rel="stylesheet" type="text/css" href="css/popup.php">
	
	
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="index.php">Home</a></li>
								
									<li><a href="car.php">Cars</a></li>
									<li><a href="result.php">Search</a></li>
									<li ><a href="contact.php">Contacts</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.html">
								<img src="images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
				
					<div class="grid_12">
						<h3>Book Now!</h3>
<?php						
						
				echo		'<div class="map">';
						echo			'<figure>';
							
                 
					echo			"<div class='' ><a href='admin/images/".$cimage." ' class='gal'><img src='admin/images/".$cimage." ' style='height:400px;width:1900px;'></a></div>";
					
					
					
						echo			'</figure>';
					echo			'</div>';
					echo		'</div>';
					
					echo		'<div class="grid_5">';
						echo		'<h3>Taxi Info</h3>';
						echo		'<div class="map">';
						echo			'<div class="text1 color2"><span style="font-size:40px;">'.$cname.'</span></div>';
						echo			'<div class="text1 color2">Price: <span style="color:red">'.$price.'/-</span></div>';
					echo				'<p>'.$ctext.'</p>';
					
					echo				'<address>';
						echo				'<dl>';
								
							echo			'<dd><span  style="font-size:20px;">Passenger Seats</span><span style="color:;font-size:18px;margin-left:10px;"> :'.$seat.'</span></dd>';
							echo				'<dd><span  style="font-size:20px;">Air Conditioner</span><span style="color:;font-size:18px;margin-left:20px;"> :'.$air_c.'</span></dd>';
							echo				'<dd><span  style="font-size:20px;">Fuel Type </span><span style="color:;font-size:18px;margin-left:72px;">:'.$fuel.'</span> </dd>';
							echo				'<dd><span  style="font-size:20px;">GPS</span><span style="color:;font-size:18px;margin-left:123px;">  :'.$gps.'</span></dd>';
							echo				'<dd><span  style="font-size:20px;">safety</span> <span style="color:;font-size:18px;margin-left:101px;"> :'.$safety.'</span></dd>';
							echo				'<dd><span  style="font-size:20px;">Km/Rs</span><span style="color:;font-size:18px;margin-left:100px;"> :'.$km.'</span></dd>';
							echo			'</dl>';
						echo			'</address>';
					echo		'	</div>';
				echo			'</div>';
	?>				
					
					
					
					<div class="grid_6 prefix_1">
						<h3>Taxi detail</h3>
						
						<form id="form" action=" " method="post">
							<div class="success_wrapper">
								<div class="success-message">Contact form submitted</div>
							</div>
							<label class="name" >
								<select  name='pick'  	 style='height:30px;width:170px;border:1px solid #fff;' >
								<option selected="selected" disabled="disabled">Pickup location</option>
                                                  <option value='JALANDHAR'>jalandhar</option>
                                                  <option value='MOGA'>moga</option>
                                                  <option value='FARIDKOT'>faridkot</option>
												      
                                   </select>           
							
								
								
							</label>
							<label class="name" >
								<select    name='drop'	  style='height:30px;width:170px;border:1px solid #fff;' >
								<option selected="selected" disabled="disabled">Dropoff location</option>
                                                  <option value='JALANDHAR'>jalandhar</option>
                                                  <option value='MOGA'>moga</option>
                                                  <option value='FARIDKOT'>faridkot</option>
												      
                                   </select>           
							
								
								<span class="error-message">*This is not a valid name.</span>
							</label>
							
							
							<label class="phone">
								<input    name='phone' type="text" placeholder="Phone:" />
								
								<span class="error-message">*This is not a valid phone.</span>
							</label>
							
							
							<div class="clear"></div>
							<h3>Billing detail</h3>
							
							<label class="name">
								<input  name='fname'  type="text" placeholder="First:" />
								
								
							</label>
							<label class="name">
								<input  name='fmid' type="text" placeholder="Mid:" />
								
						
							</label>
							
							<label class="name">
								<input  name='flast' type="text" placeholder="Last:" />
								
								
							</label>
							
								<div class="clear"></div>
								
								<label class="name">
								<input  name='zipcode' type="text" placeholder="Zip Code:" />
								
								
							</label>
							
							<label class="name">
								<input   name='address' type="text" placeholder="Address:" />
								
								
							</label>
							
								<div class="clear"></div>
									<h3>Credit/Debit detail</h3>
									
									
							<label class="name">
								<input  name='cardno' type="text" placeholder="Card Number:" />
								
								
							</label>
							
							<label  class="name" >
								<select    name='brand'	 style='height:30px;width:170px;border:1px solid #fff;' >
								<option selected="selected" disabled="disabled">Card Brand</option>
                                                  <option value='Master Card'>Master Card</option>
                                                  <option value='Visa'>Visa</option>
                                                  <option value='Discover'>Discover</option>
												   <option value='American Express'>American Express</option>
												      
                                   </select>           
							
								
								
							</label>
							
								<div class="clear"></div>
								
								<label class="name">
								<select    name='date'	 style='height:30px;width:170px;border:1px solid #fff;' >
								<option selected="selected" disabled="disabled">Expiry date:</option>
                                                  <option value='01 '>01</option>
												    <option value='02 '>02</option>
													  <option value='03 '>03</option>
													    <option value='05 '>05</option>
														    <option value='07 '>07</option>
															  <option value='08 '>08</option>
															    <option value='09 '>09</option>
																<option value='10 '>10</option>
																<option value='11 '>11</option>
																<option value='12 '>12</option>
																<option value='13 '>13</option>
															    <option value='14 '>14</option>
																<option value='15 '>15</option>
																<option value='16 '>16</option>
																<option value='17 '>17</option>
																<option value='18 '>18</option>
															    <option value='19 '>19</option>
																<option value='20 '>20</option>
																<option value='21 '>21</option>
																<option value='22 '>22</option>
																<option value='23 '>23</option>
															    <option value='24 '>24</option>
																<option value='25 '>25</option>
																<option value='26 '>26</option>
																<option value='27 '>27</option>
																<option value='28 '>28</option>
															    <option value='29 '>29</option>
																<option value='30 '>30</option>
																<option value='31 '>31</option>
																<option value='32 '>32</option>
                                                  
												      
                                   </select>   
								
							
							</label>
							<label class="name">
								
								<select    name='year'	 style='height:30px;width:170px;border:1px solid #fff;' >
								<option selected="selected" disabled="disabled">Expiry year:</option>
                                                  <option value='2018'>2018</option>
												    <option value='2017 '>2017</option>
													  <option value='2016 '>2016</option>
													    <option value='2015 '>2015</option>
														  <option value='2014 '>2014</option>
														    <option value='2013 '>2013</option>
															  <option value='2012 '>2012</option>
															    <option value='2011 '>2011</option>
																<option value='2010 '>2010</option>
                                                  
												      
                                   </select>   
								
							
							</label>
							<label class="name">
								
								
								<select    name='month'	 style='height:30px;width:170px;border:1px solid #fff;' >
								<option selected="selected" disabled="disabled">Expiry Month:</option>
                                                  <option value='01 '>01</option>
												    <option value='02 '>02</option>
													  <option value='03 '>03</option>
													    <option value='05 '>05</option>
														    <option value='07 '>07</option>
															  <option value='08 '>08</option>
															    <option value='09 '>09</option>
																<option value='10 '>10</option>
																<option value='11 '>11</option>
																<option value='12 '>12</option>
                                                  
												      
                                   </select>   
								
							
							</label>
								
								
									
								
							
							<label class="message">
								<textarea  name='text' placeholder="Message:(optional)" ></textarea>
								
							</label>
							<div>
								
								
							
						
							</div>
								<input  id='ds' type='submit' name='submit'  value='submit'   /></br>
						</form>
						
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> + 1800 559 6580</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Tour<span class="color1">T</span>axi </div>
						&copy; 2017	| <a href="#">Privacy Policy</a> </div> Website designed by <a href="#" rel="nofollow">Navbro</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>