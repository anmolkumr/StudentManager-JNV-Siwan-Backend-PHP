<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection">
    <script src="./js/materialize.min.js" charset="utf-8"></script>
  </head>
  <body>

    <nav>
      <div class="nav-wrapper blue">
        <a href="#" class="brand-logo center">JNV SIWAN APP ADMIN</a>
        <div class="input-field right">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </div>
    </nav>
    <br>
    <div class="container">
  <div class="center">
    <div class="row">

<a href="admin.php" class="hoverable waves-effect waves-dark btn-large purple darken-1 left-align"><i class="material-icons left">home</i>Home</a>
    <a href="register.php" class="hoverable waves-effect waves-dark btn-large green left-align"><i class="material-icons left">add</i>Register</a>
    <a href="#modal1" class="modal-trigger hoverable waves-effect waves-dark btn-large blue center center-align"><i class="material-icons left">print</i>Print Result</a>
  </div>
  <div class="row">

    <a href="delete.html" class="waves-effect waves-dark btn-large red right-align"><i class="material-icons left">delete</i>Delete</a>
    <a href="#modal2" class="modal-trigger hoverable waves-effect waves-dark btn-large pink right-align"><i class="material-icons left">book</i>View Result</a>
    <a href="classinc.php" class="hoverable waves-effect waves-dark btn-large orange right-align"><i class="material-icons left">book</i>Class Increment</a>
  </div>
    </div>

      <!-- Modal Trigger -->
      <!-- Modal Structure -->
      <div id="modal2" class="modal">
        <div class="modal-content">
          <h4>Please Choose Semester</h4>
          <p></p>
        </div>
        <div class="modal-footer">
          <a href="view.php" class="hoverable waves-effect waves-green btn-flat">Semi- Annual</a>
          <a href="view1.php" class="hoverable waves-effect waves-green btn-flat"> Final Annual</a>
        </div>
      </div>
      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Please Choose Semester</h4>
          <p></p>
        </div>
        <div class="modal-footer">
          <a href="print.php" class="hoverable waves-effect waves-green btn-flat">Semi- Annual</a>
          <a href="print1.php" class="hoverable waves-effect waves-green btn-flat"> Final Annual</a>
        </div>
      </div>
<script type="text/javascript">
$(document).ready(function(){
  $('.modal').modal();
});

