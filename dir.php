<html>
<title>control panel</title>
<style>
body {
  background-image: url('https://images7.alphacoders.com/437/437928.jpg');
  background-size: cover;
  text-align: center;
  font-size: 38px;
  color: white;
  float:right;
  background-attachment:fixed;
}
h1 {
  color: white;
  text-align: right;
  margin-right:10%;
}

</style>
<body>
<h1>The direction =</h1>
<?php


$server = "localhost";
$user = "root";
$password = "";
$db = "task1";

$con = mysqli_connect($server,$user,$password,$db)
 or die(mysqli_connect_error());
     
$direction=$_POST['direction']; 

$sql = "UPDATE panel SET direction='$direction' WHERE id=9";
 

if(mysqli_query($con, $sql)){ 
$qry = mysqli_query($con , "SELECT * FROM panel");
	 while($reslt = mysqli_fetch_array($qry)){
	echo $reslt['direction'] ;
}} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);

?>
</body>
</html>