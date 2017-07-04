<?

include("connect.php");

  $outlet = $_POST['outlet'];

$data = array();
$result =mysqli_query($con, "SELECT * FROM posshift where outletcode= '".$outlet."'" );

while ($row = mysqli_fetch_array($result)){
  $data[] = array("shiftname" => $row["shiftname"] , "shiftcode" => $row["shiftcode"] );
}
//echo $outlet;
echo json_encode($data);

?>
