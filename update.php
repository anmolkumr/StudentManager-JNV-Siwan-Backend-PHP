<?php
require_once 'config.php';
$adm = (int)$_GET['username'];

mysqli_select_db($link,"sample");
$sql="SELECT * FROM users WHERE username = '".$adm."'";
$result = mysqli_query($link,$sql);
$arr = mysqli_fetch_assoc($result);
$idn = $class = $eng1 = $hin1 = $math1 = $sci1 = $sst1 = $perc1 = $eng2 = $hin2 = $math2 = $sci2 = $sst2 = $perc2 ="";
if(isset($_POST["username"]) && !empty($_POST["username"])){
     $idn = $_POST["username"];
     $class = $_POST["class"];
     $eng1 = $_POST["eng1"];
     $hin1 = $_POST["hin1"];
     $math1 = $_POST["math1"];
     $sci1 = $_POST["sci1"];
     $sst1 = $_POST["sst1"];
     $perc1 =(($eng1 +$hin1 +$math1 +$sci1 +$sst1) * 100) / 500;
     $eng2 = $_POST["eng2"];
     $hin2 = $_POST["hin2"];
     $math2 = $_POST["math2"];
     $sci2 = $_POST["sci2"];
     $sst2 = $_POST["sst2"];
     $perc2 =(($eng2 +$hin2 +$math2 +$sci2 +$sst2) * 100) / 500;
    $sql = "UPDATE users SET class = '$class', eng1='$eng1', hin1='$hin1', math1='$math1', sci1='$sci1', sst1='$sst1',perc1='$perc1', eng2='$eng2', hin2='$hin2', math2='$math2', sci2='$sci2', sst2='$sst2', perc2='$perc2' WHERE username = $idn";
//ALTER TABLE `users` ADD `perc1` VARCHAR(50) NOT NULL AFTER `sst1`;
if ($link->query($sql) === TRUE) {
  header('location: admin.php');
} else {
    echo "Error deleting record: " . $link->error;
}
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
 <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
           <label>Admission Number</label>
          <input type="text" name="username" class="form-control" value="<?php echo $adm; ?>">
          <label>Class</label>
          <input type="text" name="class" class="form-control" value="<?php echo $arr['class']; ?>">
      </div>


      <h3>Semi-Annual</h3>
      <table>
        <tr>
          <th>English</th>
          <th>Hindi</th>
          <th>Mathematics</th>
          <th>Science</th>
          <th>Social Science</th>
        </tr>
        <tr>
          <td><input type="text" name="eng1" value="<?php echo $arr['eng1']; ?>"></td>
          <td><input type="text" name="hin1" value="<?php echo $arr['hin1']; ?>"></td>
          <td><input type="text" name="math1" value="<?php echo $arr['math1']; ?>"></td>
          <td><input type="text" name="sci1" value="<?php echo $arr['sci1']; ?>"></td>
          <td><input type="text" name="sst1" value="<?php echo $arr['sst1']; ?>"></td>
        </tr>
      </table>
      <h3>Annual</h3>
      <table>
        <tr>
          <th>English</th>
          <th>Hindi</th>
          <th>Mathematics</th>
          <th>Science</th>
          <th>Social Science</th>
        </tr>
        <tr>
          <td><input type="text" name="eng2" value="<?php echo $arr['eng2']; ?>"></td>
          <td><input type="text" name="hin2" value="<?php echo $arr['hin2']; ?>"></td>
          <td><input type="text" name="math2" value="<?php echo $arr['math2']; ?>"></td>
          <td><input type="text" name="sci2" value="<?php echo $arr['sci2']; ?>"></td>
          <td><input type="text" name="sst2" value="<?php echo $arr['sst2']; ?>"></td>
        </tr>
      </table>
      <input type="submit" class="btn btn-primary" value="Submit">
      <input type="reset" class="btn btn-default" value="Reset">
    </form>
   </body>
 </html>
