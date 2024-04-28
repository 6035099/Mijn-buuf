<?php
include "lib/header.php";
?>
<main class="inlog-container">
    <article>
        <img class="login_img" src="img/home/Main_img.png"  alt="">
    </article>
    <article class="Login_cont">
        <h1>Login</h1>
       
        <p>Heeft u geen Account?<br><a href='register.php'>Registreer je</a></p>
        <form action="login.php" method="POST">
            <label for="username">Email Address</label>
            <input type="text" id="email" name="email" placeholder="info@gmail.com"><br><br>
            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" placeholder="********" required><br><br>
            <input type="submit" value="Login">
        </form>
    </article>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = new PDO('localhost', 'root', '', 'Mijn_Buuf');
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
    echo "Wrong username or password. Please try again.";
}
?>
</main>

<?php include "lib/footer.php"; ?>