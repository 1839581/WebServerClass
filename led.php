<!DOCTYPE html>
<html>
<head>
    <title>Raspberry Pi WiFi Controlled LED</title>
</head>
<body>
    <h1>Control LED using Raspberry Pi Webserver</h1>      
    <form method="get" action="index.php">                
        <input type="submit" style = "font-size: 14 pt" value="OFF" name="off">
        <input type="submit" style = "font-size: 14 pt" value="ON" name="on">
    </form>​​​
                         
    <?php
        shell_exec("/usr/local/bin/gpio -g mode 27 out");
        if(isset($_GET['off'])){
            {
                echo "LED is off";
                shell_exec("/usr/local/bin/gpio -g write 27 0");
            }
                
            else if(isset($_GET['on']))
            {
                echo "LED is on";
                shell_exec("/usr/local/bin/gpio -g write 27 1");
            }
        }
    ?>
</body>
</html>