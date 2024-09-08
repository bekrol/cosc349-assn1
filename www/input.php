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
        $genre = $_REQUEST['genre'];
        $dateFinished = $_REQUEST['dateFinished'];
        $stars = $_REQUEST['stars'];
        $review = $_REQUEST['review'];

        $sql = "INSERT INTO books (bookName, author, genre, dateFinished, rating, review) VALUES ('$bookName', '$author', '$genre', '$dateFinished', '$stars', '$review')";

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

    <a href="http://192.168.56.13">View your Booke-Keeper here</a>
    <a href="index.php">Add more books here</a>

    </center>
</body>

</html>