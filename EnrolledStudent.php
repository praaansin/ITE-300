<?php
require_once('./connections.php');
$db = new Enroll();
$result=$db->view_record();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
    body {
        background: pink;
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

tr:hover {background-color: whitesmoke;}
</style>
</head>
   <title>Enrolled Students</title>
</head>
<body>
<table class="table table-bordered">
    <tr>
       <td style="width: 10%"> Student_ID </td>
       <td style="width: 10%"> Name </td>
       <td style="width: 20%"> Year Level </td>
       <td  style="width: 20%"> Section </td>
       <td  style="width: 20%"> Course </td>
       <td  style="width: 20%">Unit </td>
   </tr>
   <tr>
       <?php
              while($data = mysqli_fetch_assoc($result)){
       ?>
       <td><?php echo $data['student_id'] ?></td>
       <td><?php echo $data['name'] ?></td>
       <td><?php echo $data['year_level'] ?></td>
       <td><?php echo $data['section'] ?></td>
       <td><?php echo $data['course'] ?></td>
       <td><?php echo $data['units'] ?></td>
      </tr>
          <?php
               }
          ?>
     </table>
</body>
</html>