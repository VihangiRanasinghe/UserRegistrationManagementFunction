
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>
    <p>Register to the site by using this form</p>
    <form action="adddetails.php" method="POST">
      <div class="container">
        <label for="first name">First Name</label>
        <input type="text" name=" firstname" required>
      </div>
      <div class="container">
        <label for="last name">Last Name</label>
        <input type="text" name=" lastname" required>
      </div>
      <div class="container">
        <label for="email">Email</label>
        <input type="text" name=" email" required>
      </div>
      <div class="container">
        <label for="mobile number">Mobilee</label>
        <input type="text" name=" mobilenumber" required>
      </div>
      <div class="container">
        <label for="password">Password</label>
        <input type="text" name=" password" required>
      </div>
      <div class="container">
        <label for="confirmation password">Confirm Password</label>
        <input type="text" name=" confirmationpassword" required>
      </div>
      <div class="country">
        <label for="country">Country</label>
        <input type="text" name="country" required>
      </div>
      <input type = "submit" value = "submit">
    </form>
  </div>
</body>
</html>