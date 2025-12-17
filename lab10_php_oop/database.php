<?php

class Database {
   protected $host;
   protected $user;
   protected $password;
   protected $db_name;
   protected $conn;

   public function __construct() {
      $this->getConfig();
      $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);

      if ($this->conn->connect_error) {
         die("Connection failed: " . $this->conn->connect_error);
      }
   }

   private function getConfig() {
      include_once("config.php");
      $this->host = $config['host'];
      $this->user = $config['username'];
      $this->password = $config['password'];
      $this->db_name = $config['db_name'];
   }

   public function query($sql) {
      return $this->conn->query($sql);
   }

   public function get($table, $where = null) {
      if ($where) {
         $where = " WHERE " . $where;
      }
      $sql = "SELECT * FROM " . $table . $where;
      $sql = $this->conn->query($sql);
      return $sql->fetch_assoc();
   }

   public function insert($table, $data) {
      foreach ($data as $key => $val) {
         $columns[] = $key;
         $values[]  = "'{$val}'";
      }
      $column = implode(",", $columns);
      $value  = implode(",", $values);

      $sql = "INSERT INTO $table ($column) VALUES ($value)";
      return $this->conn->query($sql);
   }

   public function update($table, $data, $where) {
      foreach ($data as $key => $val) {
         $update[] = "$key='{$val}'";
      }
      $update_value = implode(",", $update);

      $sql = "UPDATE $table SET $update_value WHERE $where";
      return $this->conn->query($sql);
   }

   public function delete($table, $filter) {
      $sql = "DELETE FROM $table $filter";
      return $this->conn->query($sql);
   }
}
?>
