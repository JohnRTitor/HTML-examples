<!DOCTYPE html>
<html>
    <head>
        <title>BackToNiggas</title>
    </head>
    <body>

        <?php
            // Initialize variables
            $answer = "";
            $errorMessage = "";
            $successMessage = "";

            // Form submission handler
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["answer"])) {
                    $errorMessage = "You need to give an answer, you stupid cunt";
                } else {
                    $answer = htmlspecialchars($_POST["answer"]);
                }

                if ($answer == "Yes") {
                    $successMessage = "I know right";
                } else {
                    $errorMessage = "You are a dumb fuck";
                }
            }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="answer">Is Vivek retarded?</label>
            <input type="text" name="answer" placeholder="Yes">
            <input type="submit" value="Login">
        </form>
        <p><?php echo $errorMessage; ?></p>
        <p><?php echo $successMessage; ?></p>
    </body>
</html>