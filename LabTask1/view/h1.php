
<html>
    <head>
      <title> 
          View my form
      </title>
        <body>
            <h1><i>Registration Form</i></h1>
            <p>____________________________________________________________________________________________________</p>
            <form action="../control/h2.php" method="GET">
            <table>
                <form>
                    <tr>
                        <td>
                            First Name
</td>
<td> <input type="text"></td>
</tr>
<tr>
    <td> Last Name </td>
    <td> <input type="text"></td>
</tr>
<tr>
    <td> Age </td>
    <td> <input type ="number"></td>
</tr>
<tr>
    <td> Designation </td>
    <td> <input type="radio" name="designation">Junior Programmer
<input  type="radio" name="designation">Senior Programmer
<input type="radio" name="designation" >Project Lead
</td>
</tr>
<tr>
    <td>Preferred language</td>
    <td><input type="checkbox" name="preferred language">JAVA
    <input type="checkbox" name="preferred language">PHP
    <input type="checkbox" name="preferred language"> C++
</td>
</tr>
<tr>
    <td> E-Mail </td>
    <td><input type="email"></td>
</tr>
<tr>
    <td> Password </td>
    <td><input type="password"></td>
</tr>
<tr>
    <td> Please choose a file</td>
    <td> <input type="file" name="please choose a file" ></td>
</tr>
<tr>
    <td><input type="submit">
    <input type="reset">
</td>
                </form>
            </table>
        </body>
    </head>
</html>