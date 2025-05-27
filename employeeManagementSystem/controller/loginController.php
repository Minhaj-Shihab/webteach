

<?php
session_start();
include "../model/mydb.php";


if (isset($_POST["login"])) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $mydb = new mydb();
    $conobj = $mydb->createConObject();
    $result = $mydb->login($conobj, "admin", $email);

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Verify the entered password with the hashed password in DB
        if (password_verify($password, $data["password"])) {
            $_SESSION["email"] = $email;
            header("Location: ../view/adminDashboard.php");
            exit;
        } else {
            echo "Wrong password.";
        }
    } else {
        echo "User not found.";
    }

    $mydb->closeCon($conobj);
}
?>
