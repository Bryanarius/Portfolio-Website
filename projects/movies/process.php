<?php
session_start();
require_once 'db_cred.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//insert

if(isset($_POST['movie_title'])) {
$SESSION['message'] = 'blank';
header["location: index.php"];
}

$movie_title = $_POST['movie_title'];
$movie_genre = $_POST['movie_genre'];


//Delete movie
if(isset($_POST['deletemovie'])) {
    // sql to delete a record
$sql = "DELETE FROM movies WHERE movie_id='{$_POST['movie_id']}'";


if ($conn->query($sql) === TRUE) {
  $_SESSION['message'] = 'deleteok';
  header("location: index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
}


// Update movie
if(isset($_POST['updatemovie'])) {
    $sql = "UPDATE movies SET movie_title='{$_POST['movie_title']}',  movie_genre='{$_POST['movie_genre']}' WHERE id='{$_POST['id']}'";
  
  
  if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = 'updateok';
    header("location: index.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }
  }



// Add movie
$sql = "INSERT INTO movies (movie_title, movie_genre)
VALUES ('{$movie_title}', '{$movie_genre}')";

if ($conn->query($sql) === TRUE) {
$_SESSION['message'] = 'insertok';
 header("location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>