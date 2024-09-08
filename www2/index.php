<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Book Search</title>
</head>

<body>
    <center>
        <h1>BOOK KEEPER STATISTICS</h1>

        <p> Here is some insight into the books you ahve read and stored in your Book Keeper</p>

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

            // Total count of books read
            $sql_total_books = "SELECT COUNT(*) AS total_books FROM books";
            $result_total_books = $conn->query($sql_total_books);
            $total_books = $result_total_books->fetch_assoc()['total_books'];

            // Total count of each genre read
            $sql_total_genre = "SELECT genre, COUNT(*) AS total_genre FROM books GROUP BY genre";
            $result_total_genre = $conn->query($sql_total_genre);

            // Top 5 authors read
            $sql_top_authors = "SELECT author, COUNT(*) AS total_author FROM books GROUP BY author ORDER BY total_author DESC LIMIT 5";
            $result_top_authors = $conn->query($sql_top_authors);

            // Count of each star rating (1-5)
            $sql_star_count = "SELECT stars, COUNT(*) AS total_stars FROM books GROUP BY stars";
            $result_star_count = $conn->query($sql_star_count);
        ?>

        <!-- Total Count of Books Read -->
        <h2>Total Books Read</h2>
        <p>Total Books: <?php echo $total_books; ?></p>

        <!-- Total Count of Each Genre Read -->
        <h2>Total Count of Each Genre Read</h2>
        <table border="1">
            <tr>
                <th>Genre</th>
                <th>Total Read</th>
            </tr>
            <?php while ($row = $result_total_genre->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['genre']); ?></td>
                    <td><?php echo htmlspecialchars($row['total_genre']); ?></td>
                </tr>
            <?php } ?>
        </table>