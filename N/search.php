<?php include "includes/header.php";?>

<?php
if(isset($_POST['searchedBTN']))
{
  $searchText = $_POST['searchText'];


  $query = "select * from donation where toW='%LIKE% $searchText'";
}
?>


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
                  $from_w = $row['fromW'];
                  $d_date = $row['date'];
                  $d_time = $row['time'];
                  $d_des = $row['description'];
                  $d_amount = $row['amount'];
                 
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                <tr>
                  <th>Donation ID</th>
                  <th>From Whom</th>
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
                  <td>$from_w</td>
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

<?php include "includes/footer.php";?>
