<?php 

require('connection.php');

if(isset($_POST['userID'])){
    
    $userID=$_POST['userID'];
    $password=$_POST['password'];
    
    $sql = "select *from user_info where userID = '$userID' and password = '$password'"; 
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION['USER_LOGIN']='yes';
        $_SESSION['USER_ID']='$userID';
        header('location:categories.php');
        die();

        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
    .container {
      width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #E0E0E0;  
        border-radius: 15px ;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;

  
</style>
</head>
<body>


<form action="#" method="post">
 

  <div class="container">
    <label for="userID"><b>UserID</b></label>
    <input type="text" placeholder="Enter UserID" name="userID" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    
  </div>

</form>

</body>
</html>