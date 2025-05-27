<?php

class mydb {
    public $DBHostName = "";
    public $DBUserName = "";
    public $DBPassword = "";
    public $DBName = "";

    function __construct() {
        $this->DBHostName = "localhost";
        $this->DBUserName = "root";
        $this->DBPassword = "";
        $this->DBName = "employemanagementdb"; // adjust if needed
    }

    function createConObject() {
        $conn = new mysqli($this->DBHostName, $this->DBUserName, $this->DBPassword, $this->DBName);
        
        if ($conn->connect_error) {
            die("❌ Connection failed: " . $conn->connect_error);
        } else {
            echo "✅ Connection successful!<br>";
        }

        return $conn;
    }

    function createAdmin($conn, $table, $fname, $lname, $gender, $dob, $email, $phone, $username, $password) {
        $qry = "INSERT INTO `$table` (`first name`, `last name`, `gender`, `birthday`, `email`, `phone`, `username`, `password`) 
                VALUES ('$fname', '$lname', '$gender', '$dob', '$email', '$phone', '$username', '$password')";
        return $conn->query($qry);
    }

    function closeCon($conn) {
        $conn->close();
    }
}

?>
