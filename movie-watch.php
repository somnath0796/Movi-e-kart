<html>
    <head>
        <title>Movie Watch</title>
        <style>
            h1 {
                font-family: fantasy;
                color: darkgrey;
            }
        </style>
    </head>

    <body>
            <center><h1>Movie Watch</h1></center>
            <?php 
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $dbname="movies";
                    $mid = $_REQUEST['id'];
                    $connect = mysqli_connect("$servername","$username","$password","$dbname")or die("cannot Connect to Database");
                    
                    $sql="SELECT PATH FROM movie_view WHERE M_id=$mid;";
                    
                    $result = mysqli_query($connect,$sql);
                    $row=mysqli_fetch_row($result);
                    $path=$row[0];
            ?>
            <center><embed id="divxplayer" type="video/divx" width="1280" height="720" 
                   src = <?php echo '"'.$path.'"'; ?> autoPlay=\"true\" 
                   pluginspage=\"http://go.divx.com/plugin/download/\" alt="Coming Soon!"></embed></center>
            
    </body>
</html>