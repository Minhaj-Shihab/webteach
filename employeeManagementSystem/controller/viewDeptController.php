<?php
include "../model/mydb.php";

if (isset($_POST["submit"])) {
    $dept = $_POST["deptname"];

    $mydb = new mydb();
    $conn = $mydb->createConObject();

    $result = $mydb->getDeptByName($conn, "department", $dept);

    if ($result && $result->num_rows > 0) {
        echo "<h3>Search Results:</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "<table border='1' cellpadding='5'>";
            echo "<tr><td>Department:</td><td>" . $row["dept"] . "</td></tr>";
            echo "<tr><td>Number of Employees:</td><td>" . $row["employeeNumber"] . "</td></tr>";
            echo "<tr><td>Active Status:</td><td>" . $row["activeStatus"] . "</td></tr>";
            
            echo "</table><br>";
        }
         echo '<a href="../view/updateDepartment.php">Update Department</a>';
    } else {
        echo "No matching department found.";
    }
        

    $mydb->closeCon($conn);
}
?>
