<?php
require_once('./connections.php');
$db = new StudentManager();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <style>

body {
  width: 90%;
  min-height: 80vh;
  background-color: #EEB76B;
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

table{
    border-collapse: collapse;
    width: 100%;
   margin-top: 50px;
}

td{
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    background-color: #FFD966;  
    
}

input[type="submit"]{
    width: 50%;
    padding: 10px;
    margin-left: 90px;
    font-size: 15px;
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
<?php 
$manager = new StudentManager();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Student_ID = $_POST['student_id'];
    $studentInfo = $manager->fetchStudentInfo($Student_ID);

    if ($studentInfo) {
        $Name = $studentInfo['name'];
        $Year_Level = $studentInfo['year_level'];
        $Section = $studentInfo['section'];
        $Course = $studentInfo['course'];
        $Units = $studentInfo['units'];
    } else {
        echo "Student not found.";
    }
}
?>

<form method="POST">
    Enter Student ID: <input type="text" name="student_id">
    <input type="submit" value="Evaluate">
</form>
<table class="table table-bordered">
    <tr>
       <td style="width: 10%"> Name </td>
       <td style="width: 20%"> Year Level </td>
       <td  style="width: 20%"> Section </td>
       <td  style="width: 20%"> Course </td>
       <td  style="width: 20%"> Units </td>
   </tr>
   <tr>
       <td><?php echo isset($Name) ? $Name : ''; ?></td>
       <td><?php echo isset($Year_Level) ? $Year_Level : ''; ?></td>
       <td><?php echo isset($Section) ? $Section : ''; ?></td>
       <td><?php echo isset($Course) ? $Course : ''; ?></td>
       <td><?php echo isset($Units) ? $Units : ''; ?></td>
   </tr>
</table>
</body>
</html>


