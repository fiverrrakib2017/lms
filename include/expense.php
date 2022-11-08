<?php 
include 'database_connect.php';



if (isset($_POST['getExpenseData'])) {
	if ($allPack=$con->query("SELECT * FROM `expense` WHERE status=0  ")) {
		while ($rows=$allPack->fetch_array()) {
			// if ($rows['status']==0) {
			// 	$status= '<span class="badge bg-success">Admin</span>';
			// }else{
			// 	$status= '<span class="badge bg-info">User</span>';
			// }

			 echo '<tr>
            <td>'.$rows['id'].'</td>
            <td>'.$rows['title'].'</td>
            <td>'.$rows['description'].'</td>
            <td>'.$rows['amount'].'</td>
            <td>'.$rows['date'].'</td>
            
            <td >
            <a data-id='.$rows['id'].'  class="btn-sm btn btn-success viewBtn" ><i class="fas fa-eye"></i></a>

            <a  data-id='.$rows['id'].'  class="btn-sm btn btn-primary editBtn" ><i class="fas fa-edit"></i></a>
            
            <a	 data-id='.$rows['id'].' class="btn-sm btn btn-danger deleteBtn" ><i class="fas fa-trash"></i></a>
            
            </td>

            </tr>';
		}
	}
}

//delete script 

if (isset($_POST['userDeleteId'])) {
	$id=$_POST['userDeleteId'];
	if ($result=$con->query("UPDATE expense SET status='1'  WHERE id='$id'  ")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
}

//


if (isset($_POST['addExpenseData'])) {
	$title=$_POST['title'];
	$description=$_POST['description'];
	$exp_amount=$_POST['exp_amount'];
	$exp_date=$_POST['exp_date'];
	$userId=$_POST['userId'];
	//$reg_date=date('Y-m-d h:i:sa');
	if ($result=$con->query("INSERT INTO expense(uid,title,description,amount,date)VALUES('$userId','$title',	'$description',	'$exp_amount','$exp_date')")) {
			if ($result==true) {
				echo 1;
		}else{
			echo 0;
		}
	}
	
}

if (isset($_POST['getExpenseDetails'])) {
	 $id=$_POST['id'];
	if ($result=$con->query("SELECT *  FROM expense WHERE id='$id' ")) {
		while ($row=$result->fetch_array()) {
			echo  json_encode($row) ;
		}
	}
}

if (isset($_POST['updateExpenseData'])) {
	$id=$_POST['id'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$exp_amount=$_POST['amount'];
	$exp_date=$_POST['date'];
	//$reg_date=date('Y-m-d h:i:sa');
	if ($result=$con->query("UPDATE expense SET title='$title' , description='$description',amount='$exp_amount',date='$exp_date' WHERE id='$id'  ")) {
			if ($result==true) {
				echo 1;
		}else{
			echo 0;
		}
	}
	
}


 ?>