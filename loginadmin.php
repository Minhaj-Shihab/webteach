<html>
<head>
    <title>Admin Login </title>
</head>

<body>

<h3 align="center"> Login </h3>
<p> <hr> User Information</p>
<hr>


<form action="actionpage.php" method="get">
    <table>
<tr>
    <th> <label for= "fname">First name: </label></th>
   <td> <input type="text" id="fname" name="firstName"required></td> <br>  
  </tr> 

    <tr>  
  <th>  <label for= "lname">Last name: </label> </th>
     <td> <input type="text" id="lname" name="lastName"required> <td> <br>  
     </tr>

     <tr> 
   <th> Gender : </th>
   <td> 
      <input type="radio" id="Male" name="gender" value="MALE">
      <label for="Male"> Male </label>
      
      <input type="radio" id="Female" name="gender" value="FEMALE">
      <label for="Female"> Female </label>
      
      <input type="radio" id="Others" name="gender" value="OTHERS">
      <label for="Others"> Others </label> 
   </td>
</tr> 

<tr> 
   
   <th><label for="bday">Date of Birth </label></th>
   <td><input type="date" id=bday name="dateofbirth"></td>

</tr>
<tr>
  <th><label for="email">Email:</label></th>
  <td><input type="email" id="email" name="email"required></td>
</tr>
<tr>
   <th> <label for= "Phone"> Phone Number</label>
   <td><input type="tel" id="Phone" name="phone" placeholder="+8801xxxxxxxxx"> </td>

</tr>

<tr>
    <th><label for="uname"> Username </label>
    <td> <input type="text" id="uname" name="username"required> </td>
</tr>

<tr>
    <th><label for ="pass" > Password </label>
    <td><input type="password" id="pass" name="password" placeholder="Enter your password" required></td>
</tr>
<tr>
<td> <input type="submit" value="Submit"> </td>
</tr>
</table>
</form>


</body>
</html>