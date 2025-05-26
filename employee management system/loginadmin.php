<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="mystyle.css">
    
</head>
<body>

<?php 
// Initialize variables
$fname = $lname = $email = $gender = $dateofbirth = $phone = $username = $password = "";
$fnameerr = $lnameerr = $gendererr = $emailerr = $phoneerr = $usernameerr = $passworderr = "";

// Sanitize function
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Handle POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // First name
    if (empty($_POST["fname"])) {
        $fnameerr = "First name must be filled";
    } else {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $fnameerr = "Only letters and white space allowed";
        }
    }

    // Last name
    if (empty($_POST["lname"])) {
        $lnameerr = "Last name must be filled";
    } else {
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $lnameerr = "Only letters and white space allowed";
        }
    }

    // Gender
    if (empty($_POST["gender"])) {
        $gendererr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // Email
    if (empty($_POST["email"])) {
        $emailerr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr = "Invalid email format";
        }
    }

    // Phone
    if (empty($_POST["phone"])) {
        $phoneerr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^\+8801[0-9]{9}$/", $phone)) {
            $phoneerr = "Invalid phone format. Use +8801XXXXXXXXX";
        }
    }

    if (empty($_POST["password"])) {
    $passworderr = "Password is required";
    }
    else {
    $password = test_input($_POST["password"]);
    if (strlen($password) < 6) {
        $passworderr = "Password must be at least 6 characters long";
    }
}
}
?>

<nav class="navbar">
  <ul class="nav-list">
    <li><a href="#">Home</a></li>
    <li><a href="#">Login</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>

<div class="layout_container">
    <img src="paperwork.png" alt="paper">
    
    <div class="position_parent">
        <h4 class="new">Admin login</h4>
        <div class="child">
            <p id="para">User Information</p>

            <form name="admin" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <table>
                    <tr>
                        <th><label for="fname" class="label">First Name:</label></th>
                        <td>
                            <input type="text" id="fname" name="fname" value="<?php echo htmlspecialchars($fname); ?>">
                            <span class="error">* <?php echo $fnameerr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="lname" class="label">Last name:</label></th>
                        <td>
                            <input type="text" id="lname" name="lname" value="<?php echo htmlspecialchars($lname); ?>">
                            <span class="error">* <?php echo $lnameerr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <th>Gender:</th>
                        <td>
                            <input type="radio" id="Male" name="gender" value="MALE" <?php if ($gender == "MALE") echo "checked"; ?>>
                            <label for="Male" class="label">Male</label>
                            <input type="radio" id="Female" name="gender" value="FEMALE" <?php if ($gender == "FEMALE") echo "checked"; ?>>
                            <label for="Female" class="label">Female</label>
                            <input type="radio" id="Others" name="gender" value="OTHERS" <?php if ($gender == "OTHERS") echo "checked"; ?>>
                            <label for="Others" class="label">Others</label>
                            <span class="error">* <?php echo $gendererr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="bday" class="label">Date of Birth</label></th>
                        <td><input type="date" id="bday" name="dateofbirth"></td>
                    </tr>

                    <tr>
                        <th><label for="email">Email:</label></th>
                        <td>
                            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                            <span class="error">* <?php echo $emailerr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="Phone" class="label">Phone Number:</label></th>
                        <td>
                            <input type="tel" id="Phone" name="phone" placeholder="+8801XXXXXXXXX" value="<?php echo htmlspecialchars($phone); ?>">
                            <span class="error">* <?php echo $phoneerr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="uname" class="label">Username:</label></th>
                        <td><input type="text" id="uname" name="username"></td>
                    </tr>

                   <tr>
                          <th><label for="pass" class="label">Password:</label></th>
                   <td>
                      <input type="password" id="pass" name="password" placeholder="Enter your password">
                            <span class="error">* <?php echo $passworderr; ?></span>
                                  </td>
                        </tr>

                    <tr>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>
