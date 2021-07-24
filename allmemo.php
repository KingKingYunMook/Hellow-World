<?
$conn1 = mysqli_connect("localhost","korea","fighting","korea");

$result1 = mysqli_query($conn1,"SELECT * FROM uni_memo");
echo "<table border=’1′> <tr> <th>memo</th> <th>user_id</th> </tr>";
$n = 1;
while($row = mysqli_fetch_array($result1)){
echo "<tr>";
echo "<td>" . $row['memo'] . "</td>";
echo "<td>" . $row['user_id'] . "</td>";

echo "</tr>";
$n++;
}
echo "</table>";
mysqli_close($conn1);
?>


<!DOCTYPE html>
<html lang="ko">
<html>


<meta charset="UTF-8">
<b><a href="index.php"> 돌아가기 </a></b>

</html>
