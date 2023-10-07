<?php

if(!empty($_POST["logout"]))   //when user press logout button!
	{
	    $_SESSION["user_id"] = "";    //empty the value of user_id variable
	 session_destroy();                //distroyed the session
	    header('location:index.php');  // after distroy redirected user to index page
	}

	
error_reporting(0);  
 include("../connection/connect.php");
if(isset($_POST['submit']))           //if upload btn is pressed
{
	
			$name = $_POST['name'];
			$seat = $_POST['seat'];
			$price = $_POST['price'];
		    $disc = $_POST['disc'];   
			$loc = $_POST['loc'];
			$Comfort = $_POST['Comfort'];
			$ac = $_POST['ac'];
			$fuel = $_POST['fuel'];
		    $gps = $_POST['gps'];   
			$airbag = $_POST['airbag'];
			$km = $_POST['km'];
			
			
   
  
   $fname = $_FILES['image']['name'];
   $temp = $_FILES['image']['tmp_name'];
   $fsize = $_FILES['image']['size'];
   $extension = explode('.',$fname);
   $extension = strtolower(end($extension));  
   $fnew = uniqid().'.'.$extension;
   
   $store = "images/".basename($fnew);                      // the path to store the upload image

  if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )
	{        
	if($fsize>=1000000)
	{
		echo "MAX size is 1MB";
	}		
	else
	{
		if(move_uploaded_file($temp, $store))
		{
		        $first= '<div class="row">';
                  $sec=    ' <div class="col-lg-12 ">';
                    $th=       '<div class="alert " style="background-color:#ebf8a4;border:1px solid #a2d246; color: #96af0c;">';
                        $four=      '  <strong>Image successfully Uploaded!</strong> ';
                      $six=   '  </div>';
                       
                  $sev=    ' </div>';
                     $eig=  '</div>';
		}
	}
	}
	else
	{
		echo "you can upoaded only specified extensions like jpg || png || gif only!";
	}

	

 
	if($fnew)
   {
	$sql = "INSERT INTO admin (cimage,cname,seat,price,ctext,location,comfort,air_c,fuel,gps,safety,km) VALUES	('$fnew','$name ','$seat','$price','$disc','$loc','$Comfort','$ac','$fuel','$gps','$airbag','$km')";  // store the submited data ino the database :images
	mysqli_query($db, $sql); 
	 
	 $q= '<div class="row" >';
         $w=     ' <div class="col-lg-12 ">';
             $e=              '<div class="alert " style="background-color:#ebf8a4;border:1px solid #a2d246; color: #96af0c;">';
                 $r=             '  <strong>Record inserted successfully! </strong> ';
                   $t=      '  </div>';
                       
              $y=        ' </div>';
               $u=        '</div>';
	
   }
   else
   {
	echo "fill out empty fields firstly";
   }	
	
    
	                                                  
      
    
	
	
	
}
?>







<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;"><form action="" method="post"><input type="submit" name="logout" value="Logout" /></form></a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="dashboard.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                    
                    <li>
                        <a href="booking.php"><i class="fa fa-edit "></i>booking </a>
                    </li>


                    <li>
                        <a href="car.php"><i class="fa fa-qrcode "></i>Avail Cars</a>
                    </li>
                    <li>
                        <a href="insertcar.php"><i class="fa fa-bar-chart-o"></i>Car Insertion</a>
                    </li>

                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Car Insertion </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
				  <?php 
				    echo  $first;
					echo $sec;
					echo  $th;
                    echo    $four;
					echo    $six  ;  
					echo $sev;
					echo  $eig;
				   
					echo   $q;
					 echo$w;
					 echo$e;
					 echo	$r;
					echo  $t;
					 echo$y;
					echo	$u;
				  
				  ?>
              
              <form method="post" action="" enctype="multipart/form-data">
               
				<div class="row" style='float:right;'>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                          
                            <input  type='submit' value='Insert Record '  class="btn btn-info"  name='submit'/>
                          
                        </div>
                    </div>
                    
                </div>
				
					
					
					
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Car Image</label>
                            <input class="form-control"   type='file'   name='image'/>
                            <p class="help-block">Enter the desire Car Image </p>
                        </div>
                    </div>
                    
                </div>


				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Car Name</label>
                            <input class="form-control"   type='text'    name='name'/>
                            <p class="help-block">Enter the care Name.</p>
                        </div>
                    </div>
                    
                </div>
				
						<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>No. of Passengers</label>
                            <input class="form-control"   type='text'  name='seat'/>
                            <p class="help-block">Enter the Avail seats.</p>
                        </div>
                    </div>
                    
                </div>
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Price Rs.</label>
                            <input class="form-control"   type='text'  name='price'/>
                            <p class="help-block">Price of current car</p>
                        </div>
                    </div>
                    
                </div>
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Discription</label>
                            <input class="form-control"   type='text'  name='disc'/>
                            <p class="help-block">Enter the discreption berifly.</p>
                        </div>
                    </div>
                    
                </div>
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Location </label>
                            <input class="form-control"   type='text' name='loc' />
                            <p class="help-block">Current car location .</p>
                        </div>
                    </div>
					
				
                    
                </div>
				
					<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Comfort</label></br>
                            <input class="form-"   type='radio'  name='Comfort' value='eco'/> eco   
							<input class="form-"   type='radio' name='Comfort' value='Standard' />  stand
							<input class="form-"   type='radio' name='Comfort' value='lux'/>lux
                            <p class="help-block">choose the type of the car</p>
                        </div>
                    </div>
                    
                </div>
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Air conditioner</label></br>
                            <input class="form-"   type='radio' name='ac' value='Yes'/> yes   
							<input class="form-"   type='radio' name='ac'  value='no'/>  No
							
                        
                        </div>
                    </div>
                    
                </div>
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Fule Type</label></br>
                            <input class="form-"   type='radio' name='fuel' value='Desiel'/> Desiel   
							<input class="form-"   type='radio' name='fuel' value='pertrol'/>  pertrol
							
                        
                        </div>
                    </div>
                    
                </div>
				
					<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>GPS</label></br>
                            <input class="form-"   type='radio' name='gps' value='yes'/> yes   
							<input class="form-"   type='radio' name='gps' value='No'/>  No
							
                        
                        </div>
                    </div>
                    
                </div>
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>safety</label></br>
                            <input class="form-"   type='radio' name='airbag'  value='Yes'/> yes   
							          <input class="form-"   type='radio' name='airbag'  value='No'/> No   
					
                        </div>
                    </div>
                    
                </div>
				
				<div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Rs/Km</label></br>
                            <input class="form-"   type='text' name='km'/> 
                        </div>
                    </div>
                    
                </div>


				
				
				
				
				
					 
					  
			</form>  
			
			
			
			
			
			
			
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2017 | Design by: <a href="#" style="color:#fff;"  target="_blank">Mani Sohal</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
