<!DOCTYPE html>
<html>
<body>
    <?php
        if(isset($_GET['off'])) {
            shell_exec("gpio write 7 0");
        }
                
        else if(isset($_GET['on'])) {
            shell_exec("gpio write 7 1");
        }
    ?>

</body>

</html>