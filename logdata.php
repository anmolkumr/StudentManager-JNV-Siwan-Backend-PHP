<?php
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php


$q = $_GET['username'];

$con = mysqli_connect('fdb26.biz.nf','2987060_sample','jnvkhsiwanandpass321','2987060_sample');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sample");
$sql="SELECT * FROM users WHERE username = '".$q."'";
$result = mysqli_query($con,$sql);
$arr = mysqli_fetch_assoc($result);
  echo "<h2>Welcome Mr. ".$arr['password']."</h2>";
  echo "<h3>Class- ".$arr['class']."th</h3>";
  echo "<br>";
  echo "<h2>Semi-Annual Result</h2>";
  echo "<table border='1'";
    echo "<tr>";
      echo "<th>English</th>";
      echo "<th>Hindi</th>";
      echo "<th>Maths</th>";
      echo "<th>Science</th>";
      echo "<th>Sst.</th>";
    echo "</tr>";
    echo "<tr>";
      echo "<td>".$arr['eng1']."</td>";
      echo "<td>".$arr['hin1']."</td>";
      echo "<td>".$arr['math1']."</td>";
      echo "<td>".$arr['sci1']."</td>";
      echo "<td>".$arr['sst1']."</td>";


    echo "</tr>";
 echo "</table>";
 echo "<br>";
   echo "<span class='percent'>Percentage is ".$arr['perc1']."</span>";
 echo "<br>";

   echo "<h2>Annual Result</h2>";
   echo "<table border='1'";
     echo "<tr>";
       echo "<th>English</th>";
       echo "<th>Hindi</th>";
       echo "<th>Maths</th>";
       echo "<th>Science</th>";
       echo "<th>Sst.</th>";
     echo "</tr>";
     echo "<tr>";
       echo "<td>".$arr['eng2']."</td>";
       echo "<td>".$arr['hin2']."</td>";
       echo "<td>".$arr['math2']."</td>";
       echo "<td>".$arr['sci2']."</td>";
       echo "<td>".$arr['sst2']."</td>";
     echo "</tr>";
  echo "</table>"; echo "<br>";
     echo "<span class='percent'>Percentage is ".$arr['perc2']."</span>";
 echo "<br>";
mysqli_close($con);
?>
</body>
</html>
