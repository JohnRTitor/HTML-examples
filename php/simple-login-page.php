<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <?php
            $answer = "";
            // Form submission handler
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["username"]) || empty($_POST["password"])) {
                    $answer = "Username or password is empty.";
                }
                else {
                    $username = htmlspecialchars($_POST["username"]);
                    $password = htmlspecialchars($_POST["password"]);
                    if ($username == "admin" && $password == "password") {
                        $answer = "You are logged in!";
                    }
                    else {
                        $answer = "Incorrect username or password.";
                    }
                }
            }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="username">Username: </label>
            <input type="text" name="username" />
            <label for="password">Password: </label>
            <input type="password" name="password" />
            <input type="submit" />
        </form>
        <p><?php echo $answer; ?></p>
    </body>
</html>