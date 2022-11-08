<?php
include 'include/database_connect.php';
include 'include/security_token.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($allStudent = $con->query("SELECT * FROM `student` INNER JOIN enrolment ON student.id=enrolment.sid WHERE id='$id' ")) {
        while ($rows = $allStudent->fetch_assoc()) {
            $id = $rows['id'];
            $name = $rows['name'];
            $email = $rows['email'];
            $mobile = $rows['mobile'];
            $package = $rows['package'];
            $study = $rows['study'];
            $batch = $rows['batch'];
            $address = $rows['address'];
            $nid = $rows['nid'];
            $paid = $rows['paid'];
            $due = $rows['due'];
            $total_amount = $rows['total_amount'];
            $discount = $rows['discount'];
            $teacher_asign = $rows['teacher_asign'];
            $reference = $rows['reference'];
            $enrollment_date = $rows['enrollment_date'];
            $from = $rows['from'];
            $to = $rows['to'];
            $complete_date = $rows['complete_date'];
        }
    }
}

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
                        <h4 class="page-title">Student Details</h4>
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
                <div class="container d-none" id="mainDiv">
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <div class="card">
                                <div class="card-header bg-primary text-white">Student Details</div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Name</label>
                                                    <input type="text" id="name" class="form-control" value="<?php echo $name; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Email</label>
                                                    <input type="email" id="email" class="form-control" value="<?php echo $email; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Mobile</label>
                                                    <input type="text" id="mobile" class="form-control" value="<?php echo $mobile; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Package</label>


                                                    <?php

                                                    if ($packageList = $con->query("SELECT * FROM package WHERE package_id='$package' ")) {
                                                        while ($rows = $packageList->fetch_array()) {
                                                            $pack = '' . $rows['package_name'] . ' ' . $rows['type'] . ' ';
                                                            echo ' <input type="text" id="package" class="form-control" value="' . $pack . ' " disabled>';
                                                        }
                                                    }

                                                    ?>



                                                    </input>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Study</label>
                                                    <input type="text" id="study" class="form-control" value="<?php echo $study; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Batch</label>
                                                    <?php
                                                    $batchId = $batch;
                                                    if ($allPackag = $con->query("SELECT batch.id, batch.batch_name, package.package_id,package.package_name,package.type FROM batch INNER JOIN package ON package.package_id=batch.package_id WHERE id=$batchId")) {
                                                        while ($rows = $allPackag->fetch_array()) {
                                                            // echo '<option value=' . $rows['id'] . '>' . $rows['batch_name'] . '(' . $rows['package_name'] . ' for ' . $rows['type'] . ')</option>';

                                                            $pack = '' . $rows['batch_name'] . ' ' . $rows['package_name'] . ' ' . $rows['type'] . ' ';
                                                            echo ' <input type="text" id="package" class="form-control" value="' . $pack . ' " disabled>';
                                                        }
                                                    }

                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Address</label>
                                                    <input type="text" id="address" class="form-control" value="<?php echo $address; ?>" disabled />
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Nid Card No.</label>
                                                    <input type="text" id="nid" class="form-control" value="<?php echo $nid; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Teacher Asign</label>
                                                    <select type="text" id="teacher_asign" name="amount" class="form-select" disabled>
                                                        <option>
                                                            <?php
                                                            $teacher_asignId = $teacher_asign;
                                                            if ($allTeacher = $con->query("SELECT * FROM teacher WHERE id='$teacher_asignId' ")) {
                                                                while ($rows = $allTeacher->fetch_array()) {
                                                                    //echo '<option value='.$rows['id'].'>'.$rows['teacher_name'].'</option>';
                                                                    echo $rows["teacher_name"];
                                                                }
                                                            }

                                                            ?>
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Reference</label>
                                                    <input type="text" id="reference" class="form-control" value="<?php echo $reference; ?>" disabled />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Billable Amount</label>
                                                    <input type="text" id="paid" class="form-control" value="<?php echo $total_amount; ?>" disabled />
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Discounted</label>
                                                    <input type="text" id="due" class="form-control" value="<?php echo $discount;
                                                                                                            echo '%'; ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Paid</label>
                                                    <input type="text" id="paid" class="form-control" value="<?php echo $paid;  ?>" disabled />
                                                </div>
                                            </div>

                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Due</label>
                                                    <input type="text" id="due" class="form-control" value="<?php echo $due; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Enrollment Date</label>
                                                    <input type="date" id="enrollment" class="form-control" value="<?php echo $enrollment_date; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>From</label>
                                                    <select id="from" class="form-select" disabled>
                                                        <option><?php echo $from; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>To</label>
                                                    <select id="to" class="form-select" disabled>
                                                        <option><?php echo $to; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Complete Date</label>
                                                    <input type="date" id="complete_date" class="form-control" value="<?php echo $complete_date; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="loaderDiv" class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-5">
                            <div class="text-center mt-5 ">
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---delete modal---->
                <div id="deleteModal" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                            <div class="modal-header flex-column">
                                <div class="icon-box">
                                    <i class="fas fa-trash"></i>
                                </div>
                                <h4 class="modal-title w-100">Are you sure?</h4>
                                <h4 class="modal-title w-100 d-none" id="deleteId"></h4>
                                <a class="close" data-bs-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></a>
                            </div>
                            <div class="modal-body">
                                <p>Do you really want to delete these records? This process cannot be undone.</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" id="deleteConfirmBtn">Delete</button>
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
    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0">
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="Layouts-1">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="Layouts-2">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="Layouts-3">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.init.js"></script>
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script src="assets/js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(() => {
                $("#loaderDiv").addClass('d-none');
                $("#mainDiv").removeClass('d-none');
            }, 1000);
        });
    </script>

</body>

</html>