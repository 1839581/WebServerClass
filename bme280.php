<html>
    <body>
        <?php
            
            
            $raw = `./bme280`;
            $deserialized = json_decode($raw);
            echo "The sensor is the: ";
            echo $deserialized->sensor;
            echo "<br>";
            echo "<br>";
            echo "The temperature is: ";
            echo $deserialized->temperature;
            echo "<br>";
            echo "<br>";
            echo "The altitude is: ";
            echo $deserialized->altitude;
            echo "<br>";
            echo "<br>";
            echo "The pressure is: ";
            echo $deserialized->pressure;
            echo "<br>";
            echo "<br>";
            echo "The humidity is: ";
            echo $deserialized->humidity;
            echo "<br>";
            
            
            
            



        ?>
    </body>
</html>