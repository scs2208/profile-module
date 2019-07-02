<!--<!DOCTYPE html>
<html>
<head>
  <title>Registration  Form</title>
</head>
<body>
    
    <form  method="POST">
      <table width="600" border = "1" cellspacing="5"  cellspacing="5">
      <tr>
      	<td width="230">Enter Your Name </td>
        <td width="329"><input type="text" name ="name" required /></td>
      </tr>
      <tr>
        <td width="230">Enter Your Email </td>
        <td width="329"><input type="text" name ="email" required /></td>
      </tr>
      <tr>
        <tr>
        <td width="230">Enter Your username </td>
        <td width="329"><input type="text" name ="username" required /></td>
      </tr>
      <tr>
        <tr>
        <td width="230">Enter Your Password </td>
        <td width="329"><input type="text" name ="password" required /></td>
      </tr>
       <tr>
          <td colspan="2" align="center"><input type ="submit" name="save" value="savedata"/></td>
          </tr>
          </table> 

      
   </form>

</body>
</html>

-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="<?php base_url('CTRL_Registration/savedata'); ?>"  method = "POST" >
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to Register.</p>
    <hr>
     
     <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw-repeat" required>
    <hr>
    <p>By Register you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="save" value="savedata">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have a register? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>



