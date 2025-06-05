<?php
require_once('includes/load.php');
// You can implement email reset logic here later
?>
<?php include_once('layouts/header.php'); ?>
<div class="forgot-password-page">
    <div class="text-center">
        <h2>Reset Your Password</h2>
    </div>
    <form method="post" action="forgot_password.php">
        <div class="form-group">
            <label>Enter your username or email:</label>
            <input type="text" name="user_email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-warning">Reset Password</button>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
