<html>
    <body>
        <?php
            
            if(isset($_GET['bm'])) {
                $raw = `./bme280`;
                $deserialized = json_decode($raw);
                echo "The sensor is the:"
                echo $deserialized->sensor;
                echo ""
                echo "The temperature is:"
                echo $deserialized->temperature;
                echo ""
                echo "The altitude is:"
                echo $deserialized->altitude;
                echo ""
                echo "The pressure is:"
                echo $deserialized->pressure;
                echo ""
                echo "The humidity is:"
                echo $deserialized->humidity;
                echo ""
            
            }
            
            



        ?>
    </body>
</html>