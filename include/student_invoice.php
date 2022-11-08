<?php 
include 'database_connect.php';
include 'security_token.php';

if (isset($_POST['getPackageVAL'])) {
	$id=$_POST['id'];
	 if ($allPack=$con->query("SELECT * FROM package where id='$id' ")) {
	 	while ($rows=$allPack->fetch_array()) {
	 		echo json_encode ($rows);
	 	}
	 }
}


if (isset($_POST['studentInvoice'])) {
	$id=$_POST['id'];
	if ($allPack=$con->query("SELECT * FROM `student` INNER JOIN package ON student.package=package.package_id WHERE status='1' AND id='$id' ")) {
		while ($rows=$allPack->fetch_array()) {
			
			 echo '	

			 <div class="card-body">
                           <table id="invoiceTable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                               <thead>
                                   <tr>
                                      <th> <strong>Student ID </strong></th>
									  <th><strong> Student Name </strong></th>
                                      <th><strong> Package Name </strong></th>
									 
                                      <th><strong> Amount </strong></th>
                                   </tr>
                                </thead>
                                <tbody id="invoiceTable">
                                <tr>
                                    <td>'.$rows['id'].'</td>
									<td>'.$rows['name'].'</td>
                                    <td>'.$rows['package_name'].'</td>
                                    <td>'.$rows['total_amount'].' &nbsp; Taka</td>
                                </tr>
                               </tbody>
                               <tfoot style="background: #f6f6f68c;" id="tFooterInvoice">
                                   
                                    <tr>
                                      <th colspan="3"class="text-center"><strong style="float:right;">Paid =</strong></th>
                                      <td colspan="1"><strong>'.$rows['paid'].' &nbsp; Taka</strong></td>
                                    </tr>
                                    <tr>
                                      <th colspan="3"class="text-center"><strong style="float:right;">Due =</strong></th>
                                      <td colspan="1"><strong>'.$rows['due'].' &nbsp; Taka</strong></td>
                                    </tr>
                                    <tr>
                                      <th colspan="3"class="text-center"><strong style="float:right;">Total Billable Amount =</strong></th>
                                      <td colspan="1"><strong>'.$rows['due'].' &nbsp; Taka </strong></td>
                                    </tr>
                                </tfoot>
                           </table> 
                        </div>
                        <div class="card-footer" align="right">
                            
                           
                           <a href="invoice/paid_student_billing.php?id='.$rows['id'].' " class="btn btn-success"><i class="fa fa-print" ></i> Print Paid</a>
						    <a href="invoice/due_student_billing.php?id='.$rows['id'].' " class="btn btn-danger"><i class="fa fa-print" ></i> Print Due</a>
						
						 
                           <button  class="btn btn-primary addMoneyBtn" data-id="'.$rows['id'].'"><i class="mdi mdi-plus"></i> Add Money</button>
                        </div>

			 ';
		}
	}else{
		echo "Data Not Found";
	}
}

//student add money script

if (isset($_POST['addMoney'])) {
	$id=$_POST['id'];
	$add_money=$_POST['amount'];
	//$random=rand(10,100);
	$userId=$_SESSION["uid"];
	
	if ($total=$con->query("SELECT * FROM student WHERE id='$id' ")) {
		while ($rows=$total->fetch_array()) {
			$paidamount= $rows['paid'];
			$due= $rows['due'];
			$grandtotal=$paidamount+$add_money;
			$totalDue=$due-$add_money;
		}
		if ($add_money > $due) {
			echo 0;
		}else{
			$con->query("INSERT INTO invoice(uid, sid, add_money)VALUES('$userId', '$id','$add_money')");
			$con->query("UPDATE student SET paid='$grandtotal' ,due='$totalDue' WHERE id='$id' ");
			echo 1;
		}
	}
}

//delete script 

if (isset($_POST['studentDeleteId'])) {
	$id=$_POST['studentDeleteId'];
	if ($result=$con->query("DELETE  FROM student WHERE id='$id' ")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
}

//get one data in customer 



if (isset($_POST['addStudentData'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$package=$_POST['package'];
	$study=$_POST['study'];
	$batch=$_POST['batch'];
	$address=$_POST['address'];
	$nid=$_POST['nid'];
	$paid=$_POST['paid'];
	$due=$_POST['due'];
	$userId=$_SESSION["uid"];
	//$reg_date=date('Y-m-d h:i:sa');
	if ($result=$con->query("INSERT INTO student(name,	mobile,	address,	email,	nid,	study,	package,	batch,	paid,	due,	status,	uid)VALUES('$name','$mobile',	'$address',	'$email',	'$nid'	,'$study','$package',	'$batch',	'$paid',	'$due',	'1','$userId')")) {
			if ($result==true) {
				echo 1;
		}else{
			echo 0;
		}
	}
	
}

if (isset($_POST['UpdateStudentData'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$package=$_POST['package'];
	$study=$_POST['study'];
	$batch=$_POST['batch'];
	$address=$_POST['address'];
	$nid=$_POST['nid'];
	$paid=$_POST['paid'];
	$due=$_POST['due'];
	//$reg_date=date('Y-m-d h:i:sa');
	if ($result=$con->query("UPDATE student SET name='$name' , email='$email',mobile='$mobile',package='$package',study='$study',batch='$batch',address='$address',nid='$nid',paid='$paid',due='$due' WHERE id='$id'  ")) {
			if ($result==true) {
				echo 1;
		}else{
			echo 0;
		}
	}
	
}


 ?>