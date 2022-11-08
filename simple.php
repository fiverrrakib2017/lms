<?php

include 'include/database_connect.php';
include 'include/security_token.php';

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Learning Managment-SOFTWARE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css">
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/deleteModal.css">
</head>

<body data-sidebar="dark">


    <!-- Loader -->
    <!--  <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/it-fast.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/it-fast.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/it-fast.png" alt="" height="22">
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
                        <h4 class="page-title">Student Add</h4>
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
                <div class="container-fluid " id="mainDiv">
                    <div class="row d-flex">
                        <div class="col-md-12">
                            <div class="row d-flex">
                                <div class="col-md-6  ">
                                    <div class="card card-body">
                                        <form id="student_form" method="POST">
                                            <div class="form-group mb-2">
                                                <label>Student Name</label>
                                                <select type="text" id="student_name" class="form-select select2" style="width:100%" require>
                                                <option>Select</option>
                                                        <?php
                                                        if ($allPackag = $con->query("SELECT * FROM student WHERE status=1")) {
                                                            while ($rows = $allPackag->fetch_array()) {
                                                                echo '<option value=' . $rows['id'] . '>' . $rows['name'] . '</option>';
                                                            }
                                                        }



                                                        ?>
                                                </select>

                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Choose Course </label>
                                                <select type="text" id="course_name" class="form-select" style="width:100%" require>
                                                <option>Select</option>
                                                <?php

if ($packageList = $con->query("SELECT * FROM package ")) {
    while ($rows = $packageList->fetch_array()) {
        //$pack = '' . $rows['package_name'] . ' ' . $rows['type'] . ' ';
        echo '<option value=' . $rows['package_id'] . '>' . $rows['package_name'] . ' for ' . $rows['type'] . '</option>';
    }
}

?>
                                                </select>

                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered">
                                                    <thead class="bg-primary text-white">
                                                        <th>Course List</th>
                                                        <th>Price</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                    </thead>
                                                    <tbody id="table_data">
                                                        
                                                        <!-- <tr>
                                                            <td>Graphic Design</td>
                                                            <td>14000</td>
                                                            <td>14000</td>
                                                            <td>
                                                                <button class="btn-sm btn btn-danger">Remove</button>
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                    <tfoot class="bg-danger text-white">
                                                        <tr>
                                                            <th class="text-center" colspan="2"></th>
                                                            <th class="text-left" colspan="3">
                                                                Total Amount <strong id="totalAmount">156000</strong>
                                                            </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="form-group text-center">
                                                    <button type="button" id="payment-btn" class="btn btn-success"><i class="fas fa-dollar-sign"></i> Payment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card ">
                                        <div class="card-header">
                                            <input type="search-input" name="" class="form-control" placeholder="Enter search your course">
                                        </div>
                                        <div class="card-body">
                                            <div class="col-md-12 ">
                                                <div class="row d-flex">
                                                    <div class="col-md-4">
                                                        <div class="product-list-box card p-2">
                                                            <a href="javascript:void(0);">
                                                                <img src="https://img-b.udemycdn.com/course/240x135/1565838_e54e_16.jpg" class="img-fluid" alt="work-thumbnail" style="height: auto;">
                                                            </a>
                                                            <div class="detail">
                                                                <h6 class="font-size-10 mt-2"><a href="" class="text-dark">The Complete 2022 Web Development Bootcamp</a> </h6>
                                                                <span>Price:898</span><br>
                                                                <span>Stock:43</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="product-list-box card p-2">
                                                            <a href="javascript:void(0);">
                                                                <img src="https://img-b.udemycdn.com/course/240x135/4252124_63f8_3.jpg" class="img-fluid" alt="work-thumbnail" style="height: auto;">
                                                            </a>
                                                            <div class="detail">
                                                                <h6 class="font-size-10 mt-2"><a href="" class="text-dark">Advanced Foundations of Python Programming | 2022 Training</a> </h6>
                                                                <span>Price:1200</span><br>
                                                                <span>Stock:43</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page-content -->
            <?php include 'Footer/footer.php'; ?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script> >
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.init.js"></script>


    <script src="assets/js/app.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
           $("#course_name").on('change',function(){
               var courseId= $("#course_name").val();
               var getPackageVAL="0";
               $.ajax({
                    type:'POST',
                    url:'include/student.php',
                    data:{id:courseId, getPackageVAL:getPackageVAL},
                    success:function(response){
                        var jsonData=JSON.parse(response);
                         var html='<tr><td>'+jsonData.package_name+'</td><td>'+jsonData.price+'</td><td>'+jsonData.price+'</td><td><button class="btn-sm btn btn-danger remove_item">Remove</button></td></tr>';
                        $("#table_data").append(html);
                    }
               });
           }); 
           $(document).on('click','.remove_item',function(){
            $(this).parent().parent().remove();
           });
        });
    </script>

</body>

</html>