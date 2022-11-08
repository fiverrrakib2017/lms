<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li>
            <a href="index.php" class="waves-effect">
                <i class="mdi mdi-view-dashboard"></i>
                <span> Dashboard </span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="mdi mdi-account"></i>
                <span>Student</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="add_student.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span> Add Student </span>
                    </a>
                </li>
                <li>
                    <a href="list_student.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Student List</span>
                    </a>
                </li>
                <li>
                    <a href="student_draft.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Student Draft</span>
                    </a>
                </li>
                <li>
                    <a href="package_student.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Student Package</span>
                    </a>
                </li>
                <li>
                    <a href="student_batch.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Batch</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="mdi mdi-account"></i>
                <span>Teacher</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                
                <li>
                    <a href="add_teacher.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Teacher List</span>
                    </a>
                </li>
                <li>
                    <a href="teacher_draft.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Teacher Draft</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="mdi mdi-book-multiple-outline"></i>
                <span>Invoice</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="add_invoice.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span> Add Invoice </span>
                    </a>
                </li>
                <li>
                    <a href="invoice_list.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Invoice List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="mdi mdi-book-multiple-outline"></i>
                <span>Maintenance</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="expense.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Expense</span>
                    </a>
                </li>
                <li>
                    <a href="withdraw.php" class="waves-effect">
                        <i class="mdi mdi-send"></i>
                        <span>Withdraw</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class= "far fa-envelope"></i>
                <span>SMS</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="message_template.php">Message Templates</a></li>
                <li><a href="send_message.php">Send SMS </a></li>
            </ul>
        </li>

        

<?php 
include 'include/database_connect.php';
if ($_SESSION['uid']) {
    $sessionId= $_SESSION['uid'];
    if ($allUsr=$con->query("SELECT * FROM admin WHERE id='$sessionId' ")) {
        while ($rows=$allUsr->fetch_array()) {
             $status= $rows['status'];
        }
    }
}

if ($status==0) {
   echo '<li>
            <a href="users.php" class="waves-effect">
                <i class="mdi mdi-account-switch"></i>
                <span> Users </span>
            </a>
        </li>';
}

 ?>
        
        

      

    </ul>
</div>
