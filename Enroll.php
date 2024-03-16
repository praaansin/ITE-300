<?php
require_once('./connections.php');
$db = new connections();

class Enroll extends connections{
public function enrollStudent(){
    global $db;
     if (isset($_POST['btn_save'])){
       $Student_ID = $db->check($_POST['Student_ID']);
       $Name = $db->check($_POST['Name']);
       $Year_Level = $db->check($_POST['Year_Level']);
       $Section = $db->check($_POST['Section']);
       $Course = $db->check($_POST['Course']);
       $Unit = $db->check($_POST['Unit']);
       if($this->insertStudent($Name, $Student_ID, $Year_Level, $Section, $Course, $Unit)){
         header("location:EnrolledStudent.php");
       } else {
          echo 'Error enrolling the student.';
      }
    }
  }

public function insertStudent($a, $b,$c,$d,$e,$f) {
        global $db;
        $query = "INSERT INTO students (name, student_id, year_level, section, course, units) VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";
        $result = mysqli_query($db->connection, $query);
        if ($result) {
            return true;
        } else {
            echo 'Error' . mysqli_error($db->connection);
            return false;
        }
    }
    public function view_record(){
      global $db;
      $query = "SELECT * FROM students";
      $result = mysqli_query($db->connection, $query);
      return $result;
    }
}
?>