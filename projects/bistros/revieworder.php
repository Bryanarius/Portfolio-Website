<?php session_start();
 include 'head.php';
 include 'debug.php' ;
 ?>


<div class = "container">
<div class = "row">
 <div class = "col-md-12">


<h1>Review Your Order</h1>
<table class ="table table-striped table-hover">
<?php 


if(isset($_POST['breakfastitem'])) {
include 'db.cred.php';
$total = 0;

foreach($_POST['breakfastitem'] as $item){
   


$sql = "SELECT * FROM menuitems WHERE menu_id = '{$item}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $total = $row['item_price'] + $total
?>

  <tr>
      
    <td><?=$row['item_name']?></td>
    <td><?=$row['item_blurb']?></td>
    <td>$<?=number_format($row['item_price'],2)?></td>


  </tr>
<?php

  }
} else {
  echo "0 results";
}


}


}
$finaltotal = number_format($total,2)
?>


</table>

<h3> Total Price: $<?=$finaltotal?></h3>

<br> <br>


<form action="orderprocess.php" method="POST">
Email: <input type="text" name="usersEmail" value="bryanarius@gmail.com" required><br><br>
<button type="submit" name="submitorder" class="btn btn-info" >Submit Order</button>
</form>
</div></div></div>

<br> <br><br> <br><br> <br><br> <br><br> <br>
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