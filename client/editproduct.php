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
                        <a href="manage_employee.php"><i class="fa fa-info-circle"></i><span>View Employee </span> </a>
                    </li>
                    <li class="submenu">
                        <a href="#"><span class="label radius-circle bg-danger float-right"></span><i class="fa fa-inr"></i><span>Manage Payments </span></a>
                           
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
                        <a href="manage_employee.php"><i class="fa fa-info-circle"></i><span>View Employee </span> </a>
                    </li>
                    
                    <li class="submenu">
                        <a href="#"><span class="label radius-circle bg-danger float-right"></span><i class="fa fa-inr"></i><span>Manage Payments </span></a>
                           
                    </li>

                    
            </ul>

            <div class="clearfix"></div>

            </div>
        
            <div class="clearfix"></div>

        </div>

    </div>

    <!-- End Sidebar -->
<script type="text/javascript">
    function showHint(a) {
        xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("sbctid").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getsubcat.php?q="+a, true);
  xhttp.send();   
    }
</script>

<?php
        // $con=mysqli_connect("localhost","root","","thehomeplus");
        if (isset($_POST['update'])) 
        {

             $ptid=$_POST['prid'];
            $cid=$_POST['ctid'];
            $sid=$_POST['sbctid'];
           $pdname=$_POST['pname'];
          $chk=mysqli_query($con,"SELECT * FROM `product` WHERE 'pname'='$pdname' and `pid`!='$ptid'");
            if (mysqli_fetch_array($chk))   
             {
                 echo "<script>swal('product name Already exists');</script>";
                }
            else
            {
                
                $q=mysqli_query($con,"UPDATE `product` SET `pname`='$pdname' WHERE `categoryid`='$cid'");
              if ($q)
               {
                  echo "<script>swal('Updated');
                  window.location='viewproduct.php';</script>"; 
                   }
              else
              {
                 echo "<script>swal('FAILED');</script>";
                 
              }
            }
          
        }
    ?>

  
                <?php
if (isset($_GET['pdid'])) {
$q1=mysqli_query($con,"SELECT * FROM `product` WHERE  pid=$_GET[pdid]"); 
$r1=mysqli_fetch_array($q1);
$q2=mysqli_query($con,"SELECT * FROM `subcategory` WHERE  subid=$r1[subid]"); 
$r2=mysqli_fetch_array($q2);
$q3=mysqli_query($con,"SELECT * FROM `category` WHERE categoryid=$r2[categoryid]");
$r3=mysqli_fetch_array($q3);

                ?>  
                   
                                      
<div class="container" style="margin-left:25%;margin-top: 10%;">
  <h2 >ADD PRODUCTS</h2>
  <div class="panel panel-default" style="width:50%;">
     <div class="panel-body">
    <form action="" method="post" autocomplete="off">
        <div class="form-group">
        <label for="uname">Category :</label>
        <select name="ctid" class="form-control" required  onchange="showHint(this.value)">
        <option value="<?php echo $r3['categoryid']; ?>"><?php echo $r3['categoryname']; ?></option>
    </div>
<?php
$q=mysqli_query($con,"SELECT * FROM `category`");
while($r=mysqli_fetch_array($q)){

?>
        <option value="<?php echo $r['categoryid'] ?>"><?php echo $r['categoryname'] ?></option>

<?php } ?>

    </select>
    <div class="form-group">
        <label for="uname">Sub Category:</label>
    <select name="sbctid"  class="form-control" id="sbctid" required>
            <option value="<?php echo $r2['subid']; ?>"><?php echo $r2['subcategoryname']; ?></option>
    </select>
        </div>
    <div class="form-group">
     <input type="hidden" name="prid" value="<?php echo $r['pid']; ?>">   
    <label for="uname">Product Name:</label>
    <input type="text" name="pname" maxlength="100"  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" placeholder="Enter the Product Name" value="<?php echo $r1['pname']; ?>" required>
    </div>
   
    <div class="form-group" style="text-align: center;" >
    <input type="submit" name="update" class="btn btn-info">
    </div>
</form>
                                    
                                    
                                



   <footer class="footer">
        <span class="text-right">
        Copyright <a target="_blank" href="#">THE HOMEPLUS</a>
        </span>
        <span class="float-right">
        Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>HARIPRASAD,HRISHIKESH,BRITTO</b></a>
        </span>
    </footer>

</div>
<?php  }  ?>
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




























