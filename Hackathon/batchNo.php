<?php
$db = mysqli_connect('localhost', 'root', '', 'criminals');
?>
<html>
<title>
Home
</title>
<head>
<style>
.btn
{
 border: none;
    background-color: inherit;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    display: inline-block;
}
body
{
background-image:url(orig_628183.jpg);
background-repeat:no-repeat;background-size:100% 100%;
height:100px;background-attachment:fixed;
}
.seller {
    color: green;
}

.manufacturer{
    color: dodgerblue;
}

.manufacturer:hover {
    background: #2196F3;
    color: white;
}
.seller:hover {
    background-color: #4CAF50;
    color: white;
}
.criminal {
    color: red;
}

.criminal:hover {
    background: #f44336;
    color: white;
}
blink {
color:red;
-webkit-animation: blink 1s step-end infinite;
animation: blink 1s step-end infinite
         }

@-webkit-keyframes blink {
67% { opacity: 0 }
 }
@keyframes blink {
67% { opacity: 0 }
}
</style>
<body>
<marquee scrollamount=20>
<img src="download - Copy.jfif" height=135 width=180 align=left></img>&nbsp
<font size=07 color="white" face="Times Roman">&nbsp&nbsp
WELCOME TO RAJASTHAN POLICE CRIME PORTAL</font>
<img src="download.jpg" height=135 width=180></img>
</marquee><br><br><br><br><br><br><br><br><br><br>
<marquee scrollamount=20>
<font size=05 color="white" face="Constantia">
Rajasthan Crime Investigation
</marquee><br><br> <center><h1>
<blink> Database Section</blink></center></h1><br><br>
<font size=07 color="white" face="Constantia"><b>
Seller Database
</b></font>
<font>
</font>
<?php
$query = 'SELECT * FROM firearms  ';
$result = mysqli_query($db, $query);
if(!$result)
{
die('error');
}
echo "<table border='1'>

<tr>

<th>Type_Bullet</th>
<th>Batch_Number</th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Type_Bullet'] . "</td>";

  echo "<td>" . $row['Batch_Number'] . "</td>";

 
 

  echo "</tr>";

  }

echo "</table>";

 

mysql_close($con);

?>



</body>
</html>