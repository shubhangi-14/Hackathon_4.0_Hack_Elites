<?php
$db = mysqli_connect('localhost', 'root', '');
$connector = mysqli_select_db("criminal", $db);
?>
<html>
<body>
<?php
$selectSQL = "SELECT * FROM 'sellers'";
 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) )
  {
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
  else
  {
      if( mysql_num_rows( $selectRes )==0 )
	  {
        echo 'No Rows Returned';
      }
	  else
	  {
        while( $row = mysql_fetch_assoc( $selectRes ) )
		{
			var_dump($selectRes);
          echo "{$row['Seller_Lid']}. '  ' .{$row['Seller_Name']}. '  ' .{$row['Type_Bullet']}. '  ' .{$row['Batch_No']}. "\n"";
        }
	  }
  }
    ?>
</body>
</html>