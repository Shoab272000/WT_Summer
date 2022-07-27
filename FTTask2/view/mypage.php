<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
    <body>
    <form action ="../control/process.php" method="POST">

    <h2> ABC Mangement System</h2> 
    <h4> We Create Future</h4>

    <p class = "space">Home AboutUs Shop</p>

    <h1><u> Registration Form</u></h1>

    <div class = "line-1"></div>
<br>
    </div>
<table>
<tr> <td>First Name: </td> 
  <td><input type="Text" name="fname"></td></tr>
  <tr> <td>Last Name: </td>  
  <td><input type="Text" name="lname"></td></tr>
  <td>Age: </td>  
  <td><input type="Text" name="age"></td></tr>
  <td>Designation: </td> 
  <td><input type="radio" name="designation" value = "Junior Programmer">Junior Programmer
  <input type="radio" name="designation" value = "Senior Programmer">Senior Programmer
  <input type="radio" name="designation" value = "Project Leader">Project Lead</td></tr>
  <tr> <td>Preferred Language: </td>
  <td><input type="checkbox" name="planguage" value = "JAVA">JAVA
  <input type="checkbox" name="planguage" value = "PHP">PHP 
  <input type="checkbox" name="planguage" value = "C++">C++</td> </tr>
  <tr> <td>E-mail: </td>
  <td><input type="email" name="email"></td> </tr>
  <tr><td>Password: </td>
  <td><input type="password" name="password"></td> </tr>
  <tr><td>Please choose a file: </td>
  <td><input type="file" name="picture"></td> </tr>
</table>
<table1 class="button">
  
  <tr><td><input type="submit" class="button submit" name="submit"></td>
  <td><input type="reset" class="button reset" name="reset"></td></tr>
</table1>
</form>


    </body>
</html>