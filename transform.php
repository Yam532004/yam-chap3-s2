<form action="transform.php" method="post">
    <input type="text" name="password" id="password" placeholder="Password">
    <button id="login_btn" name="but">Log in</button>
</form>
<?php
if (isset($_POST['but'])) {
    $password = $_POST['password'];
    $hashedPassword = hash('sha256', $password);
    echo "SUCCESSFUL !!!";
}
?>
