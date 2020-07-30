<?php include "includes/header.php";?>
<?php include "includes/navigation.php";?>
<?php include "includes/sidebar.php";?>
<?php include "includes/footer.php";?>
<?php
if(isset($_POST['searchedBTN']))
{
  $searchText = $_POST['searchText'];


  $query = "select * from donation where toW='%LIKE% $searchText'";
}
?>
<!-- Icon Cards-->
<div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">Select NGO</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="tables.php">
                <span class="float-left" href="tables.php">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Payment</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="payment.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Records</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="records.php">
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
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">View Invoice</div>
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
             $search_query = "SELECT * FROM donation where toW LIKE '%$searchText%' ";
             $result_search = mysqli_query($connection,$search_query);
             $row = mysqli_num_rows($result_search);
             if($row == 0)
             {
               echo "no result found";
             }
             if($result_search)
             {
                 $count = mysqli_num_rows($result_search);
                 if($count==0)
                 {
                     echo "<h1>No Result Found</h1>";

                 }
                 else
                 {
                  echo "<h1>Some Result Found</h1>";

      
            
            if($result_search)
            {
                while($row=mysqli_fetch_assoc($result_search))
                {
                  $don_id= $row['Do_id'];
                  $to_w = $row['toW'];
                  $d_date = $row['date'];
                  $d_time = $row['time'];
                  $d_des = $row['description'];
                  $d_amount = $row['amount'];
                 
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                <tr>
                  <th>Donation ID</th>
                  <th>To Whom</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Description</th>
                  <th>Amount</th>
                </tr>
              </thead> 
            <?php  
                  echo "
                  
              <tbody>
                <tr>
                  <td>$don_id</td>
                  <td>$to_w</td>
                  <td>$d_date</td>
                  <td>$d_time</td>
                  <td>$d_des</td>
                  <td>$d_amount</td>
                </tr>
                </tbody>
                  
                  </table>
                  ";
          

                }

            }
            else
            {
                echo "Error in Query".mysqli_error($connection);
            }

   
                 }

             }
             else
             {
                 die("Query is Wrong".mysqli_error($connection));
             }

        }
?>


