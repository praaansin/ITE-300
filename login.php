<?php
include("connections.php");
if(isset($_POST['submit'])){
    $UserName = $_POST['user'];
    $Password = $_POST['pass'];

    $query = "SELECT * FROM login WHERE username='$userName' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count =mysqli_num_rows($result);
    if($count == 1){
        header("Location:welcome.php");
    }
     else {
        echo '<script>
           windows.location.href = "index.php";
           alert("Login failed. Invalid username or password!!!")
           </script>';
    }       
    
}
?>