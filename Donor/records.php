<?php include "includes/header.php";?> 
<?php include "includes/navigation.php";?>

  <div id="wrapper">

<?php include "includes/sidebar.php";?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
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
                <tfoot>
                  <tr>
                  <th>Donation ID</th>
                    <th>To Whom</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Description</th>
                    <th>Amount</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Maher NGO</td>
                    <td>23/4/18</td>
                    <td>2:00pm</td>
                    <td>Stationary</td>
                    <td>50</td>
                  </tr>
                  
                  <tr>
                  <td>18</td>
                    <td>BVJSS NGO</td>
                    <td>23/8/19</td>
                    <td>6:00pm</td>
                    <td>Money</td>
                    <td>780000</td>
                  </tr>

                  <tr>
                  <td>5</td>
                    <td>Mahila Seva  NGO</td>
                    <td>2/9/19</td>
                    <td>10:00am</td>
                    <td>Clothes</td>
                    <td>600</td>
                  </tr>



                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
</div>