<?php
include("connect.php");

$data = array();
$result =mysqli_query($con, "SELECT * FROM posoutlet");

while ($row = mysqli_fetch_array($result)){
  $data[] = array("outletcode" => $row["outletcode"] , "outletname" => $row["outletname"] );
}
echo json_encode($data);

?>
