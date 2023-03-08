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
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('select');
var instances = M.FormSelect.init(elems, options);
});
    </script>
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
<a href="admin.php" class="waves-effect waves-dark btn-large purple darken-1 left-align"><i class="material-icons left">home</i>Home</a>
    <a href="register.php" class="waves-effect waves-dark btn-large green left-align"><i class="material-icons left">add</i>Register</a>
    <a href="#modal1" class="modal-trigger waves-effect waves-dark btn-large blue center center-align"><i class="material-icons left">print</i>Print Result</a>
    <a href="delete.php" class="waves-effect waves-dark btn-large red right-align"><i class="material-icons left">delete</i>Delete</a>
    </div>

  </div>
<br>
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

<div class="center">
  <h3 class="center">Semi-Annual Result </h3>
  <h4 class="center">Please Choose Class</h4>
  <i class="material-icons center">arrow_downward</i>
</div>

    <form>

<select class="browser-default z-depth-3" name="customers" onchange="showCustomer(this.value)">
<option value="">Select Class for Result</option>
<option value="6">Class 6</option>
<option value="7">Class 7</option>
<option value="8">Class 8</option>
<option value="9">Class 9</option>
<option value="10">Class 10</option>
<option value="11">Class 11</option>
<option value="12">Class 12</option>

</select>
</form>
</div>
<br>
<div id="txtHint">Customer info will be listed here...</div>

<script>
function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getdata.php?class="+str, true);
  xhttp.send();
}
</script>
