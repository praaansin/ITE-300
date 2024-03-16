<?php
require_once('./connections.php');
$db = new connections();

class StudentManager extends connections {
    public function StudentInfo() {
        global $db;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Student_ID = $_POST['student_id'];
            $studentInfo = $this->fetchStudentInfo($Student_ID); 

            if ($studentInfo) {
                header("location:evaluateIndex.php?Name={$studentInfo['Name']}&Year_Level={$studentInfo['Year_Level']}&Section={$studentInfo['Section']}&Course={$studentInfo['Course']}&Units={$studentInfo['units']}");
            } else {
                echo "Student not found.";
                exit();
            }
        }
    }

    public function fetchStudentInfo($Student_ID) { 
        global $db;
        $query = "SELECT name, year_level, section, course, units FROM students WHERE student_id = '$Student_ID'";
        $result = mysqli_query($db->connection, $query);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return null; 
        }
    }
}
