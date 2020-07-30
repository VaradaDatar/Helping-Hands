<?php include "includes/header.php";?>
<?php


?>
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="far fa-calendar-check"></i>
                </div>
                <div class="mr-5">New Events</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="cards.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-certificate"></i>
                </div>
                <div class="mr-5">Your Certificate</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          
        </div>


<?php
        if(isset($_POST['searchedBTN']))
        {
             $searchText = $_POST['searchText'];
             $search_query = "SELECT * FROM volunteer where ev_title LIKE '%$searchText%' ";
             $result_search = mysqli_query($connection,$search_query);
             $row = mysqli_num_rows($result_search);
             if($row == 0)
             {
               echo "no result found";
             }
             else
             {
              while($x=mysqli_fetch_assoc($result_search))
                {
                    $ev_title= $x['ev_title'];
                    $ev_des = $x['ev_des'];
                    $ev_date = $x['ev_date'];
                    $ev_venue = $x['ev_venue'];


                    echo "<div class='col-md-8'>
                    <div class='card-body'>
                      <h5 class='card-title'>$ev_title</h5>
                      <p class='card-text'>$ev_des </p>
                      <p class='card-text'><small class='text-danger'>Join us at $ev_date $ev_venue</small></p>
                    </div>
                  </div>
                
              ";
                      
                   
             }
            }
          }
?>