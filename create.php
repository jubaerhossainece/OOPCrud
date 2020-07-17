<?php
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
?>