<?php
class Database{
    public $host   = DB_HOST;
    public $user   = DB_USER;
    public $pass   = DB_PASS;
    public $dbname = DB_NAME;
    
    
    public $link;
    public $error;
    public function __construct(){
        $this->connectDB();
    }

    
    private function connectDB(){
    $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link){
            $this->error = "Connection Failed!".$this->link->conncet_error;
            return false;
        }
    }
    
    //Fetch all data from database
    public function index(){
        $query = "SELECT * FROM tbl_user";
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows>0){
            return $result;
        } else {
            return false;
        }
    }
    
    
    //insert data to database
    public function insert($query){
        $name =  mysqli_real_escape_string($this->link, $_POST['name']);
        $email = mysqli_real_escape_string($this->link, $_POST['email']);
        $skill = mysqli_real_escape_string($this->link, $_POST['skill']);
        if($name == "" || $email == "" || $skill == ""){
            $_SESSION['message'] = "<div class ='alert alert-danger'><strong>Field must not be empty!</strong></div>";
            exit();
        } else {
            $query = "INSERT INTO tbl_user(name, email, skill) VALUES('$name', '$email', '$skill')";
        }


        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($insert_row){
            session_start();
            $_SESSION['message'] = "<div class ='alert alert-success'><strong>Your profile has been created successfully!</strong></div>";
            header('Location: index.php');
            exit();
        } else {
        die("Error : ".$this->link->errno.")".$this->link->error);
        }
    }
    
    //update existing data
    public function update($id, $query){

        $name = mysqli_real_escape_string($this->link, $_POST['name']);
        $email = mysqli_real_escape_string($this->link, $_POST['email']);
        $skill = mysqli_real_escape_string($this->link, $_POST['skill']);
        
        if($name == "" || $email == "" || $skill == ""){
            $error = "Field must not be empty";

        } else{
            $query = "UPDATE tbl_user SET
            name = '$name', 
            email = '$email', 
            skill = '$skill' 
            WHERE id =$id";
        }


        $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
        
        if($update_row){
        session_start();
            header("Location: index.php");
            $_SESSION['message'] = "<div class ='alert alert-success'><strong>Your profile has been updated successfully!</strong></div>";
            exit();
        } else {
            die("Error : ".$this->link->errno.")".$this->link->error);
        }
    }
   
   //Deleting data from database 
    public function destroy($id){
        $query = "DELETE FROM tbl_user WHERE id = $id";
        $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($delete_row){
            session_start();
            header("Location: index.php");
            $_SESSION['message'] = "<div class ='alert alert-success'><strong>User profile has been deleted successfully!</strong></div>";
            exit();
        } else{
            die("error : ".$this->link->errno.")".$this->lin->error);
        }
    }
    
}
?>





