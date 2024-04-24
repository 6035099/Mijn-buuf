<?php
include "lib/header.php";
?>
<main class="inlog-container">
    <article>
        <img class="login_img" src="img/home/Main_img.png"  alt="">
    </article>
    <article class="Login_cont">
        <h1>Login</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Process the login form
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conn = new mysqli('localhost', 'root', '', 'Mijn_Buuf');
            $sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password' ";
            $result = mysqli_query($conn, $sql);
            $aantal = mysqli_num_rows($result);
            if ($aantal == 1) {
                session_start();
                $_SESSION['email'] = $email;
                header('Location: form.php');
            } else {
                echo "Login failed";
            }
            $check = mysqli_fetch_array($result);
        } else {
            echo "";
        }
        ?>
        <p>Doesn’t have an account yet?<a href='register.php'>Sign Up</a></p>
        <form action="login.php" method="POST">
            <label for="username">Email Address</label>
            <input type="text" id="email" name="email" placeholder="info@gmail.com"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="********" required><br><br>
            <input type="submit" value="Login">
        </form>
    </article>

</main>

<?php include "lib/footer.php"; ?>