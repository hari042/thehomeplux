<?php $con=mysqli_connect("localhost","root","Home@123","thehomeplus"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>admin home</title>
        <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
        <meta name="author" content="Pike Web Development - https://www.pikephp.com">

 <script src="js/sweet.js"></script>
 
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Font Awesome CSS -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        
        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
        <!-- END CSS for this page -->
        
</head>

<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="adminhome.php" class="logo"><img alt="Logo" src="assets/images/adm.png" /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        
                        

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="index.php" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
                                
                                <!-- item-->
                                
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

    </div>
    <!-- End Navigation -->
    
 
    <!-- Left Sidebar -->
    <div class="left main-sidebar">
    
        <div class="sidebar-inner leftscroll">

            <div id="sidebar-menu">
        
              <ul>

                    <li class="submenu">
                        <a class="active" href="#"><i class="fa fa-fw fa-bars"></i><span> Menu </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-list-alt"></i> <span>Manage  Category </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="addcat.php">Add Category</a></li>
                                <li><a href="viewcat.php">View  Category</a></li>
                            </ul>
                    </li>
                    
                    <li class="submenu">
                        <a href="#"><i class="fa fa-list-alt"></i> <span>Manage  SubCategory </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="addsubcat.php">Add SubCategory</a></li>
                                <li><a href="viewsubcat.php">View SubCategory</a></li>
                            </ul>
                    </li>
                                        
                    <li class="submenu">
                        <a href="#"><i class="fa fa-pinterest"></i> <span>Manage Products </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="addproduct.php"=>Add Product</a></li>
                                <li><a href="viewproduct.php">View Product</a></li>
                            </ul>
                    </li>
                    
                    <li class="submenu">
                        <a href="#"><i class="fa fa-briefcase"></i> <span> Manage Stock </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="addstock.php">Add Stock</a></li>
                                <li><a href="viewstock.php">View Stock</a></li>
                            </ul>
                    </li>

                   <li class="submenu">
                        <a href="view_service.php"><i class="fa fa-info-circle"></i><span>View Services </span> </a>
                    </li>
                     <li class="submenu">
                        <a href="view_customize.php"><i class="fa fa-info-circle"></i><span>View Customize</span> </a>
                    </li>
                    <li class="submenu">
                        <a href="custdetails.php"><i class="fa fa-info-circle"></i><span>Customer Details </span> </a>
                    </li>
                    <li class="submenu">
                        <a href="view_feedback.php"><i class="fa fa-info-circle"></i><span>View FeedBack </span> </a>
                    </li>
                    <li class="submenu">
                        <a href="viewordr.php"><span class="label radius-circle bg-danger float-right"></span><i class="fa fa-inr"></i><span>View Order </span></a>
                           
                    </li>

                    </li>           
                        <li class="submenu">
                        <a href="report.php"><span class="label radius-circle bg-danger float-right"></span><i class="fa fa-inr"></i><span>Report </span></a>
                           
                    </li>   
            </ul>

            <div class="clearfix"></div>

            </div>
        
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- End Sidebar -->
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

                    <li class="submenu">
                        <a class="active" href="#"><i class="fa fa-fw fa-bars"></i><span> Menu </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-list-alt"></i> <span>Manage  Category </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="addcat.php">Add Category</a></li>
                                <li><a href="viewcat.php">View  Category</a></li>
                            </ul>
                    </li>
                    
                    <li class="submenu">
                        <a href="#"><i class="fa fa-list-alt"></i> <span>Manage  SubCategory </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="addsubcat.php">Add SubCategory</a></li>
                                <li><a href="viewsubcat.php">View SubCategory</a></li>
                            </ul>
                    </li>
                                        
                    <li class="submenu">
                        <a href="#"><i class="fa fa-pinterest"></i> <span>Manage Products </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="addproduct.php"=>Add Product</a></li>
                                <li><a href="viewproduct.php">View Product</a></li>
                            </ul>
                    </li>
               
                    
                    <li class="submenu">
                        <a href="#"><i class="fa fa-briefcase"></i> <span> Manage Stock </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="addstock.php">Add Stock</a></li>
                                <li><a href="viewstock.php">View Stock</a></li>
                            </ul>
                    </li>
                  
                    
                   <li class="submenu">
                        <a href="view_service.php"><i class="fa fa-info-circle"></i><span>View Services </span> </a>
                    </li>
                     <li class="submenu">
                        <a href="view_customize.php"><i class="fa fa-info-circle"></i><span>View Customize</span> </a>
                    </li>
                    <li class="submenu">
                        <a href="custdetails.php"><i class="fa fa-info-circle"></i><span>Customer Details </span> </a>
                    </li>
                    <li class="submenu">
                        <a href="view_feedback.php"><i class="fa fa-info-circle"></i><span>View FeedBack </span> </a>
                    </li>
                    <li class="submenu">
                        <a href="viewordr.php"><span class="label radius-circle bg-danger float-right"></span><i class="fa fa-inr"></i><span>View Order </span></a>
                           
                    </li>

                    </li>           
                        <li class="submenu">
                        <a href="report.php"><span class="label radius-circle bg-danger float-right"></span><i class="fa fa-inr"></i><span>Report </span></a>
                           
                    </li>   
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid" style="background-color: #fff;">
					
						
		<?php
    // $con=mysqli_connect("localhost","root","","thehomeplus");

$q=mysqli_query($con,"SELECT * FROM customization"); ?>


                    <table class="table">
                        <tr>
                        <th>Customization id</th>
                        <th> Customer id</th>
                        <th>Contact No:</th>
                        <th>image</th>
                        <th>Description</th>
                        <th>Action</th>
                           
                            
                        </tr>
        <?php       while($r=mysqli_fetch_array($q)) {  ?>
                        <tr>
                        <td><?php   echo $r['customization_id']; ?>
                        <td><?php   echo $r['custid']; ?>
                        <td><?php   echo $r['mobile_no']; ?>
                        <td><img src="img/<?php echo $r['image']; ?>" height="200px" width="200px"></td> 
                        <td><?php   echo $r['description']; ?></td>
                        <td><button  name="add" class="btn btn-danger"><a href="gncust.php?customization_id=<?php echo $r['customization_id']; ?>" onclick=" return confirm('do you want to generate')" style="color:#fff;">Generate</a></button></td>
                            <!--<td><button class="btn btn-danger"><a href="deletecust.php?cid=<?php echo $r['custid']; ?>" onclick=" return confirm('do you want to delete')" style="color:#fff;">Delete</a></button></td>-->
                        </tr>

<?php } ?>

                    </table>



									
									
								



            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
        <span class="text-right">
        Copyright <a target="_blank" href="#">THE HOMEPLUS</a>
        </span>
        <span class="float-right">
        Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>HARIPRASAD,HRISHIKESH,BRITTO</b></a>
        </span>
    </footer>

</div>
<!-- END main -->

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>
		
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Counter-Up-->
	<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>			

	<script>
		$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();
					
			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		
	</script>
	

</body>
</html>