<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
function validateForm() {
  var x = document.forms["myForm"]["username"].value;
  var y = document.forms["myForm"]["password_1"].value;
  var z = document.forms["myForm"]["password_2"].value;

  if (x == "" || x==null) {
    alert("Enter username");
    return false;
  }
  else if(y.length < 6)
  {
          alert("Error: Password must contain at least six characters!");
          return false;
  }
     else if(z == null || y != z)
  {
   alert("Error: password must match!");
          return false;
  }
  alert("Password reset successful");
}
</script>
</head>
<body background="PICT-Pune.jpg">
<br><br>
  <div class="navbar">
    <div class="logo">
			<img src="logo.jpg">
		</div>
    <a href="contact1.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a href="second1.xml" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Info</a>
    <a class="active" href="#" style="float:right; margin-right: 15px"> Login</a>
    <a href="frontpage.html" style="float:right; margin-right: 15px"><i class="fa fa-fw fa-home"></i>Home</a>
    <div class="title">MEETING ROOM BOOKING</div>
  </div><br><br><br>
<div class="simple-form">
    <form name="myForm" id="registration" method="post" action="login.php">
      <h1 class="user__title" color="orange">RESET PASSWORD</h1>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" required name="username" id="button" placeholder="Enter your PNR"><br><br>
  	</div>
    <div class="input-group">
  	  <input type="password" required name="password_1" id="button" placeholder="Enter your password"><br><br>
  	</div>
  	<div class="input-group">
  	  <input type="password" required name="password_2" id="button" placeholder="ReEnter your password"><br><br>
  	</div>
  	<div class="input-group">
  		<input type="submit" value="RESET" id="butt1" name="login_user" onclick="validateForm()">
  	</div>
  	<p>
      <a href="login.php" style="color: #ffffff">Reset values?</a><br><br>
      <a href="register.php" style="color: #008000">Not register?</a>
  	</p>
  </form>
</div>
<div id="footer">
 <footer>
      <ul class="navigationF">
      <li><a href="contact1.html">Contact us</a></li>
      <br><br>
    </ul>
  <p>  Copyright pict.edu</p>
</footer>
</div>
</body>
</html>
