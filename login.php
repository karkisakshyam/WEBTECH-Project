<?php
include 'header.php';?>
<div id="login_page">
    <form action="login_process.php" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username" id="">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <input type="submit" value="login" >
              <p>Don't have an account?</p>
        <a href="register.php" class="register-btn">Register</a>
            
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>