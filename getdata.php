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
$q = $_GET['class'];

$con = mysqli_connect('fdb26.biz.nf','2987060_sample','jnvkhsiwanandpass321','2987060_sample');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sample");
$sql="SELECT * FROM users WHERE class = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Adm. No,</th>
<th>Name of Student</th>
<th>English</th>
<th>Mathematics</th>
<th>Hindi</th>
<th>Science</th>
<th>Social Science</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['eng1'] . "</td>";
    echo "<td>" . $row['math1'] . "</td>";
    echo "<td>" . $row['hin1'] . "</td>";
    echo "<td>" . $row['sci1'] . "</td>";
    echo "<td>" . $row['sst1'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
