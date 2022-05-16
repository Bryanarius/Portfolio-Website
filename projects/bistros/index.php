<!DOCTYPE html>
<html>


<?php include 'head.php'; ?>



      <div class="container text-center"  style="background-image: url(images/resturant3.jpg);color:grey;background-repeat: no-repeat;background-color:black;height:500px;">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="mt-5" style="padding-top: 100px;">Voted Best New Restaurant in Jacksonville!</h1>


            <p style="padding-top:100px;"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Order Online</button></p>
            <br><br>
          </div>
        </div>
        </div>

    <br><br>

<!-- Menu Section -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>OUR MENUS</h2>
            </div>

    </div></div>

    <br><br>
    
    <div class="container text-center">    
        <div class="row">
          <div class="col-sm-4">


            <div class="panel panel-primary">
              <div class="panel-heading"></div>
              <div class="panel-body"><img src="images/breakfast.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer"><a href="menu.php?menu_meal=breakfast" class="btn btn-info"><h3><span style="color:white">Breakfast</span></h3></a></div>
            </div>
          </div>


            <div class="col-sm-4">
                <div class="panel panel-primary">
                  <div class="panel-heading"></div>
                  <div class="panel-body"><img src="images/lunch.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                  <div class="panel-footer">
                    <a href="menu.php?menu_meal=lunch" class="btn btn-info">
                    <h3><span style="color:white">Lunch</span></h3></a></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-primary">
                  <div class="panel-heading"></div>
                  <div class="panel-body"><img src="images/dinner.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                  <div class="panel-footer"><a href="menu.php?menu_meal=dinner" class="btn btn-info"><h3><span style="color:white">Dinner</span></h3></a></div>
                </div>
              </div>

    </div></div>

<!-- Chef Description -->

    <br><br>

    <div class="container">
        <div class="row">
    <div class="col-md-6">
        <h2>Our Chef</h2>
    <div class="panel panel-primary">
      <div class="panel-heading"></div>
      <div class="panel-body"><img src="images/chef.jpg" class="img-responsive" style="width:30%;float:right;" alt="Image">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <br>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
      </p></div>
    </div>
  </div>

<!-- Reviews Section -->

  <div class="container">
    <div class="row">
<div class="col-md-6">
    <h2>Reviews</h2>
<div class="panel panel-primary">
  <div class="panel-heading"></div>
  <div class="panel-body">
  <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i>
  <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i>
  <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i>
  <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i>
<i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i></div>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
  <hr>


  <div class="panel-body">
    <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i>
    <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i>
    <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i>
    <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i>
    <i class="fas fa-star" style="color:gold;text-shadow: 1px 1px black;font-size:18px;"></i></div>

  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure  </p>
</div>
</div>

    </div></div></div> </div></div></div>

  

    <!-- Footer -->

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



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Order Online</h4>
      </div>



      <div class="modal-body">
        <h3>Choose a menu:</h3>
        <br>
        <div class = "row">
      <div class = "col-sm-4">
        <a href="menu.php?menu_meal=breakfast" class="btn btn-info"><span style="color:black">Breakfast</span></a>
        </div>

        <div class = "col-sm-4">
        <a href="menu.php?menu_meal=lunch" class="btn btn-info"><span style="color:black">Lunch</span></a>
        </div>

        <div class = "col-sm-4">
        <a href="menu.php?menu_meal=dinner" class="btn btn-info"><span style="color:black">Dinner</span></a>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




</body>
</html>