<?php
$db = mysqli_connect('localhost', 'root', '');
$connector = mysqli_select_db("criminal", $db);
?>
<html>
<body>
<?php
$selectSQL = 'SELECT * FROM `sellers`';
 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
<table border="2">
  <thead>
    <tr>
      <th>Seller Lid</th>
      <th>Seller Name</th>
      <th>Type Bullet</th>
      <th>Batch Num</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['Seller_Lid']}</td><td>{$row['Seller_Name']}</td><td>{$row['Type_Bullet']}</td><td>{$row['Batch_No']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</body>
</html>