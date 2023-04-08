<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "foodsp_web");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $nombre_archivos = $_REQUEST['nombre_archivos'];
        $ver_fecha = $_REQUEST['ver_fecha'];
 
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO archivos (nombre_archivos,ver_fecha) VALUES ('$nombre_archivos','$ver_fecha')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$nombre_archivos\n $ver_fecha\n "
                . "   ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>