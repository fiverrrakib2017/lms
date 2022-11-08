<?php 
include 'database_connect.php';
include 'security_token.php';



if (isset($_POST['studentFilter'])) {
	$to_date=$_POST['to_date'];
	$from_date=$_POST['from_date'];

	// if ($result=$con->query("SELECT * FROM student  WHERE   reg_date BETWEEN '$from_date' AND '$to_date' AND status='1' ")) {
	// 	echo 	$result->num_rows;
	// }
	$sql="SELECT * FROM student  WHERE   reg_date BETWEEN '$from_date' AND '$to_date' AND status='1' ";
	$allStudent=$con->query($sql);
	 $totalStudent=$allStudent->num_rows;

	//grand total  SUM(total_amount) as grandTotal
	$allAmount=$con->query("SELECT SUM(total_amount) as grandTotal FROM student  WHERE   reg_date BETWEEN '$from_date' AND '$to_date' AND status='1'");
	while ($rows=$allAmount->fetch_array()) {
	      $grandtotal= $rows['grandTotal'];
	     
	}
    //total Due script
    $allDueAmount=$con->query("SELECT SUM(due) as grandDue FROM student  WHERE   reg_date BETWEEN '$from_date' AND '$to_date' AND status='1'");
	while ($rows=$allDueAmount->fetch_array()) {
	      $totalDue= $rows['grandDue'];
	     
	}

	//total Paid script

	$allPaidAmount=$con->query("SELECT SUM(paid) as grandPaid FROM student  WHERE   reg_date BETWEEN '$from_date' AND '$to_date' AND status='1'");
	while ($rows=$allPaidAmount->fetch_array()) {
	      $totalPaid= $rows['grandPaid'];
	     
	}
	//total batch script
	$sql="SELECT * FROM batch  WHERE   reg_date BETWEEN '$from_date' AND '$to_date'  ";
	$allBatch=$con->query($sql);
	 $totalBatch=$allBatch->num_rows;

    //total expense script
     $allExpense=$con->query("SELECT SUM(amount) as totalExp FROM expense WHERE date BETWEEN '$from_date' AND '$to_date' AND status='0' ");
     while ($expenseRows=$allExpense->fetch_array()) {
         $totalExpense=$expenseRows['totalExp'];
     }
     //total withdraw script
     $allWithdraw=$con->query("SELECT SUM(amount) as totalwithdraw FROM withdraw WHERE date BETWEEN '$from_date' AND '$to_date' AND status='0' ");
     while ($rows=$allWithdraw->fetch_array()) {
         $totalWithdraw=$rows['totalwithdraw'];
     }
     //calculation in net profit
     $totalSpend=$totalExpense+$totalWithdraw;

     $netIncome=number_format($totalPaid-$totalSpend);


	echo '<div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <a href="list_student.php">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-purple me-0 float-end"><i class=" fas fa-users"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-purple" id="activeStd">
                                                    '.$totalStudent.' 
                                                </span>
                                                Total Active Student
                                            </div>
                                           
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div> <!--End col -->
                            <div class="col-md-6 col-xl-3">
                                <a href="student_batch.php">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mini-stat">
                                                <span class="mini-stat-icon bg-blue-grey me-0 float-end"><i class=" fas fa-users"></i></span>
                                                <div class="mini-stat-info">
                                                    <span class="counter text-blue-grey" id="totalBatch">
                                                       '.$totalBatch.' 
                                                    </span>
                                                    Total Batch
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
                                            <span class="mini-stat-icon bg-teal me-0 float-end"><i class=" fas fa-dollar-sign"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="totalDue">
                                                    '.$totalDue.'
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
                                                    '.$totalPaid.'
                                                </span>
                                                Total Paid
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <a href="expense.php">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-purple me-0 float-end"><i class=" fas fa-users"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-purple" id="totalExp">
                                                     '.$totalExpense.'
                                                </span>
                                                Total Expense
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
                                                <span class="counter text-blue-grey" id="totalWithdraw">
                                                    '.$totalWithdraw.'
                                                </span>
                                                Total Withdraw
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End col -->
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-brown me-0 float-end"><i class=" fas fa-donate"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="totalSpend">
                                                    '.$totalSpend.'
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
                                            <span class="mini-stat-icon bg-brown me-0 float-end"><i class="mdi mdi-buffer"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-brown" id="netProfit">
                                                   '.$netIncome.' 
                                                </span>
                                                Net Profit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End col -->








                            ';


}



