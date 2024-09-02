<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Database test page</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>THE BOOK KEEPER</h1>

<p>Showing all of the books you have read:</p>

<table border="1">
  <tr><th>Book title</th><th>Author</th><th>Genre</th><th>Date finished</th><th>Rating</th><th>Review</th></tr>

  <?php
  
    $db_host   = '192.168.56.12';
    $db_name   = 'fvision';
    $db_user   = 'webuser';
    $db_passwd = 'insecure_db_pw';

    $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

    $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

    $q = $pdo->query("SELECT * FROM books");

    while($row = $q->fetch()){
      echo "<tr><td>".$row["bookName"]."</td><td>".$row["author"]."</td><td>".$row["genre"]."</td><td>".$row["dateFinished"]."</td><td>".$row["rating"]."</td><td>".$row["review"]."</td></tr>\n";
    }

  ?>
  </table>

  <a href="index.php">Add more books here</a>
</body>
</html>

