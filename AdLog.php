<?php
require_once('./connections.php');
$db = new connections();

class AdLog extends connections {
    public function Store_Record() {
        global $db;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $UserName = $db->check($_POST['UserName']);
            $Password = $db->check($_POST['Password']);

            if (empty($UserName) || empty($Password)) {
                echo 'Please fill in all fields.';
            } else {
                if ($this->userExists($UserName)) {
                    header("location:Buttons.php");
                } else {
                    if ($this->insert_record($UserName, $Password)) {
                        header("location:Buttons.php");
                    } else {
                        echo 'Login Failed';
                    }
                }
            }
        }
    }

    public function userExists($username) {
        global $db;
        $query = "SELECT username FROM admin WHERE username = '$username'";
        $result = mysqli_query($db->connection, $query);

        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_record($a, $b) {
        global $db;
        $query = "INSERT INTO admin (username, password) VALUES ('$a', '$b')";
        $result = mysqli_query($db->connection, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>