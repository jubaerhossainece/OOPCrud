<?php
include('includes/header.php');
session_start();
?>

<?php
    $db = new Database();
    if(isset($_GET['id'])){        
        $id = $_GET['id'];
        $query = "SELECT * FROM tbl_user WHERE id = $id";
        $getData = $db->index($query)->fetch_assoc();
}

?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])){
    $update = $db->update($id, $_POST);
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
      <div><h2><strong><?php echo "Profile of  ". $getData['name']; ?></strong></h2>
      </div>
    </div>     
    <div class="panel-body">
       <div style="max-width:600px; margin: 0 auto">
       
       
       
        <form action="" method="POST">
          
          <div class="form-group">
              <label for = "name">Your Name</label>
              <input type="text" id="name" name="name" class="form-control" value = "<?php echo $getData['name']; ?>" />
          </div>
           
          <div class="form-group">
               <label for="email">Email Address</label>
                <input id="email" type="text" name="email" class="form-control" value="<?php echo $getData['email']; ?>" />
          </div>
          
          <div class="form-group">
              <label for = "skill">User Skill</label>
              <input type="text" id="skill" name="skill" class="form-control" value="<?php echo $getData['skill']; ?>" />
          </div>
 
          <button type="submit" name="update" class="btn btn-success">Update Profile</button>
            <a href="index.php" class="btn btn-info">Cancel</a>
            
        </form>   
              
      </div>               
     </div>      
  </div>
<?php
include('includes/footer.php');
?>

