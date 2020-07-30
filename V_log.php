<?php include "includes/header.php";
?>

<br><br><br><br>
<body>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                   <!-- Background image for card set in CSS! -->
                   <img src="https://image.shutterstock.com/image-photo/happy-volunteer-family-putting-their-260nw-279709709.jpg" class="card-img" alt="...">
              
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Volunteer Log In</h5>
                  <form class="form-signin" method="post" action="">
                    
                    <div class="form-label-group">
                      <input type="text" name="userName" id="Username" class="form-control" placeholder="User Name" required>
                      <label for="Username">User name</label>
                    </div>
                    
                    <hr>
      
                    <div class="form-label-group">
                      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>
                    
                    
      
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"  name="login" value="login">Sign In</button>
                    
                    <hr class="my-4">
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
      

<?php
if(isset($_POST['login']))
{
  $username = $_POST['userName'];
  $password = $_POST['password'];

  $query = "SELECT * from vol where userName='$username'";
  $result = mysqli_query($connection,$query);
  if(!$result)
  {
      echo"error!".mysqli_error($connection);

  }
  while($row=mysqli_fetch_assoc($result))
                {
                  $user_id= $row['V_id'];
                  $username_backend= $row['userName'];
                  $email= $row['email'];
                  $contact = $row['contact'];
                  $password_backend = $row['password'];
                  $role = $row['userRole'];
                  
  
                }
    if($username===$username_backend && $password===$password_backend)
                {
                    $_SESSION['V_id']=$user_id;
                    $_SESSION['userName']=$username_backend;
                    $_SESSION['email']=$email;
                    $_SESSION['contact']=$contact;
                    $_SESSION['password']=$password_backend;
                    $_SESSION['userRole']=$role;

                    header("Location:Volunteer/index.php");
                } 
                
 } 
 
?>