<?php include 'database.php'; ?>

<?php
class project
{
    private $db;

    public function _construct()
    {
        $this->db = new Database();
    }

    public function checkUsername($username)
    {
        $query = "SELECT * FROM tbl_user WHERE name ='$username'";
        var_export($this->db);
        die();
        $getuser = $this->db->getData($query);
        echo json_encode($getuser);
        exit();
        if ($username == "") {
            echo "<span class ='error'>Plaese Enter Username</span>";
            exit();
        } elseif ($getuser) {
            echo "<span class ='error'><b>$username</b>Not Available</span>";
            exit();
        } else {
            echo "<span class ='error'><b>$username</b>Available</span>";
            exit();
        }
    }
}

?>



<?php
$pro = new project();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $user = $pro->checkUsername($username);
}

?>