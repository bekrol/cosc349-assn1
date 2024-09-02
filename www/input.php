<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>

    <?php
    
        $db_host   = '192.168.56.12';
        $db_name   = 'fvision';
        $db_user   = 'webuser';
        $db_passwd = 'insecure_db_pw';

        $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

        // Check connection
            if($conn === false){
                die("ERROR: Could not connect. " 
                    . mysqli_connect_error());
                }

        $siteName = $_REQUEST['siteName'];
        $sitePage = $_REQUEST['sitePage'];
        $siteUrl = $_REQUEST['siteUrl'];
        $tags = $_REQUEST['tags'];

        $sql = "INSERT INTO websites (siteName, sitePage, siteUrl, tags) VALUES ('$_POST[siteName]', '$_POST[sitePage]', '$_POST[siteUrl]', '$_POST[tags]')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>"; 

            echo nl2br("\n$siteName\n $sitPage\n "
                . "$siteUrl\n $tags");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
    ?>

    <a href="database.php">View your collection of web links here</a>

    </center>
</body>

</html>