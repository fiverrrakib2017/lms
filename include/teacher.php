<?php 
include 'database_connect.php';
include 'security_token.php';



if (isset($_POST['DraftallTeacher'])) {
	if ($allPack=$con->query("SELECT * FROM teacher  where status='0' ")) {
		while ($rows=$allPack->fetch_array()) {
			if ($rows['status'] == 0) {
				$status = '<span class="badge bg-danger">In Active</span>';
			}
			 echo '<tr>
            <td>'.$rows['id'].'</td>
            <td>'.$rows['teacher_name'].'</td>
            <td>'.$rows['designation'].'</td>
            <td>'.$rows['working_days'].'</td>
            <td>'.$status.'</td>
            
            <td >
            
            <a data-id='.$rows['id'].' class="btn-sm btn btn-success deleteBtn" >Active</a>
            
            </td>

            </tr>';
		}
	}
}
if (isset($_POST['allTeacher'])) {
	if ($allPack=$con->query("SELECT * FROM teacher  where status='1' ")) {
		while ($rows=$allPack->fetch_array()) {
			if ($rows['status'] == 1) {
				$status = '<span class="badge bg-success">Active</span>';
			}
			 echo '<tr>
            <td>'.$rows['id'].'</td>
            <td>'.$rows['teacher_name'].'</td>
            <td>'.$rows['designation'].'</td>
            <td>'.$rows['working_days'].'</td>
            <td>'.$status.'</td>
            
            <td >
            <a data-id='.$rows['id'].' class="btn-sm btn btn-primary editBtn" ><i class="fas fa-edit"></i></a>
            
            <a data-id='.$rows['id'].' class="btn-sm btn btn-danger deleteBtn" ><i class="fas fa-trash"></i></a>
            
            </td>

            </tr>';
		}
	}
}

//delete script 

if (isset($_POST['deleteData'])) {
	$id=$_POST['id'];
	if ($result=$con->query("UPDATE  teacher SET status='0' WHERE id='$id' ")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
}

if (isset($_POST['teacherActive'])) {
	$id=$_POST['id'];
	if ($result=$con->query("UPDATE  teacher SET status='1' WHERE id='$id' ")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
}

//get one data in customer 
if (isset($_POST['getTeacherDetails'])) {
	$id=$_POST['id'];
	if ($allTeacher=$con->query("SELECT * FROM teacher WHERE id='$id' ")) {
		while ($rows=$allTeacher->fetch_array()) {
			echo json_encode($rows);
		}
	}
	
}

if (isset($_POST['updateTeacherData'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$working_days=$_POST['working_days'];
	$designation=$_POST['designation'];
	if ($result=$con->query("UPDATE teacher SET teacher_name='$name' ,designation='$designation',working_days='$working_days' WHERE id='$id'  ")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
	
}
if (isset($_POST['addTeacherData'])) {
	$name=$_POST['name'];
	$working_days=$_POST['working_days'];
	$designation=$_POST['designation'];
	$uid=$_SESSION["uid"];
	if ($result=$con->query("INSERT INTO teacher(uid,teacher_name,designation,working_days)VALUES('$uid','$name','$designation','$working_days')")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
}


 ?>