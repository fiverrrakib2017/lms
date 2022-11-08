<?php 
include 'database_connect.php';
include 'security_token.php';




if (isset($_POST['allPackage'])) {
	if ($allPack=$con->query("SELECT * FROM package")) {
		while ($rows=$allPack->fetch_array()) {
			 echo '<tr>
            <td>'.$rows['package_id'].'</td>
            <td>'.$rows['package_name'].'</td>
            <td>'.$rows['type'].'</td>
            <td>'.$rows['price'].'</td>
            
            <td >
            <a data-id='.$rows['package_id'].' class="btn-sm btn btn-primary editBtn" ><i class="fas fa-edit"></i></a>
            
            <a data-id='.$rows['package_id'].' class="btn-sm btn btn-danger deleteBtn" ><i class="fas fa-trash"></i></a>
            
            </td>

            </tr>';
		}
	}
}

//delete script 

if (isset($_POST['deleteData'])) {
	$id=$_POST['id'];
	if ($result=$con->query("DELETE  FROM package WHERE package_id='$id' ")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
}

//get one data in customer 
if (isset($_POST['getPackageDetails'])) {
	$id=$_POST['id'];
	if ($allPackage=$con->query("SELECT * FROM package WHERE package_id='$id' ")) {
		while ($rows=$allPackage->fetch_array()) {
			echo json_encode($rows);
		}
	}
	
}

if (isset($_POST['updatePackageData'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	if ($result=$con->query("UPDATE package SET package_name='$name', type='$type', price='$price' WHERE package_id='$id'  ")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
	
}
if (isset($_POST['addPackageData'])) {
	$name=$_POST['name'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	if ($result=$con->query("INSERT INTO package(`package_name`,`type`,`price`)VALUES('$name','$type','$price')")) {
		if ($result==true) {
			echo 1;
		}else{
			echo 0;
		}
	}
}
