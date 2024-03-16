<?php
require_once('./connections.php');
$db = new Enroll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>STUDENT EVALUATION SYSTEM</title>
    <style>

body {
  width: 90%;
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
    margin-left: 33%;
    margin-top: 8%;
    padding: 30px;
    background-color: #FFD966;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-size: 12px;
    letter-spacing: 1px;
    color: #000; 
    font-weight: 300px;
    margin-right: 10px;
    display: inline-block; 
    width: 100px; 
}


input[type="text"]{
    width: 100%;
    padding: 5px;
    margin: 5px 0;
    border: 2px solid #ccc;
    border-radius: 5px;
}

.btn {
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

.btn:hover {
    background-color: transparent;
}
</style>
</head>
<body>
<?php $db->enrollStudent(); ?>
<form method="post">
        <label>Student ID: </label><input type="text" name="Student_ID"><br>
        <label>Name: </label><input type="text" name="Name"><br>
        <label>Year Level: </label><input type="text" name="Year_Level"><br>
        <label>Section: </label><input type="text" name="Section"><br>
        <label>Course: </label><input type="text" name="Course"><br>
        <label>Unit: </label><input type="text" name="Unit"><br>
        <button class="btn btn-success" name="btn_save">Enroll</button>
    </form>
</body>
</html>