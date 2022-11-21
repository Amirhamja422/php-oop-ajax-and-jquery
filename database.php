<?php
// class declaration
include 'config.php';
class Database
{
  public $host   = DB_HOST;
  public $user   = DB_USER;
  public $pass   = DB_PASS;
  public $dbname = DB_NAME;


  public $link;
  public $error;

  //construct create for  database load 
  public function __construct()
  {
    $this->connectDB();
  }

  // method create
  private function connectDB()
  {
    $this->link = new mysqli(
      $this->host,
      $this->user,
      $this->pass,
      $this->dbname
    );
    if (!$this->link) {
      $this->error = "Connection fail" . $this->link->connect_error;
      return false;
    }
  }

  // Select or Read data
  public function getData($query)
  {
    $result = $this->link->query($query) or
      die($this->link->error . __LINE__);
    if ($result->num_rows > 0) {
      $output = [];
      while ($row =  $result->fetch_assoc()) {
        $output[] = $row;
      }
      return json_encode(['success' => true, 'message' => $output]);
    } else {
      return json_encode(['success' => false, 'message' => 'no data found']);
    }
  }


  // Insert data
  public function insert($query)
  {
    $insert_row = $this->link->query($query) or
      die($this->link->error . __LINE__);
    if ($insert_row) {
      return $insert_row;
    } else {
      return false;
    }
  }

  // Update data
  public function update($query)
  {
    $update_row = $this->link->query($query) or
      die($this->link->error . __LINE__);
    if ($update_row) {
      return $update_row;
    } else {
      return false;
    }
  }

  // Delete data
  public function delete($query)
  {
    $delete_row = $this->link->query($query) or
      die($this->link->error . __LINE__);
    if ($delete_row) {
      return $delete_row;
    } else {
      return false;
    }
  }
}