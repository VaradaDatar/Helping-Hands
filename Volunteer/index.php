<?php include "includes/header.php";?>
<h2>Welcome <?php
           echo $_SESSION['userName'];
      ?></h2>

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

        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Donation Drive</h5>
        <p class="card-text">Donation drive is being arranged in various schools to attract students to help others </p>
        <p class="card-text"><small class="text-muted">Join us at Friday 11 AM in Modern HIghschool</small></p>
      </div>
    </div>
  </div>
</div>


<div class="card mb-3" style="max-width: 500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://images.unsplash.com/photo-1485282451181-373ce0a1f879?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60 class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Awareness Drive</h5>
        <p class="card-text">Awareness drive is being arranged in various schools to pass the message among citizens to help the needy </p>
        <p class="card-text"><small class="text-danger">Join us at Friday 11 AM at JM road</small></p>
      </div>
    </div>
  </div>
</div>
        
      </div>
      <!-- /.container-fluid -->

      <?php include "includes/footer.php";?>

  </div>
  <!-- /#wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="includes/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

 
