<!DOCTYPE html>
<html>

<body>
              
    <?php
        shell_exec("/usr/local/bin/gpio -g mode 27 out");
        if(isset($_GET['off'])) {
            echo "LED is off";
            shell_exec("/usr/local/bin/gpio -g write 27 0");
        }
        else if(isset($_GET['on'])) {
            echo "LED is on";
            shell_exec("/usr/local/bin/gpio -g write 27 1");
        }
            
    ?>
</body>
</html>