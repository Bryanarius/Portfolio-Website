<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Movies</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<link rel="shortcut icon" type="image/x-icon" href="images/computer.ico">


</head>
<body>
<?php

require_once 'db_cred.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert


?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

<h1>My Favorite Movies</h1>

<?php

if(isset($_SESSION['message'])) {

if($_SESSION == 'insertok') {
echo '<div class="alert alert-success">
  <strong>Success!</strong> Movie Added
</div>';  
}

if($_SESSION == 'deleteok') {
  echo '<div class="alert alert-danger">
    <strong>Success!</strong> Movie Deleted.
  </div>';  
  }

  if($_SESSION == 'updateok') {
    echo '<div class="alert alert-info">
      <strong>Success!</strong> Movie updated
    </div>';  
    }

if($_SESSION == 'blank') {
    echo '<div class="alert alert-success">
      <strong>Uh oh!</strong> All fields required.
    </div>';  
}


unset($_SESSION['message']);
}

if(isset($_POST['editmovie'])) {
//my edit form
?>
<form action="process.php" method="POST">
<div class="form-row">

<div class="col">
      <input type="text" class="form-control" id="movie_title" value="<?=$_POST['movie_title']?>" name="movie_title" >
    </div>

<div class="col">
  <select class="form-control" name="movie_genre">
    <option value="none">Select a Genre</option>
    <?php
    $genres = array("Action","Comedy","Kids and Family", "Drama","Fantasy","Horror","Mystery","Romance","Thriller","Western");

    foreach($genres as $genre) {
      if($_POST['movie_genre'] == $genre) {
      echo '<option value"'.$genre.'" selected>'.$genre.'</option>';
      }
      else{
        echo '<option value"'.$genre.'">'.$genre.'</option>';
      }
    }

    ?>
    </select>
</div>
<input type="hidden" name="movie_id" value="<?=$_POST['movie_id']?>">
<button type="submit" name="updatemovie" class="btn btn-info">Update Movie</button>
</form>

<?php

} else {
//add form
?>
<form action="process.php" method="POST">
<div class="form-row">

<div class="col">
      <input type="text" class="form-control" id="movie_id" placeholder="Title" name="movie_title" >
    </div>

<div class="col">
  <select class="form-control" name="movie_genre">
    <option value="none">Select a Genre</option>
    <?php
    $genres = array("Action","Comedy","Kids and Family", "Drama","Fantasy","Horror","Mystery","Romance","Thriller","Western");

    foreach($genres as $genre) {
        echo '<option value"'.$genre.'">'.$genre.'</option>';
    }

    ?>
    </select>
</div>
<button type="submit" name="addmovie" class="btn btn-primary">Add Movie</button>
</form>

<?php
}

?>


</div>


<br></br>
<table class="table table-hover table-striped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Remove</th>
        <th>Edit</th>
<?php

// Display data from database table 'movies'



$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
<tr>
    <td><?=$row['movie_id']?></td>
    <td><?=$row['movie_title']?></td>
    <td><?=$row['movie_genre']?></td>
    <td><form action="process.php" method="POST">
     <input type="hidden" name="movie_id" value="<?=$row['movie_id']?>">
    <button type="submit" name="deletemovie" class="btn btn-danger btn-sm">X</button>
  </form>
  </td>
  <td><form action="index.php" method="POST">
  <input type="hidden" name="movie_id" value="<?=$row['movie_id']?>">
  <input type="hidden" name="movie_title" value="<?=$row['movie_title']?>">
  <input type="hidden" name="movie_genre" value="<?=$row['movie_genre']?>">
    <button type="submit" name="editmovie" class="btn btn-success btn-sm">edit</button>
  </form>
  </td>
  </tr>


<?php
  }
} else {
  echo "0 results";
}
$conn->close();

?>
</div></div></div>
</body>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</html>