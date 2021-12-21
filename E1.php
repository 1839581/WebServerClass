<html>
    <body>
        <?php
            $ip = var_dump($_SERVER['REMOTE_ADDR']);

            $SQL = "INSERT INTO elect(Component)VALUES($ip)";

            $term = echo $_GET["term"];

            header('Location:https://google.com');

            ?>
    </body>
</html>
