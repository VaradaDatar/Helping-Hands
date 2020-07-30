<?php include "includes/header.php";?>
<?php
if(isset($_POST['searchedBTN']))
{
  $searchText = $_POST['searchText'];


  $query = "select * from volunteer where ev_title='%LIKE% $searchText'";
}

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
                    $ev_title= $row['ev_title'];
                    $ev_des = $row['ev_des'];
                    $ev_date = $row['ev_date'];
                    $ev_venue = $row['ev_venue'];
                   
                   

                    echo "
                    <h1 class='page-header'>
                    $ev_title
                    <small>Secondary Text</small>
                </h1>

               
                <h2>
                    <a href='#'>$ev_title</a>
                </h2>
                
                <p><span class='glyphicon glyphicon-time'></span> held on $ev_date</p>
                <hr>
                
                <hr>
                <p>$ev_des</p>
                <a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>

                    
                    
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

 
