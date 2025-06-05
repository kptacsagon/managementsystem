<?php
require_once('includes/load.php');
// Handle POST logic here to insert new user into database
?>
<?php include_once('layouts/header.php'); ?>
<div class="signup-page">
    <div class="text-center">
        <h2>Create Account</h2>
    </div>
    <form method="post" action="signup.php">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email (optional)</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Sign Up</button>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
