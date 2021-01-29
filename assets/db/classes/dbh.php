<?php

 class Dbh {
     private $host;
     private $user;
     private $pwd;
     private $db_name;

    public function connect() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pwd = "";
        $this->db_name = "emails_db";

        $conn = mysqli_connect($this->host, $this->user, $this->pwd, $this->db_name);
        return $conn;
    }

    public function insertEmail($email, $provider, $date) {
        $sql = "INSERT INTO emails (email, provider, date) VALUES ('$email', '$provider', '$date');";
        $connect = $this->connect();
        mysqli_query($connect, $sql);

        header("Location: indexsuccess.php");
    }

    public function delete($check) {
        $sql = "DELETE FROM emails WHERE id=" . $row['id'];
        $connect = $this->connect();
        mysqli_query($connect, $sql);
        
        
        header("Location: assets/db/index.php");
        
        //$sql = "DELETE FROM emails WHERE id=".$id;
    }
 }
