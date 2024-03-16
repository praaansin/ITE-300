<?php
require_once('./connections.php');
$db = new AdLog();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>ADMIN</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>

body {
  width: 100%;
  min-height: 80vh;
  background-color: #EF9595;
  background-size: 150%;
  margin: 0 auto;
}

.container{
  width: 100%;
  height: 15vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
h1 {
  color: #000;
  font-size: 50px;
  font-family:'Times New Roman', Times, serif;
  text-shadow: 1px 1px #535353;
  text-align: center;
  letter-spacing: 5px;
  margin-top: 110px;;
  margin-left: 3%;
  margin-right: auto;
  font-weight: 300;
}

form {
    margin-right: 33%;
    margin-left: 37%;
    margin-top: 15%;
    padding: 80px;
    background-color: #FFD966;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-size: 20px;
    letter-spacing: 1px;
    color: #000; 
    font-weight: 300px;
    margin-right: 10px;
    display: inline-block; 
    width: 100px; 
}


input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 2px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-left: 10px;
    font-size: 16px;
    font-weight: 200px;
    background-color: #F9F3CC;
    color: #000;
    border: 2px solid black;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: transparent;
}

</style>
</head>
<body>
    <?php $db->Store_Record(); ?>
    <h1>ADMIN</h1>
    <div class="container">
    <form method="post" action="">
        <label>Username: </label><input type="text" name="UserName"><br>
        <label>Password:  </label><input type="password" name="Password"><br>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>