<?php 

require "conn.php";
for($i=131;$i<=140;$i++){
$sql = "INSERT INTO test2 (ID, Number, Class,`Group`) VALUES ($i, $i+3, 'Single',$i-5)";
// $sql="UPDATE test2 SET `Group`=$i-4 WHERE id=$i";
if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
}
$con->close();
?>