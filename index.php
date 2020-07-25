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
$read = $db->index();
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
                       <a class="navbar-brand" href="index.php">Login Register System using PHP</a>
                   </div>
                   <ul class="nav navbar-nav pull-right">
                       <li><a href = "index.php">Home</a></li>
                       
                   </ul>
               </div>
           </nav>
           <?php 
    if (isset($_SESSION['message']))
    { 
    echo $_SESSION['message']; 
    unset($_SESSION['message']); 
    }
 ?>

 
<div class="panel panel-default">
   <div class="index-heading">
      <div>          
        <h2><strong> All Users</strong></h2>
      </div>
      <div class="add-user">
        <a class="btn btn-success" href="create.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Add User</a>
      </div>
    </div>  
<div class="panel-body">
  <table class="table table-bordered">
     <tr>
        <th width = "5%">Serial</th>
        <th width = "25%">Name</th>
        <th width = "25%">Email Address</th>
        <th width = "25%">Skilss</th>
        <th width = "20%">Action</th>

      </tr>
      <?php if($read){ 
    $i =1;
    ?>
    <?php while($row = $read->fetch_assoc()){ ?>
      <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['skill']; ?></td>
        <td><a class="btn btn-success" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
      
      </tr>  
      <?php $i++;}
      }else{
      ?>    
      <tr><td colspan="5"><h2>No, User Data Found</h2> </td> </tr>                
      
      <?php 
      }
      
      ?>
  </table>

</div>
</div>

<?php 
  include('includes/footer.php');
  ob_end_flush();
?>