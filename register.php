<?php
// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$username = $password = $class="";
$username_err = $password_err = $class_err="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter the Admission Number";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This Admission Number is already present in Database";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a Name";
    } elseif(strlen(trim($_POST['password'])) < 1){
        $password_err = "Enter a valid Name";
    } else{
        $password = trim($_POST['password']);
    }

    $class= $_POST['class'];
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, class) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_class);

            // Set parameters
            $param_username = $username;
            $param_password = $password;
            $param_class= $class; // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: admin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection">
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="angular.min.js" charset="utf-8"></script>
    <style
 type="text/css">
        input{ padding:14px; }
        .help-text{ color:red; }
    </style>
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
  <a href="update.php" class="waves-effect waves-dark btn-large blue center center-align"><i class="material-icons left">create</i>Update</a>
  <a href="delete.php" class="waves-effect waves-dark btn-large red right-align"><i class="material-icons left">delete</i>Delete</a>
  </div>

</div>
<br>
<div class="center container z-depth-3">
  <br>
        <h4>Create Student Database</h4>
        <p>Please fill this form to create Student Database</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="center container">
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input type="text" name="username" value="<?php echo $username; ?>">
                  <label>Admission Number</label>
                  <span class="help-text"><?php echo $username_err; ?></span>
                </div>


                <div class="input-field">
                  <i class="material-icons prefix">face</i>
                  <input type="text" name="password" class="" value="<?php echo $password; ?>">
                  <label>Student's Full Name</label>
                  <span class="help-text"><?php echo $password_err; ?></span>

                </div>

            <div class="input-field">
              <i class="material-icons prefix">create</i>
              <input type="text" name="class" value="<?php echo $class; ?>">
              <label>Class</label>
              <span class="help-text"><?php echo $class_err; ?></span>
            </div>
            <br>
            <br>

            <div class=" row">
              <div class="input-field">

                <button type="submit" class="btn waves-effect waves-light blue">Submit <i class="material-icons right blue">send</i></button>
                <button type="reset"  class="btn waves-effect waves-light red">Reset <i class="material-icons right red">menu</i></button>
              </div>
            </div>
          </div>


        </form>
    </div>
  </div>
</body>
</html>
