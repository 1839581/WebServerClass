<!DOCTYPE html>
<html>
<body>
    <?php
    $servername = "localhost";
    $username = "pi";
    $password = "FtS@iS18";
    $database = "Luca1";
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "connected succesfully";
    echo "<br/>";
    $sql = "select * from elect;";
    $result = mysqli_query($conn, $sql);

    foreach ($result as $row) {
        echo "Component: {$row['Component']} | Value: {$row['Value']} | In_Stock: {$row['In_Stock']} | Amount_needed: {$row['Amount_needed']}" ;
    }
    ?>
    <form>
        <select>
            <?php
                foreach ($result as $row) echo "<option value='{$row["Component"]}'>{$row["Value"]}<{$row["In_Stock"]}>{$row["Amount_needed"]}";
            ?>
        </select>
    </form>
</body>
</html>
