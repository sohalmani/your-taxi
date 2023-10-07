<?php
error_reporting(0);   
include("../connection/connect.php");
 $sql = "DELETE FROM admin WHERE v_id='$_GET[del]'";                //query to delete by 'id' which get from while loop
mysqli_query($db,$sql);

if(!empty($_POST["logout"]))   //when user press logout button!
	{
	    $_SESSION["user_id"] = "";    //empty the value of user_id variable
	 session_destroy();                //distroyed the session
	    header('location:index.php');  // after distroy redirected user to index page
	}


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
            <div id="page-inner"  style='overflow:auto;'>
                <div class="row">
                    <div class="col-md-12">
                     <h2>Availables Cars </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
				
				 
				 
                  <hr />
              
                 <!-- /. ROW  -->   
 <div class="col-lg-6 col-md-6" >
                      
                        <div class="table-responsive" >
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                    
                                      <th> Image</th>
                                    <th>Car Name</th>
									 <th>seats</th>
									 <th>Price</th>
									  <th>Car Info</th>
									   <th>Location</th>
									    <th>Comfort</th>
										 <th>Air conditioner</th>
										  <th>Fuel Type</th>
										    <th>Navigation</th>
											 <th>Safety</th>
											  <th>Km/Rs.</th>
											    <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
	<?php                                                                          //for printing the  text
    
    $sql = "SELECT * FROM admin";
	 $result = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($result))
{

       $id =$row['v_id'];
	       $cimage =$row['cimage'];
		       $cname =$row['cname'];
			       $seat =$row['seat'];
				       $price =$row['price'];
					       $ctext =$row['ctext'];
						       $location =$row['location'];
							       $comfort =$row['comfort'];
								       $air_c =$row['air_c'];
									       $fuel =$row['fuel'];
										       $gps =$row['gps'];
											   $safety =$row['safety'];
										       $km =$row['km'];
											       
												   

							 echo '<tr class="success">';
                               echo     " <td>".$id."</td>";
                              echo    " <td>".$cimage."</td>";
                             echo     " <td>".$cname."</td>";
                            echo       " <td>".$seat."</td>";
							 echo	" <td>".$price."</td>";
                              echo   " <td>".$ctext."</td>";
                            echo   " <td>".$location."</td>";
                           echo     " <td>".$comfort."</td>";
							 echo		" <td>".$air_c."</td>";
                              echo      " <td>".$fuel."</td>";
                             echo     " <td>".$gps."</td>";
							     echo      " <td>".$safety."</td>";
                             echo     " <td>".$km."</td>";
                              echo     " <td><a  style='float:left;font-weight:bold;margin-left:10px;margin-top:5px;color:#76787b;' href=car.php?&del=".$row['v_id'].">Delete</a></td>";
									
                       echo      '   </tr>';
	
     




	
	



}	

    

?>							
				                    
                                </tbody>
                            </table>
                        </div>
                    </div>
				
                </div>
				 
				 
		
	 
				 
				 
				 
    </div>
     <!-- /. PAGE INNER  -->
	
	 
	 

            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
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
