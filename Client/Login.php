<?php
require('Login_Submit.php');
?>
<h1>Login</h1>
<?php if (isset($error_message)) {
    echo "<p style='color: red;'>$error_message</p>";
} ?>
<form method="POST" action="">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>