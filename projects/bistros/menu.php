<?php 


include 'head.php'; 
include 'db.cred.php'; 


?>

<div class="container">
        <div class="row">
            <div class="col-md-12">

 <br>

<h1><?=ucfirst($_GET['menu_meal'])?> Menu </h1>
<form action="revieworder.php" method="POST">
<?php

echo '<table class="table table-hover table-boardered">';

if(isset($_GET['menu_meal'])) {


switch ($_GET['menu_meal']) {
  case "breakfast":
    $sql = "SELECT * FROM menuitems WHERE menu_meal = 'breakfast'";
    break;
  case "lunch":
    $sql = "SELECT * FROM menuitems WHERE menu_meal = 'lunch'";
    break;
  case "dinner":
    $sql = "SELECT * FROM menuitems WHERE menu_meal = 'dinner'";
    break;
  default:
    echo "You did not choose a menu";
}

}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>



<tr>
<td><img src="images/<?=$row['item_image']?>"></td>
<td><?=$row['item_name']?></td>
<td><?=$row['item_blurb']?></td>
<td>$<?=number_format($row['item_price'],2)?></td>
<td><input type="checkbox" name="breakfastitem[]" value="<?=$row['menu_id']?>"></td>

</tr>

<?php
  }
} else {
  echo "0 results";
}

echo'</table>';

?>

<button type="submit" name="revieworder" class="btn btn-info" >Review Order</button>
</form>

</div></div></div>

<br><br>
    <footer>
    <div class="container" >
        <div class="row">
            <div class="col-md-4 text-left">
                <p>copyright, Bistros LLC</p>
            </div>
            <div class="col-md-4 text-center">
                <p>Bistros 123 Main St, Jax,Fl</p>
            </div>
            <div class="col-md-4 text-right">
                <a href="#">Privacy Policy</a>
                <a href="#">|Terms of Use</a>
            </div>

    </div></div>
</footer>