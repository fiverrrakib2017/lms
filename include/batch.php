<?php
include 'database_connect.php';
include 'security_token.php';

// if (isset($_POST['allPckage'])) {
// 	$product = new Brand();
// 	$allcategory = $product->allCategoryList();
// 	echo "<option value=''>select</option>";
// 	foreach ($allcategory as $rows) {

// 		echo '<option value="' . $rows['id'] . '">' . $rows['category_name'] . '</option>';
// 	}
// }


if (isset($_POST['allBatch'])) {
	if ($allPack = $con->query("SELECT batch.id, batch.batch_name, package.package_name,package.type FROM batch INNER JOIN package ON package.package_id=batch.package_id;")) {
		while ($rows = $allPack->fetch_array()) {
			$batch = $rows['id'];
			$allSd = $con->query("SELECT * FROM student WHERE batch='$batch' AND status='1' ");
			$total = $allSd->num_rows;
			echo '<tr>
            <td>' . $rows['id'] . '</td>
            <td><a href="std_batch_view.php?id=' . $rows['id'] . '" >' . $rows['batch_name'] . '</a></td>
			<td>' . $rows['package_name'] . ' (' . $rows['type'] . ')</td>
            <td>' . $total . '</td>
            
            <td >
             <a href="std_batch_view.php?id=' . $rows['id'] . '"  class="btn-sm btn btn-info " ><i class="fas fa-eye"></i></a>
            <a data-id=' . $rows['id'] . ' class="btn-sm btn btn-primary editBtn" ><i class="fas fa-edit"></i></a>
            
            <a data-id=' . $rows['id'] . ' class="btn-sm btn btn-danger deleteBtn" ><i class="fas fa-trash"></i></a>
            
            </td>

            </tr>';
		}
	}
}

//delete script 

if (isset($_POST['deleteData'])) {
	$id = $_POST['id'];
	if ($result = $con->query("DELETE  FROM batch WHERE id='$id' ")) {
		if ($result == true) {
			echo 1;
		} else {
			echo 0;
		}
	}
}

//get one data in customer 
if (isset($_POST['getBatchDetails'])) {
	$id = $_POST['id'];
	if ($allBatch = $con->query("SELECT * FROM batch WHERE id='$id' ")) {
		while ($rows = $allBatch->fetch_array()) {
			echo json_encode($rows);
		}
	}
}

if (isset($_POST['updateBatchData'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	if ($result = $con->query("UPDATE batch SET batch_name='$name'  WHERE id='$id'  ")) {
		if ($result == true) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
if (isset($_POST['addBatchData'])) {
	$name = $_POST['name'];
	$category = $_POST['category'];
	$uid = $_SESSION["uid"];
	if ($result = $con->query("INSERT INTO batch(uid,batch_name,package_id)VALUES('$uid','$name','$category')")) {
		if ($result == true) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
