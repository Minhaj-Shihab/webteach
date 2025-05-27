<?php
include "../model/mydb.php";

$mydb = new mydb();
$conn = $mydb->createConObject();

if (isset($_POST["update"])) {
    $dept = $_POST["dept"];
    $employeeNumber = $_POST["employeeNumber"];
    $activeStatus = $_POST["activeStatus"];

    $result = $mydb->updateDept($conn, "department", $dept, $employeeNumber, $activeStatus);

    if ($result) {
        echo "Department updated successfully.";
    } else {
        echo "Update failed.";
    }
}

if (isset($_POST["delete"])) {
    $dept = $_POST["deptDelete"];

    $result = $mydb->deleteDept($conn, "department", $dept);

    if ($result) {
        echo "Department deleted successfully.";
    } else {
        echo "Delete failed.";
    }
}

$mydb->closeCon($conn);
?>
