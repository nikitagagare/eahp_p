<?php

error_reporting(0);
include('includes/dbconnection.php');
?>
<!-- Add these lines at the very top after PHP -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="dashboard.php" class="logo">
        Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
              <!-- inbox dropdown start-->
                
<?php
             
$ret1=mysqli_query($con,"select * from tblambulancehiring
  
 where   (tblambulancehiring.Status is null || tblambulancehiring.Status='')");
$num=mysqli_num_rows($ret1);

?>  
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important"><?php echo $num;?></span>
            </a>
 

            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You received <?php echo $num;?> New Request</p>
                </li>

    <?php if($num>0){
while($result=mysqli_fetch_array($ret1))
{
?>
                <li>
<span class="subject">
<span class="from"><a class="dropdown-item" href="booking-details.php?id=<?php echo $result['ID'];?>&&bookingnum=<?php echo $result['BookingNumber'];?>">New Request Received from <?php echo $result['PatientName'];?> (<?php echo $result['BookingNumber'];?>)</a></span>
</span>
                </li>
<?php } }  else {?>
  <li>  No New Request Received</li>
        <?php } ?>


                <li>
                    <a href="all-amublance-request.php">See all Request</a>
                </li>
            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <?php
$adid=$_SESSION['eahpaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
                <img alt="" src="images/2.png">
                <span class="username"><?php echo $name; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="admin-profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="change-password.php"><i class="fa fa-cog"></i> Change Password</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end--> 
</div>
</header>

<!-- Add this JavaScript at the bottom -->
<script>
$(document).ready(function(){
    // Initialize all dropdowns
    $('.dropdown-toggle').dropdown();
    
    // Ensure dropdowns work on hover for desktop
    $('.dropdown').hover(
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(300);
        },
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
        }
    );
    
    // Ensure mobile touch events work properly
    $('.dropdown-toggle').on('click', function(e) {
        if ($(window).width() < 768) {
            e.preventDefault();
            var dropdown = $(this).parent().find('.dropdown-menu');
            $('.dropdown-menu').not(dropdown).hide();
            dropdown.toggle();
        }
    });
});
</script>