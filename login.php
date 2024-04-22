<?php include "lib/header.php"?>
<main class="log-container">
    <h1 class="log-kop">Register</h1>
    <section class="bom">
<form action="connect.php" method="post">
    <div>
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" />
    </div>
    <div>
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastName" />
    </div>
    <label for="gender">Gender</label>
    <div class="gender-container">
        <label for="male" class="radio-inline">
            <input type="radio" name="gender" value="m" id="male" />
            Male
        </label>

        <label for="female" class="radio-inline">
            <input type="radio" name="gender" value="f" id="female" />
            Female
        </label>

        <label for="others" class="radio-inline">
            <input type="radio" name="gender" value="o" id="others" />
            Others
        </label>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" />
    </div>
    <div>
    <label for="number">Phone Number</label>
    <input type="number" class="form-control" id="number" name="number" />
    </div>
    <input type="submit" class="btn btn-primary" />
    </section>
</form>
</main>
<?php include "lib/footer.php"?>
