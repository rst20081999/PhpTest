<?php require "conn.php";
$sql = "SELECT * FROM test2";
$result = $con->query($sql);
function sum($num) { 
    $sum = 0; 
    for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
    return $sum%10; 
}
echo '<table border="2" cellspacing="2" cellpadding="2"> 
<tr> 
    <td> <font face="Arial">Number</font> </td> 
    <td> <font face="Arial">Class</font> </td> 
    <td> <font face="Arial">Group</font> </td> 
</tr>';

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr> 
                  <td>'.$row["Number"].'</td> 
                  <td>'.$row['Class'].'</td> 
                  <td>'.sum($row['Number']).'</td> 
              </tr>';
    }
} 
?>