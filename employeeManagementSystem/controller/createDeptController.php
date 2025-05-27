<?php
include "../model/mydb.php";

if (isset($_POST["submit"])) {
    $dept = $_POST["dept"];
    $employeeNumber = $_POST["employeeNumber"];
    $activeStatus = $_POST["activeStatus"];

    $mydb = new mydb();
    $conn = $mydb->createConObject();

    $result = $mydb->createDept($conn, "department", $dept, $employeeNumber, $activeStatus);

    if ($result) {
        echo "Department created successfully.";
    } else {
        echo "Error creating department.";
    }

    $mydb->closeCon($conn);
}
?>

