<?php 
  ini_set('display_errors','1'); 
?>
<?php
ob_start();
include('includes/header.php');
session_start();
?>

<?php
$db = new Database();
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])){
    $create = $db->insert($_POST);
}
?>


<?php 
    if (isset($_SESSION['message']))
    { 
    echo $_SESSION['message']; 
    unset($_SESSION['message']); 
    }
 ?>


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

<div class="panel panel-default">
 <div class="panel-heading">
    <h2>Create New User</h2>
 </div>
     
    <div class="panel-body">
       <div style="max-width:600px; margin:0 auto">
       
        <form action="" method="POST">
          <div class="form-group">
              <label for = "name">Your Name</label>
              <input type="text" id="name" name="name" class="form-control"/>
          </div>
           <div class="form-group">
               <label for="email">Email Address</label>
                <input id="email" type="text" name="email" class="form-control"/>
           </div>
           
           <div class="form-group">
                <label for="skill">Skills</label>
                <input id="skill" type="text" name="skill" class="form-control"/>
            </div>
            <button type="submit" name="register" class="btn btn-success">Create User</button>
        </form>      
      </div>               
     </div>      
</div>
<?php
    
    include('includes/footer.php');
  ob_end_flush();
?>