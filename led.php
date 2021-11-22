<!DOCTYPE html>
<html>
<body>
    <?php
        $state=1;
        if($state=1) {
            shell_exec("gpio write 7 1");
            echo "The light is On";
        }
                
        else
        {
            shell_exec("gpio write 7 0");
            echo "The light is Off";
        }
    ?>

</body>

</html>