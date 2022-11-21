<?php include 'database.php'; ?>

<?php
class Project
{
  public $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function checkUsername($username)
  {

    if (empty($username)) {
      // echo json_encode(['success' => false, 'message' => 'Name can not be empty']);
      echo "error";
      exit();
    } else {
      $query = "SELECT * FROM tbl_user WHERE name ='$username'";

      // $getUser = $this->db->getData($query);
      // echo json_encode($getUser);
      // exit();
    }
  }
}

?>


<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $pro = new Project();
  $username = $_POST['username'];
  $user = $pro->checkUsername($username);
}

?>