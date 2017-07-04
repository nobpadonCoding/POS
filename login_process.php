<?php
// include("connect.php");
$data_user = $_POST["user"];
$data_password = $_POST["password"];
$data_outletcode = $_POST["outletcode"];
$data_shiftcode = $_POST["shiftcode"];

$result = mysqli_query($con, "SELECT * FROM posusers where username = '".$data_user."' and userpassword = '".$data_password."'");
$rows = mysqli_num_rows($result);
$result2 = mysqli_query($con, "SELECT * FROM posperioduser where usercode = '".$data_user."' and outletcode = '".$data_outletcode."' and shiftcode = '".$data_shiftcode."'");
$row2 = mysqli_num_rows($result2);



if($rows >= 1){

	if ($row2>=1) {

		echo "success";
	}else

	echo "ไม่มีสิทธฺ์";

}else{

	echo"no success";

}

?>
