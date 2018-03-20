<?php
$db = mysqli_connect('localhost', 'root', '', 'criminal')
	or die('error connecting');
?>
<html>
<body>
<?php
	$batch=$_POST["Batch_No"];
$query = 'SELECT * FROM sellers WHERE Batch_No='$batch' ';
$result = mysqli_query($db, $query);
if(!$result)
{
die('error');
}
while($row = mysqli_fetch_array($result))
{
echo "{$row['Seller_Lid']}  {$row['Batch_No']}";
echo "<br>";
}
?>
</body>
</html>