</script>
  </div>
  <?php
  require_once 'config.php';
  $sql = "SELECT * FROM users WHERE class = 6";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      echo "<table class='striped'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Adm No.</th>";
      echo "<th>Name</th>";
      echo "<th>Class</th>";
      echo "<th>Semi-Annual (%)</th>";
      echo "<th>Annual (%)</th>";
      echo "<th>Action</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

      while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>" . $row['username'] . "</td>";
           echo "<td>" . $row['password'] . "</td>";
           echo "<td>" . $row['class'] . "</td>";
           echo "<td>" . $row['perc1'] . "</td>";
           echo "<td>" . $row['perc2'] . "</td>";
           echo "<td>";
          echo "<a href='update.php?username=". $row['username'] ."' title='Update Record' <i class='material-icons'>create</i></i></a>&nbsp;";
           echo "<a href='delete.php?username=". $row['username'] ."' title='Delete Record' <i class='material-icons'>delete</i></a>";
           echo "</td>";
           echo "</tr>";}
  } else {
      echo "No Record Found";
  }

  ?>
  <h4 class="center">List of all Students of class 6</h4>
  <?php
  require_once 'config.php';
  $sql = "SELECT * FROM users WHERE class = 7";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      echo "<table class='striped'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Adm No.</th>";
      echo "<th>Name</th>";
      echo "<th>Class</th>";
      echo "<th>Semi-Annual (%)</th>";
      echo "<th>Annual (%)</th>";
      echo "<th>Action</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

      while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>" . $row['username'] . "</td>";
           echo "<td>" . $row['password'] . "</td>";
           echo "<td>" . $row['class'] . "</td>";
           echo "<td>" . $row['perc1'] . "</td>";
           echo "<td>" . $row['perc2'] . "</td>";
           echo "<td>";
          echo "<a href='update.php?username=". $row['username'] ."' title='Update Record' <i class='material-icons'>create</i></i></a>&nbsp;";
           echo "<a href='delete.php?username=". $row['username'] ."' title='Delete Record' <i class='material-icons'>delete</i></a>";
           echo "</td>";
           echo "</tr>";}
  } else {
      echo "No Record Found";
  }

  ?>
  <h4 class="center">List of students of class 7</h4>
  <?php
  require_once 'config.php';
  $sql = "SELECT * FROM users WHERE class = 8";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      echo "<table class='striped'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Adm No.</th>";
      echo "<th>Name</th>";
      echo "<th>Class</th>";
      echo "<th>Semi-Annual (%)</th>";
      echo "<th>Annual (%)</th>";
      echo "<th>Action</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

      while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>" . $row['username'] . "</td>";
           echo "<td>" . $row['password'] . "</td>";
           echo "<td>" . $row['class'] . "</td>";
           echo "<td>" . $row['perc1'] . "</td>";
           echo "<td>" . $row['perc2'] . "</td>";
           echo "<td>";
          echo "<a href='update.php?username=". $row['username'] ."' title='Update Record' <i class='material-icons'>create</i></i></a>&nbsp;";
           echo "<a href='delete.php?username=". $row['username'] ."' title='Delete Record' <i class='material-icons'>delete</i></a>";
           echo "</td>";
           echo "</tr>";}
  } else {
      echo "No Record Found";
  }
  ?>
  <h4 class="center">List of all Students of class 8</h4>
  <?php
  require_once 'config.php';
  $sql = "SELECT * FROM users WHERE class = 9";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      echo "<table class='striped'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Adm No.</th>";
      echo "<th>Name</th>";
      echo "<th>Class</th>";
      echo "<th>Semi-Annual (%)</th>";
      echo "<th>Annual (%)</th>";
      echo "<th>Action</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

      while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>" . $row['username'] . "</td>";
           echo "<td>" . $row['password'] . "</td>";
           echo "<td>" . $row['class'] . "</td>";
           echo "<td>" . $row['perc1'] . "</td>";
           echo "<td>" . $row['perc2'] . "</td>";
           echo "<td>";
          echo "<a href='update.php?username=". $row['username'] ."' title='Update Record' <i class='material-icons'>create</i></i></a>&nbsp;";
           echo "<a href='delete.php?username=". $row['username'] ."' title='Delete Record' <i class='material-icons'>delete</i></a>";
           echo "</td>";
           echo "</tr>";}
  } else {
      echo "No Record Found";
  }
  ?>
  <h4 class="center">List of all Students of class 9</h4>
  <?php
  require_once 'config.php';
  $sql = "SELECT * FROM users WHERE class = 10";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      echo "<table class='striped'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Adm No.</th>";
      echo "<th>Name</th>";
      echo "<th>Class</th>";
      echo "<th>Semi-Annual (%)</th>";
      echo "<th>Annual (%)</th>";
      echo "<th>Action</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

      while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>" . $row['username'] . "</td>";
           echo "<td>" . $row['password'] . "</td>";
           echo "<td>" . $row['class'] . "</td>";
           echo "<td>" . $row['perc1'] . "</td>";
           echo "<td>" . $row['perc2'] . "</td>";
           echo "<td>";
          echo "<a href='update.php?username=". $row['username'] ."' title='Update Record' <i class='material-icons'>create</i></i></a>&nbsp;";
           echo "<a href='delete.php?username=". $row['username'] ."' title='Delete Record' <i class='material-icons'>delete</i></a>";
           echo "</td>";
           echo "</tr>";}
  } else {
      echo "No Record Found";
  }
  ?>
  <h4 class="center">List of all Students of class 10</h4>
  <?php
  require_once 'config.php';
  $sql = "SELECT * FROM users WHERE class = 11";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      echo "<table class='striped'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Adm No.</th>";
      echo "<th>Name</th>";
      echo "<th>Class</th>";
      echo "<th>Semi-Annual (%)</th>";
      echo "<th>Annual (%)</th>";
      echo "<th>Action</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

      while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>" . $row['username'] . "</td>";
           echo "<td>" . $row['password'] . "</td>";
           echo "<td>" . $row['class'] . "</td>";
           echo "<td>" . $row['perc1'] . "</td>";
           echo "<td>" . $row['perc2'] . "</td>";
           echo "<td>";
          echo "<a href='update.php?username=". $row['username'] ."' title='Update Record' <i class='material-icons'>create</i></i></a>&nbsp;";
           echo "<a href='delete.php?username=". $row['username'] ."' title='Delete Record' <i class='material-icons'>delete</i></a>";
           echo "</td>";
           echo "</tr>";}
  } else {
      echo "No Record Found";
  }
  ?>
  <h4 class="center">List of all Stnts of Class 11</h4>
  <?php
  require_once 'config.php';
  $sql = "SELECT * FROM users WHERE class = 12";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      echo "<table class='striped'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Adm No.</th>";
      echo "<th>Name</th>";
      echo "<th>Class</th>";
      echo "<th>Semi-Annual (%)</th>";
      echo "<th>Annual (%)</th>";
      echo "<th>Action</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";

      while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>" . $row['username'] . "</td>";
           echo "<td>" . $row['password'] . "</td>";
           echo "<td>" . $row['class'] . "</td>";
           echo "<td>" . $row['perc1'] . "</td>";
           echo "<td>" . $row['perc2'] . "</td>";
           echo "<td>";
          echo "<a href='update.php?username=". $row['username'] ."' title='Update Record' <i class='material-icons'>create</i></i></a>&nbsp;";
           echo "<a href='delete.php?username=". $row['username'] ."' title='Delete Record' <i class='material-icons'>delete</i></a>";
           echo "</td>";
           echo "</tr>";}
  } else {
      echo "No Record Found";
  }
  $link->close();
  ?>
  <h4 class="center">List of all Students of class 12</h4>
  </body>
</html>
