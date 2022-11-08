
<?php 

include 'include/security_token.php';
include 'include/database_connect.php';
 ?>
<!doctype html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">
        <title>Learning Managment-SOFTWARE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
    
        <!-- C3 Chart css -->
        <link href="assets/libs/c3/c3.min.css" rel="stylesheet" type="text/css">
    
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body data-sidebar="dark">


        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">
        
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img class="img-fluid" src="assets/images/it-fast.png" alt="" height="22" width="auto">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/it-fast.png" alt="" height="36">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block ms-2">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>

                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input form-control" placeholder="Search">
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex">

                       

                        

                        <div class="dropdown d-none d-md-block me-2">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="font-size-16">
                                   <?php 

                                   if (isset($_SESSION['username'])) {
                                       echo $_SESSION['username'];
                                   }

                                    ?>
                                </span> 
                            </button>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item text-danger" href="logout.php">Logout</a>
                                <?php 

                                $sessionId=$_SESSION['uid']; 

echo '<a class="dropdown-item text-success" href="users_update.php?id='.$sessionId.' ">Edit Profile</a>';

                                ?>
                                
                            </div>
                        </div>

                        <div class="dropdown d-inline-block me-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ion ion-md-notifications"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="mdi mdi-cart-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">You have 87 unread messages</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-info rounded-circle font-size-16">
                                                    <i class="mdi mdi-glass-cocktail"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It is a long established fact that a reader will</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14  text-center" href="javascript:void(0)">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
        
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <?php include 'Menu/menu.php'; ?>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
        
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
        
                <div class="page-content">
                    <div class="container-fluid">
                        <button style="width:150px" class="btn-sm btn btn-primary mb-2" id="fileterButton">Filter</button>
                        <div class="row d-flex mb-2 d-none" id="filterArea">
                           <div class="col">
                               <label>From Date</label>
                               <input type="date" id="fromDate" class="form-control">
                           </div> 
                           <div class="col">
                               <label>To Date</label>
                               <input type="date" id="toDate" class="form-control">
                           </div>
                            <div class="col">
                               <button class="btn-sm btn-success mt-4" id="filterBtn" type="button">Filter Now</button>
                           </div> 
                        </div>
                        <div class="row" id="fileterResponse">

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <a href="list_student.php">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-purple me-0 float-end"><i class=" fas fa-users"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="activeStd">
                                                     <?php if ($activeStd = $con -> query("SELECT * FROM student WHERE status='1' ")) 
                                                                {
                                                                    echo  $activeStd ->num_rows; 

                                                                } 

                                                        ?>
                                                </span>
                                                Total Active Student
                                            </div>
                                           
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div> <!--End col -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-blue-grey me-0 float-end"><i class="mdi mdi-black-mesa"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="totalBatch">
                                                    <?php if ($activeStd = $con -> query("SELECT * FROM batch ")) 
                                                                {
                                                                    echo  $activeStd ->num_rows; 

                                                                } 

                                                        ?>
                                                </span>
                                                Total Batch
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End col -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-teal me-0 float-end"><i class=" fas fa-dollar-sign"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="totalDue">
                                                    <?php 
                                                     if ($allAmount=$con->query("SELECT SUM(due) as totalDue FROM student WHERE status=1")) {
                                                         while ($rows=$allAmount->fetch_array()) {
                                                            echo  $totalDue= $rows['totalDue'];
                                                             
                                                         }
                                                     }


                                                    ?>
                                                </span>
                                                Total Due
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-teal me-0 float-end"><i class=" fas fa-donate"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="totalPaid">
                                                    <?php 
                                                     if ($allAmount=$con->query("SELECT SUM(paid) as totalPaid FROM student WHERE status=1")) {
                                                         while ($rows=$allAmount->fetch_array()) {
                                                            echo  $totalPaid= $rows['totalPaid'];
                                                             
                                                         }
                                                     }


                                                    ?>
                                                </span>
                                                Total Paid
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <a href="expense.php">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-purple me-0 float-end"><i class="  fas fa-donate"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="totalExp">
                                                     <?php 
                                                     if ($allExpAmount=$con->query("SELECT SUM(amount) as ExpAmount FROM expense WHERE status=0")) {
                                                         while ($rows=$allExpAmount->fetch_array()) {
                                                            echo  $totalExp= $rows['ExpAmount'];
                                                             
                                                         }
                                                     }


                                                    ?>
                                                </span>
                                                Total Expense
                                            </div>
                                           
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div> <!--End col -->
                            <div class="col-md-6 col-xl-3">
                                <a href="withdraw.php">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mini-stat">
                                                <span class="mini-stat-icon bg-blue-grey me-0 float-end"><i class=" fas fa-donate"></i></span>
                                                <div class="mini-stat-info">
                                                    <span class="counter text-teal" id="totalWithdraw">
                                                        <?php 
                                                         if ($allAmount=$con->query("SELECT SUM(amount) as withdrawAmount FROM withdraw WHERE status=0")) {
                                                             while ($rows=$allAmount->fetch_array()) {
                                                                echo  $totalWithdraw= $rows['withdrawAmount'];
                                                                 
                                                             }
                                                         }


                                                        ?>
                                                    </span>
                                                    Total Withdraw
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div> <!-- End col -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-brown me-0 float-end"><i class=" fas fa-donate"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="totalSpend">
                                                    
                                                </span>
                                                Total Spend
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End col -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-brown me-0 float-end"><i class=" fas fa-dollar-sign"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-primary" id="netProfit">
                                                    
                                                </span>
                                                Net Profit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End col -->
                        </div> <!-- end row-->
                       
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Admited Student</h4>
        
                                        <div class="table-responsive">
                                            <table class="table table-centered table-vertical table-nowrap mb-0">
        
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th >Package</th>
                                                        <th >Grand Total</th>
                                                        <th >Paid</th>
                                                        <th >Due</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                            $sql="SELECT * FROM student WHERE status='1' ORDER BY id DESC LIMIT 5";
                          $result=mysqli_query($con,$sql);

                          while ($rows=mysqli_fetch_assoc($result)) {

                           ?>

                           <tr>
<td><?php echo $rows['id']; ?></td>
<td><a href="std_view.php?id=<?php echo $rows['id']; ?>"><?php echo $rows["name"]; ?></a></td>
<td>
    <?php 

    $packageId= $rows["package"]; 
    if ($allData=$con->query("SELECT * FROM package WHERE package_id='$packageId'")) {
       while ($packageName=$allData->fetch_array()) {
          echo  $packageName['package_name'];
       }
    }

    ?>
    
</td>
<td><?php echo $rows["total_amount"]; ?></td>
<td><?php echo $rows["paid"]; ?></td>
<td><?php echo $rows["due"]; ?></td>
</tr>
                       <?php } ?> 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Orders</h4>
        
                                        <div class="table-responsive">
                                            <table class="table table-centered table-vertical table-nowrap mb-0">
        
                                                <tbody>
                                                    <tr>
                                                        <td>#12354781</td>
                                                        <td>
                                                            <img src="assets/images/products/1.jpg" alt="user-image"
                                                                style="height: 48px;" class="rounded me-2">
                                                            Riverston Glass Chair
                                                        </td>
                                                        <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                                        <td>
                                                            $185
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>
        
                                                    <tr>
                                                        <td>#52140300</td>
                                                        <td>
                                                            <img src="assets/images/products/2.jpg" alt="user-image"
                                                                style="height: 48px;" class="rounded me-2">
                                                            Shine Company Catalina
                                                        </td>
                                                        <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                                        <td>
                                                            $1,024
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>
        
                                                    <tr>
                                                        <td>#96254137</td>
                                                        <td>
                                                            <img src="assets/images/products/3.jpg" alt="user-image"
                                                                style="height: 48px;" class="rounded me-2">
                                                            Trex Outdoor Furniture Cape
                                                        </td>
                                                        <td><span class="badge rounded-pill bg-danger">Cancel</span></td>
                                                        <td>
                                                            $657
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>
        
                                                    <tr>
                                                        <td>#12365474</td>
                                                        <td>
                                                            <img src="assets/images/products/4.jpg" alt="user-image"
                                                                style="height: 48px;" class="rounded me-2">
                                                            Oasis Bathroom Teak Corner
                                                        </td>
                                                        <td><span class="badge rounded-pill bg-warning">Shipped</span></td>
                                                        <td>
                                                            $8451
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>
        
                                                    <tr>
                                                        <td>#85214796</td>
                                                        <td>
                                                            <img src="assets/images/products/5.jpg" alt="user-image"
                                                                style="height: 48px;" class="rounded me-2">
                                                            BeoPlay Speaker
                                                        </td>
                                                        <td><span class="badge rounded-pill bg-success">Delivered</span></td>
                                                        <td>
                                                            $584
                                                        </td>
                                                        <td>
                                                            5/12/2016
                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                        </td>
                                                    </tr>
        
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- end row -->
        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
        
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Admiria.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design And Development <i class="mdi mdi-heart text-danger"></i> by <a href="https://facebook.com/rakib56789">Rakib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->
        
        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
       
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        
        
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        
        <!-- Peity chart-->
        <script src="assets/libs/peity/jquery.peity.min.js"></script>
        
        <!--C3 Chart-->
        <script src="assets/libs/d3/d3.min.js"></script>
        <script src="assets/libs/c3/c3.min.js"></script>
        
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        
        <script src="assets/js/pages/dashboard.init.js"></script>
        
        <script src="assets/js/app.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                fileterFunction()
            function fileterFunction(){
                    $("#fileterButton").on('click',function(){
                    $("#filterArea").removeClass('d-none');
                });
            }
            filterGetRequest();
            function filterGetRequest(){
                $("#filterBtn").click(function(){
                    // setTimeout(()=>{
                    //     $("#filterBtn").html('Loading…');
                    // },2000);
                var from_date=$("#fromDate").val();
                var to_date=$("#toDate").val();
                var studentFilter="0";
                    $.ajax({
                        url:'include/dashboard.php',
                        type:'POST',
                        data:{studentFilter:studentFilter,to_date:to_date,from_date:from_date},
                        success:function(response){
                            $("#fileterResponse").html(response);
                        }
                    });
                });
            }
            netProfit();
            function netProfit(){
                var totalExpense=Number($("#totalExp").html());
                var totalWithdraw=Number($("#totalWithdraw").html());
                var totalPaid=Number($("#totalPaid").html());
                var totalSpend=(totalExpense+totalWithdraw);
                    $("#totalSpend").html(totalSpend);
                var netProfit=totalPaid-totalSpend;
                $("#netProfit").html(Number(netProfit));
            }
            });
        </script>

    </body>
</html>
