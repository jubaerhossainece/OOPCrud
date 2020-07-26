<?php 
  ini_set('display_errors','1'); 
?>
<?php 
ob_start();
 include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>

<?php


if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    if(!empty($username) && !empty($email) && !empty($password))
    {
        
    $username = mysqli_real_escape_string($connection, $username);
    $email    = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query = "SELECT randsalt FROM users ";
    $select_randsalt_query = mysqli_query($connection, $query);
    if(!$select_randsalt_query)
    {
        die("Select Randsalt Query Failed!" . mysqli_error($connection));
    }
    $row = mysqli_fetch_array($select_randsalt_query);
    $salt = $row['randsalt'];
        $password = crypt($password, $salt);
        
        $query = "INSERT INTO users(username, user_email, user_password, user_role, user_date) ";
        $query .="VALUES('{$username}','{$email}','{$password}','Subscriber', now())";
        $registration_user_query = mysqli_query($connection, $query);
        if(!$registration_user_query)
        {
            die("registration_user_query Failed!" . mysqli_error($connection) . ' ' . mysqli_errno($connection));
        }
        
        $message = "Your registration has been submitted!";
    }
    else
    {
        $message = "Fields cannot be empty!";
    }
    
}
else
{
    $message = "";
}

?>

    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    
 

<!doctype html>
<html>
<head>
 <title>PHP OOP CRUD</title>
 <link rel = "stylesheet" href="includes/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel = "stylesheet" href="css/app.css"/>
  <link rel = "stylesheet" href="css/alert.css"/>
  <script src="includes/jquery.min.js"></script>
  <srcipt src = "includes/bootstrap.min.js"></srcipt>
</head>
     <body>
        <div class="container">
           <nav class="navbar navbar-default">
               <div class="container-fluid">
                   <div class="navbar-header">
                       <a class="navbar-brand" href="index.php">User CRUD System using OOP</a>
                   </div>
                   <ul class="nav navbar-nav pull-right">
                       <li><a href = "index.php">Home</a></li>
                       
                   </ul>
               </div>
           </nav>
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                       <h5 class="text-center"><?php echo $message; ?></h5>
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php 
  include "includes/footer.php";
  ob_end_flush();
?>
