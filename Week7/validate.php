<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email">
            <br>

            <label for="address">URL address</label>
            <input type="text" name="address">
            <br>

            <label for="phone">Phone number</label>
            <input type="text" name="phone">
            <br>

            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
    if (array_key_exists("email", $_POST)) {
        $email = $_POST["email"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];

        $check_phone = "/^\+84[[:digit:]]{9}/";
        $check_address = "/^(http::\/\/)|(https:\/\/)/";
    }
?>