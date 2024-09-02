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

        $bookName = $_REQUEST['bookName'];
        $author = $_REQUEST['author'];
        $dateFinished = $_REQUEST['dateFinished'];
        $stars = $_REQUEST['stars'];
        $review = $_REQUEST['review'];

        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>"; 

            echo nl2br("\n$bookName\n $sitPage\n $siteUrl\n $tags");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
    ?>

    <a href="database.php">View your collection of web links here</a>
    <a href="index.php">Add more links here</a>

    </center>
</body>

</html>