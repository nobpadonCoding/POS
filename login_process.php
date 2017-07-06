<?php
include("connect.php");
$data_user = $_POST["user"];
$data_password = $_POST["password"];
$data_outletcode = $_POST["outletcode"];
$data_shiftcode = $_POST["shiftcode"];


$_Str = $data_password;
$RetStr = "";
$_Str = $_Str.'-0';
if ($_Str != "") {
	$length = strlen($_Str);
		for ($i = 1; $i <= $length; $i++) {
		 if (($i % 5) == 0) {
				$RetStr = $RetStr.CHR(ORD($_Str[$i-1])+5);
		 }
		 else{
				$RetStr = $RetStr.CHR(ORD($_Str[$i-1])-5);
		 }

}
	// echo "Encript---> ".$length;
 echo "Encript---> ".$RetStr;
}


$_Str = $data_password;
$RetStr = '';
//$_Str = $_Str.'-0';
if ($_Str != '') {
	$length = strlen($_Str);
		for ($i = 1; $i < $length; $i++) {
		 if (($i % 5) == 0) {
				$RetStr = $RetStr.CHR(ORD($_Str[$i-1])-5);

		 }else{

				$RetStr = $RetStr.CHR(ORD($_Str[$i-1])+5);
		 }

}
 //echo "Decript---> ".$RetStr;
}


if (empty($data_shiftcode)||empty($data_outletcode)) {

	echo "8888";
	exit();

}
if(empty($data_user)||empty($data_password)){

	echo "55555";
	exit();

}else{


$result = mysqli_query($con, "SELECT * FROM posusers where username = '".$data_user."' and userpassword = '".$RetStr."'");
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
}

?>
