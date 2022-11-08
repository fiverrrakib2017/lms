<?php
include 'database_connect.php';
include 'security_token.php';

if (isset($_POST['getPackageVAL'])) {
	$id = $_POST['id'];
	if ($allPack = $con->query("SELECT * FROM package where package_id='$id' ")) {
		while ($rows = $allPack->fetch_array()) {
			echo json_encode($rows);
		}
	}
}


if (isset($_POST['getStudentInvoiceData'])) {
	if ($allPack = $con->query("SELECT * FROM `student` WHERE status='1' ")) {
		while ($rows = $allPack->fetch_array()) {
			if ($rows['due'] ==0) {
				$status = '<span class="badge bg-success">Paid</span>';
			}else{
				$status = '<span class="badge bg-danger">Due</span>';
			}
			echo '<tr>
            <td>' . $rows['id'] . '</td>
            <td>' . $rows['name'] . '</td>
            <td>' . $status . '</td>
            
            <td >
            <a href="invoice_full_view.php?id=' . $rows['id'] . '"  class="btn-sm btn btn-info " ><i class="fas fa-eye"></i></a>
            
            </td>

            </tr>';
		}
	}
}

if (isset($_POST['getStudentData'])) {
	if ($allPack = $con->query("SELECT * FROM `student` WHERE status='1' ")) {
		while ($rows = $allPack->fetch_array()) {
			if ($rows['status'] == 1) {
				$status = '<span class="badge bg-success">Active</span>';
			}
			echo '<tr>
            <td>' . $rows['id'] . '</td>
            <td>' . $rows['name'] . '</td>
            <td>' . $rows['email'] . '</td>
            <td>' . $rows['mobile'] . '</td>
            <td>' . $rows['address'] . '</td>
            <td>' . $status . '</td>
            
            <td >
            <a href="std_view.php?id=' . $rows['id'] . '"  class="btn-sm btn btn-success " ><i class="fas fa-eye"></i></a>

            <a  href="std_update.php?id=' . $rows['id'] . '"  class="btn-sm btn btn-primary" ><i class="fas fa-edit"></i></a>
            
            <a	 data-id=' . $rows['id'] . ' class="btn-sm btn btn-danger deleteBtn" ><i class="fas fa-trash"></i></a>
            
            </td>

            </tr>';
		}
	}
}
if (isset($_POST['getBtachStudentData'])) {
		$id=$_POST['id'];
	if ($allPack = $con->query("SELECT * FROM `student` WHERE status='1' AND batch='$id' ")) {
		while ($rows = $allPack->fetch_array()) {
			if ($rows['status'] == 1) {
				$status = '<span class="badge bg-success">Active</span>';
			}
			echo '<tr>
            <td>' . $rows['id'] . '</td>
            <td>' . $rows['name'] . '</td>
            <td>' . $rows['email'] . '</td>
            <td>' . $rows['mobile'] . '</td>
            <td>' . $rows['address'] . '</td>
            <td>' . $status . '</td>
            
            <td >
            <a href="std_view.php?id=' . $rows['id'] . '"  class="btn-sm btn btn-success " ><i class="fas fa-eye"></i></a>

            <a  href="std_update.php?id=' . $rows['id'] . '"  class="btn-sm btn btn-primary" ><i class="fas fa-edit"></i></a>
            
            <a	 data-id=' . $rows['id'] . ' class="btn-sm btn btn-danger deleteBtn" ><i class="fas fa-trash"></i></a>
            
            </td>

            </tr>';
		}
	}
}
if (isset($_POST['getStudentDraftData'])) {
	if ($allPack = $con->query("SELECT * FROM `student` WHERE status='0' ")) {
		while ($rows = $allPack->fetch_array()) {
			if ($rows['status'] == 1) {
				$status = '<span class="badge bg-success">Active</span>';
			}else{
				$status = '<span class="badge bg-danger">In Active</span>';
			}
			echo '<tr>
            <td>' . $rows['id'] . '</td>
            <td>' . $rows['name'] . '</td>
            <td>' . $rows['email'] . '</td>
            <td>' . $rows['mobile'] . '</td>
            <td>' . $rows['address'] . '</td>
            <td>' . $status . '</td>
            
            <td >
            <a href="std_view.php?id=' . $rows['id'] . '"  class="btn-sm btn btn-info " ><i class="fas fa-eye"></i></a>

            <a  href="std_update.php?id=' . $rows['id'] . '"  class="btn-sm btn btn-primary" ><i class="fas fa-edit"></i></a>
            
            <a	 data-id=' . $rows['id'] . ' class="btn-sm btn btn-success deleteBtn" >Active</a>
            
            </td>

            </tr>';
		}
	}
}

//delete script 

if (isset($_POST['studentDeleteId'])) {
	$id = $_POST['studentDeleteId'];
	if ($result = $con->query("UPDATE  student SET status='0' WHERE id='$id' ")) {
		if ($result == true) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
if (isset($_POST['studentDraftDeleteId'])) {
	$id = $_POST['studentDraftDeleteId'];
	if ($result = $con->query("UPDATE  student SET status='1' WHERE id='$id' ")) {
		if ($result == true) {
			echo 1;
		} else {
			echo 0;
		}
	}
}

//get one data in customer 



if (isset($_POST['addStudentData'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$package = $_POST['package'];
	$study = $_POST['study'];
	$batch = $_POST['batch'];
	$address = $_POST['address'];
	$nid = $_POST['nid'];
	$paid = $_POST['paid'];
	$discount = $_POST['discount'];
	$due = $_POST['due'];
	$total = $_POST['total'];
	$userId = $_SESSION["uid"];
	$teacher_asign = $_POST["teacher_asign"];
	$reference = $_POST["reference"];
	$enrollment = $_POST["enrollment"];
	$from = $_POST["from"];
	$to = $_POST["to"];
	$complete_date = $_POST["complete_date"];
	//$reg_date=date('Y-m-d h:i:sa');
	if ($result = $con->query("INSERT INTO student(name,	mobile,	address,	email,	nid,	study,teacher_asign,reference,	package,	batch, 	paid, discount,	due, total_amount,	status,	uid)VALUES('$name','$mobile',	'$address',	'$email',	'$nid'	,'$study','$teacher_asign','$reference','$package',	'$batch',	'$paid', '$discount',	'$due', '$total',	'1','$userId')")) {
		if ($result == true) {
			 $last_id = $con->insert_id;
			$con->query("INSERT INTO enrolment(	`enrollment_date`,`from`,`to`,`sid`,`complete_date`)VALUES('$enrollment','$from','$to','$last_id','$complete_date')");
			echo 1;
		} else {
			echo 0;
		}
	}
}

if (isset($_POST['UpdateStudentData'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$package = $_POST['package'];
	$study = $_POST['study'];
	$batch = $_POST['batch'];
	$address = $_POST['address'];
	$nid = $_POST['nid'];
	$paid = $_POST['paid'];
	$due = $_POST['due'];
	$teacher_asign = $_POST["teacher_asign"];
	$reference = $_POST["reference"];
	//$reg_date=date('Y-m-d h:i:sa');
	if ($result = $con->query("UPDATE student SET name='$name' , email='$email',mobile='$mobile',package='$package',study='$study',batch='$batch',address='$address',nid='$nid',teacher_asign='$teacher_asign',reference='$reference', paid='$paid',due='$due' WHERE id='$id'  ")) {
		if ($result == true) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
