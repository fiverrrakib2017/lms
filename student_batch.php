<?php

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
                        <h4 class="page-title">Student Batch</h4>
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
                <div class="container " id="mainDiv">
                    <div class="row">
                        <div class="col-md-12 ">

                            <div class="card">
                                <div class="card-body">
                                    <button class="btn-sm btn btn-success mb-2" id="addBtn"><i class="mdi mdi-account-plus"></i>
                                        Add New Batch</button>

                                    <div class="table-responsive" id="tableStyle">
                                        <table id="batchDataTable" class="table table-striped table-bordered  " cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">ID</th>
                                                    <th class="th-sm">Batch Name</th>
                                                    <th class="th-sm">Category</th>
                                                    <th class="th-sm">Total Student</th>
                                                    <th class="th-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="batch_table">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div id="loaderDiv" class="container ">
                    <div class="row">
                        <div class="col-md-12 text-center ">
                            <div class="text-center  ">
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
                <!---delete modal---->
                <div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Update Batch <span id="updateId" class="d-none"></span></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <div id="UpdateLoaderDiv" class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="text-center  ">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="mainModal" class="d-none">
                                    <div class="row d-flex">

                                        <div class="form-group mb-2">
                                            <label for="">Batch Name</label>
                                            <input id="updateBatchName" type="text" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                                <button id="updateBrandBtn" type="button" class="btn btn-primary">Update Now</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!---Add  modal---->
                <div id="addModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel"><i class="mdi mdi-account-plus"></i> Add Batch</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <div id="addLoaderDiv" class="container ">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="text-center  ">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="addMainModal" class="d-none">
                                    <div class="row d-flex">
                                        <div class="form-group mb-2">
                                            <label for="">Batch Name</label>
                                            <input id="addBatchName" type="text" class="form-control" placeholder="Enter Your Batch Name">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="">Batch Category</label>
                                            <select id="addBatchCategory" class="form-select">
                                                <option>Select</option>
                                                <?php

                                                if ($allPack = $con->query("SELECT package_id,package_name,type FROM package")) {
                                                    while ($rows = $allPack->fetch_array()) {
                                                        echo '<option value="' . $rows['package_id'] . '">' . $rows['package_name'] . '(' . $rows['type'] . ')</option>';
                                                    }
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn-sm btn btn-danger " data-bs-dismiss="modal">Close</button>
                                <button id="addBatchConfirmBtn" type="button" class="btn-sm btn btn-success"><i class="mdi mdi-account-plus"></i>&nbsp;Add Now</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
            </div>
            <!-- End Page-content -->









            <?php include 'Footer/footer.php'; ?>

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
            allBatch()

            function allBatch() {
                var allBatch = "0";
                $.ajax({
                    url: 'include/batch.php',
                    type: 'POST',
                    data: {
                        allBatch: allBatch
                    },
                    success: function(response) {
                        $("#batch_table").html(response);
                        $("#loaderDiv").addClass('d-none');
                        $("#batchDataTable").dataTable(deleteProcess(), editProcess());
                    }
                });
            }
            //delete  Script
            function deleteProcess() {
                $(".deleteBtn").click(function() {
                    $("#deleteModal").modal('show');
                    var id = $(this).data('id');
                    $("#deleteId").html(id);
                });
            }
            //delete data
            $("#deleteConfirmBtn").click(function() {
                var delteConfirmId = $("#deleteId").html();
                deleteData(delteConfirmId);
            });

            function deleteData(deleteId) {
                var deleteData = "Processs";
                $.ajax({
                    type: 'POST',
                    data: {
                        id: deleteId,
                        deleteData: deleteData
                    },
                    url: 'include/batch.php',
                    success: function(response) {
                        if (response == 1) {
                            toastr.success("Delete Successfull");
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                            $("#deleteModal").modal('hide');
                        } else {
                            toastr.success("Pelease Try Again");
                        }



                    }
                });
            }
            //edit Customer process 
            function editProcess() {
                $(".editBtn").click(function() {
                    $("#editModal").modal('show');
                    var id = $(this).data('id');
                    $("#updateId").html(id);
                    getBatchDetails(id);
                });
            }

            const getBatchDetails = (editId) => {
                var getBatchDetails = "0";
                $.ajax({
                    type: 'POST',
                    url: 'include/batch.php',
                    data: {
                        getBatchDetails: getBatchDetails,
                        id: editId
                    },
                    success: function(response) {
                        var jsonData = JSON.parse(response);
                        setTimeout(() => {
                            $("#mainModal").removeClass('d-none');
                            $("#UpdateLoaderDiv").addClass('d-none');
                        }, 1000);
                        $("#updateBatchName").val(jsonData.batch_name)
                    }
                });
            }
            $("#updateBrandBtn").click(function() {
                //$("#updateCustomerBtn").html('Please Wait....');
                var updateId = $("#updateId").html()
                var updateBatchName = $("#updateBatchName").val();
                updateBatch(updateId, updateBatchName);
            });

            const updateBatch = (updateId, updateBatchName) => {
                if (updateBatchName.length == 0) {
                    toastr.error("Batch Name is require");
                } else {
                    var updateBatchData = "0";
                    $.ajax({
                        url: 'include/batch.php',
                        type: 'POST',
                        data: {
                            updateBatchData: updateBatchData,
                            id: updateId,
                            name: updateBatchName
                        },
                        success: function(response) {
                            if (response == 1) {
                                toastr.success("Update Successfully");
                                $("#editModal").modal('hide');
                                setTimeout(() => {
                                    location.reload();
                                }, 1000);
                            } else {
                                toastr.error("Please Try Again");
                            }
                        }
                    });
                }
            }



            //customer added
            $("#addBtn").click(function() {
                $("#addModal").modal('show');
                setTimeout(() => {
                    $("#addLoaderDiv").addClass('d-none');
                    $("#addMainModal").removeClass('d-none');
                }, 1000);
            });
            $("#addBatchConfirmBtn").click(function() {
                var addBatchName = $("#addBatchName").val()
                var addBatchCategory = $("#addBatchCategory").val()
                addBrand(addBatchName, addBatchCategory);
            });

            function addBrand(addBatchName, addBatchCategory) {
                if (addBatchName.length == 0) {
                    toastr.error("Batch Name is require");
                } else if (addBatchCategory.length == 0) {
                    toastr.error("Batch Category is require");
                } else {
                    var addBatchData = "0";
                    $.ajax({
                        url: 'include/batch.php',
                        type: 'POST',
                        data: {
                            addBatchData: addBatchData,
                            name: addBatchName,
                            category: addBatchCategory
                        },
                        success: function(response) {
                            if (response == 1) {
                                toastr.success("Add Successfully");
                                $("#addModal").modal('hide');
                                setTimeout(() => {
                                    location.reload();
                                }, 1000);
                            } else {
                                toastr.error("Please Try Again")
                            }

                        }
                    });
                }

            }
        });
    </script>
</body>

</html>