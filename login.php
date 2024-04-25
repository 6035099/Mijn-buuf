<?php
include "lib/header.php";
?>
<main class="inlog-container">
<form action="login.php" method="POST">
    <label for="username">Email</label>
    <input type="text" id="email" name="email" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = new mysqli('localhost', 'root', '', 'Mijn_Buuf');
    $sql= "SELECT * FROM registration WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $aantal = mysqli_num_rows($result);
    if ($aantal == 1) {
        session_start();
        $_SESSION['email'] = $email;
        header('Location: form.php');
    } else {
        echo "Login failed registreer hier <a href='register.php'>Registeren</a>.";
    }
    $check = mysqli_fetch_array($result);
    
   

} else {
    echo "Wrong username or password.<br>Of registreer hier <a href='register.php'>Registeren</a>.";
}
?>
</main>

<?php include "lib/footer.php";?>