<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Book keeper</title>
</head>

<body>
  <center>
  <h1>THE BOOK KEEPER</h1>

  <p>Collect a list of all the books you've read</p>
  <p>Whether they're one star or five stars, keep track of what you love here!</p>

  <p>Fill out the form below to add a book to your collection</p>

  <!-- Form that allows user to input data into the books table-->
  <form action="input.php" method="POST">
  <p>  
    <label for="bookName">Book title:</label>
    <input type="text" name="bookName" id="bookName" required><br>
  </p>
  <p>
    <label for="author">Author:</label>
    <input type="text" name="author" id="author" required><br>
  </p>
  <p>
    <label for="genre">Genre:</label>
    <input type="text" name="genre" id="genre" required><br>
  </p>
  <p>
    <label for="dateFinished">Date finished:</label>
    <input type="date" name="dateFinished" id="dateFinished" required><br>
  </p>
  <p>
    <label for="stars">Stars:</label>
    <select id="stars" name="stars">
      <option value="1">1 Star</option>
      <option value="2">2 Stars</option>
      <option value="3">3 Stars</option>
      <option value="4">4 Stars</option>
      <option value="5">5 Stars</option>
    </select>
  </p>
  <p>
    <label for="review">Review:</label>
    <textarea id="review" name="review" rows="4" cols="50"></textarea>
  </p>

    <input type="submit" value="Submit">  

  </form>
  
  <a href="http://192.168.56.13">View your Booke-Keeper</a>

</body>
</html>

