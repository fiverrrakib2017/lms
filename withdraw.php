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
                            <h4 class="page-title">Withdraw List</h4>
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
                            Add New
                            Withdraw</button>

                        <div class="table-responsive" id="tableStyle">
                            <table id="withdrawDataTable" class="table table-striped table-bordered  d-none" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">ID</th>
                                        <th class="th-sm">Title</th>
                                        <th class="th-sm">Description</th>
                                        <th class="th-sm">Amount</th>
                                        <th class="th-sm">Date</th>
                                        <th class="th-sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="withdraw_table">

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
            <div class="col-md-12 text-center mt-5 py-5">
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
    <!---delete modal---->
    <div id="viewModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">View Withdraw </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div id="ViewLoaderDiv" class="container d-none">
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
                    <form id="ViewMainModal" class="">
                        <div class="row d-flex">
                            <div class="form-group mb-2">
                                <label for="">Withdraw Title</label>
                                <input disabled   id="viewWithdrawTitle" type="text" class="form-control"placeholder="Enter Your Withdraw Title" >
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Description</label>
                                <textarea disabled   id="viewWithdrawDescription" type="text" class="form-control" placeholder="Enter  Withdraw Amount"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Withdraw Amount</label>
                                <input  disabled   id="viewWithdrawAmount" class="form-control" placeholder="Enter Your Amount" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Date</label>
                                <input disabled   type="date" id="viewWithdrawDate" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Withdraw <span id="updateId"
                            class="d-none"></span></h5>
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
                    <form id="updateMainModal" class="d-none">
                        <div class="row d-flex">
                            <div class="form-group mb-2">
                                <label for="">Withdraw Title</label>
                                <input type="text" id="updateId" class="d-none">
                                <input id="updateWithdrawTitle" type="text" class="form-control"placeholder="Enter Your Withdraw Title" >
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Description</label>
                                <textarea id="updateWithdrawDescription" type="text" class="form-control" placeholder="Enter  Withdraw Amount"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Withdraw Amount</label>
                                <input id="updateWithdrawAmount" class="form-control" placeholder="Enter Your Amount" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Date</label>
                                <input type="date" id="updateWithdrawDate" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-sm btn btn-danger " data-bs-dismiss="modal">Close</button>
                    <button id="updateWithdrawBtn" type="button" class="btn-sm btn btn-success">Update Now</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!---Add  modal---->
    <div id="addModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel"><i class="mdi mdi-account-plus"></i> Add New Withdraw</h5>
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
                                <label for="">Withdraw Title</label>
                                <input type="text" id="userId" value="<?php echo $_SESSION['uid']; ?>" class="d-none">
                                <input id="addWithdrawTitle" type="text" class="form-control"placeholder="Enter Your Withdraw Title" >
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Description</label>
                                <textarea id="addWithdrawDescription" type="text" class="form-control" placeholder="Enter  Withdraw Amount"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Withdraw Amount</label>
                                <input id="addWithdrawAmount" class="form-control" placeholder="Enter Your Amount" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Date</label>
                                <input type="date" id="addWithdrawDate" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-sm btn btn-danger " data-bs-dismiss="modal">Close</button>
                    <button id="addWithdrawConfirmBtn" type="button" class="btn-sm btn btn-success"><i
                            class="mdi mdi-account-plus"></i>&nbsp;Add Now</button>
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
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
            
            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->
        
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
         <!-- JAVASCRIPT -->
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
        $(document).ready(function(){
            getWithdrawData()

        function getWithdrawData() {
            var getWithdrawData="0";
           $.ajax({
                url:'include/withdraw.php',
                type:'POST',
                data:{getWithdrawData:getWithdrawData},
                success:function(response){
                    $("#withdraw_table").html(response);
                    $("#withdrawDataTable").removeClass('d-none');
                    $("#loaderDiv").addClass('d-none');
                    $("#withdrawDataTable").dataTable();
                    deleteWithdraw();
                    updateWithdraw();
                    viewWithdraw();
                }
           });

        }
        //delete script
            function deleteWithdraw(){
                $(".deleteBtn").click(function(){
                    var deleteId= $(this).data('id');

                    var conf=confirm('Are You Sure');
                    if (conf==true) {
                        $.ajax({
                        url:'include/withdraw.php',
                        type:'POST',
                        data:{userDeleteId:deleteId},
                            success:function(response){
                               if (response==1) {
                                    toastr.success("Delete Success");
                                    setTimeout(()=>{
                                        location.reload();
                                    },1000);
                                }else{
                                    toastr.error("Please Try Again");
                                }
                            }
                        });
                    }
                });
            }
            function viewWithdraw(){
                $(".viewBtn").click(function(){
                    var Id= $(this).data('id');
                    $("#viewModal").modal('show'); 
                    //var updateId=$("#updateId").html(Id);
                    //console.log(updateId); 
                    var getWithdrawViewDetails="0";      
                        $.ajax({
                            url:'include/withdraw.php',
                            type:'POST',
                            data:{getWithdrawViewDetails:getWithdrawViewDetails,id:Id},
                            success:function(response){
                                // setTimeout(()=>{
                                //     $("#ViewLoaderDiv").addClass('d-none');
                                //     $("#viewMainModal").removeClass('d-none');
                                // },1000);
                                var jsonData=JSON.parse(response);
                                //$('#updateId').val(jsonData.id);
                                $('#viewWithdrawTitle').val(jsonData.title);
                                $('#viewWithdrawDescription').val(jsonData.description);
                                $('#viewWithdrawAmount').val(jsonData.amount);
                                $('#viewWithdrawDate').val(jsonData.date);
                            }
                        });            
                });
            }
            function updateWithdraw(){
                $(".editBtn").click(function(){
                    var Id= $(this).data('id');
                    $("#editModal").modal('show'); 
                    //var updateId=$("#updateId").html(Id);
                    //console.log(updateId); 
                    var getWithdrawDetails="0";      
                        $.ajax({
                            url:'include/withdraw.php',
                            type:'POST',
                            data:{getWithdrawDetails:getWithdrawDetails,id:Id},
                            success:function(response){
                                setTimeout(()=>{
                                    $("#updateMainModal").removeClass('d-none');
                                    $("#UpdateLoaderDiv").addClass('d-none');
                                },1000);
                                var jsonData=JSON.parse(response);
                                $('#updateId').val(jsonData.id);
                                $('#updateWithdrawTitle').val(jsonData.title);
                                $('#updateWithdrawDescription').val(jsonData.description);
                                $('#updateWithdrawAmount').val(jsonData.amount);
                                $('#updateWithdrawDate').val(jsonData.date);
                            }
                        });            
                });
            }

            //user add script
            $('#addBtn').click(function(){
                $("#addModal").modal('show');
                setTimeout(()=>{
                    $("#addMainModal").removeClass('d-none');
                    $("#addLoaderDiv").addClass('d-none');
                },1000);
                
            });
            //add expense get the data;
            $("#addWithdrawConfirmBtn").click(function(){
                var title=$("#addWithdrawTitle").val();
                var description=$("#addWithdrawDescription").val();
                var exp_amount=$("#addWithdrawAmount").val();
                var exp_date=$("#addWithdrawDate").val();
                var userId=$("#userId").val();
                addWithdrawData(userId,title,description,exp_amount,exp_date);
            });
            //update expense get the data;
            $("#updateWithdrawBtn").click(function(){
                var updateId=$("#updateId").val();
                var title=$("#updateWithdrawTitle").val();
                var description=$("#updateWithdrawDescription").val();
                var amount=$("#updateWithdrawAmount").val();
                var date=$("#updateWithdrawDate").val();
                updateWithdrawData(updateId,title,description,amount,date);
            });
            function updateWithdrawData(updateId,title,description,amount,date){
                if (title.length==0) {
                    toastr.error("Title is require");
                }else if (description.length==0){
                     toastr.error("Description is require");
                }else if(amount.length==0){
                     toastr.error("Amount is require");
                }else if(date.length==0){
                     toastr.error("Date is require");
                }else{
                       var updateWithdrawData="0";
                        $.ajax({
                     url:'include/withdraw.php',
                     type:'POST',
                     data:{updateWithdrawData:updateWithdrawData,title:title,description:description,amount:amount,date:date,id:updateId},
                     success:function(response){
                        if (response==1) {
                           toastr.success("Update Successfully");
                         $("#editModal").modal('hide');
                            setTimeout(()=>{
                                location.reload();
                            },1000); 
                        }else{
                                toastr.error("Please Try Again");
                            }
                        
                        }
                    });
                }
            }

            function addWithdrawData(userId,title,description,exp_amount,exp_date){
                if (title.length==0) {
                    toastr.error("Title is require");
                }else if (description.length==0){
                     toastr.error("Description is require");
                }else if(exp_amount.length==0){
                     toastr.error("Amount is require");
                }else if(exp_date.length==0){
                     toastr.error("Date is require");
                }else{
                       var addWithdrawData="0";
                        $.ajax({
                     url:'include/withdraw.php',
                     type:'POST',
                     data:{addWithdrawData:addWithdrawData,title:title,description:description,exp_amount:exp_amount,exp_date:exp_date,userId:userId},
                     success:function(response){
                        if (response==1) {
                           toastr.success("Add Successfully");
                         $("#addModal").modal('hide');
                            setTimeout(()=>{
                                location.reload();
                            },1000); 
                        }else{
                                toastr.error("Please Try Again");
                            }
                        
                        }
                    });
                }
            }
        });
    </script> 
    </body>
</html>
