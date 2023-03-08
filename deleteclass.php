<?php
require_once 'config.php';
$adm = (int)$_GET['class'];
mysqli_select_db($link,"sample");
$sql="SELECT * FROM users WHERE class = '".$adm."'";
$result = mysqli_query($link,$sql);
$sql = "DELETE FROM users WHERE class = '".$adm."'";//ALTER TABLE `users` ADD `perc1` VARCHAR(50) NOT NULL AFTER `sst1`;
if ($link->query($sql) === TRUE) {
echo "<div class='center card-panel green container'><span class='white-text'>All Records of Students from class ".$adm." Deleted Successfully!!</span></div>";
} else {
echo "Error deleting record: " . $link->error;
}

 ?>
