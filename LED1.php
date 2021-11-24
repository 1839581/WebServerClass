<!DOCTYPE html>
<html>

<body>
              
    <?php
        shell_exec("gpio mode 7 out");
        if(isset($_GET['off'])) {
            echo "LED is off";
            shell_exec("gpio write 7 0");
        }
        else if(isset($_GET['on'])) {
            echo "LED is on";
            shell_exec("gpio write 7 1");
        }
            
    ?>
</body>
</html>