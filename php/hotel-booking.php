<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Booking</title>
    </head>
    <body>
        <h2>Book your stay now!</h2>

        <?php
            $name = $email = $room = $days = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["custname"]) || empty($_POST["email"]) || empty($_POST["room"]) || empty($_POST["days"])) {
                    echo "<p>Please fill in all the fields.</p>";
                    return;
                }
                $name = htmlspecialchars($_POST["custname"]);
                $email = htmlspecialchars($_POST["email"]);
                $room = htmlspecialchars($_POST["room"]);
                $days = htmlspecialchars($_POST["days"]);

                $price_per_day = 0;

                if ($room == "luxary") {
                    $price_per_day = 3000;
                }
                elseif ($room == "superior") {
                    $price_per_day = 2500;
                }
                else {
                    $price_per_day = 2000;
                }

                $total_price = $price_per_day * $days;

                if ($total_price > 10000) {
                    $total_price = $total_price * 1.12;
                }
                else {
                    $total_price = $total_price * 1.1;
                }

                echo "<p>Thank you for booking your stay, $name!</p>";
                echo "<p>Your booking details:</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Room Type: $room</p>";
                echo "<p>Number of Days: $days</p>";

                echo "<p>Total Cost: $total_price</p>";
            }
        ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Customer Name: </label>
            <input type="name" name="custname" />
            <br/>
            <label for="email">Email: </label>
            <input type="email" name="email" />
            <br/>
            <label for="room">Room Type: </label>
            <select name="room">
                <option value="luxary">Luxary</option>
                <option value="superior">Superior</option>
                <option value="classic">Classic</option>
            </select>
            <br/>
            <label for="days">Number of Days: </label>
            <input type="number" name="days" />
            <button type="submit">Book Now!</input>
        </form>
    </body>
</html>