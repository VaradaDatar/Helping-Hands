<?php include "includes/header.php";
?>
<br><br><br><br>
<body>
    
    

        
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
            <img src="https://image.shutterstock.com/image-photo/happy-volunteer-family-putting-their-260nw-279709709.jpg" class="card-img" alt="...">
              
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Volunteer Register</h5>
              <form action="V_reg.php" method="post" class="form-signin">
                <div class="form-label-group">
                  <input type="text" name="inputUsername" class="form-control" placeholder="Username" required autofocus id="Username" >
                  <label for="Username">Username</label>
                </div>
  
                <div class="form-label-group">
                  <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required id="Email" >
                  <label for="Email">Email address</label>
                </div>
                
                <div class="form-label-group">
                  <input type="number" name="inputNumber" class="form-control" placeholder="Ph. NO." required id="Number" >
                  <label for="Number">Contact No.</label>
                </div>

                
                <hr>
  
                <div class="form-label-group">
                  <input type="password" name="inputPassword" class="form-control" placeholder="Password" required id="Password" >
                  <label for="Password">Password</label>
                </div>
                
                <div class="form-label-group">
                  <input type="password" name="inputConfirmPassword" class="form-control" placeholder="Password" required id="ConfirmPassword" >
                  <label for="ConfirmPassword">Confirm password</label>
                </div>
  
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="register" name="register" value="register">Register</button>
                <a class="d-block text-center mt-2 small" href="log.html">Sign In</a>
                <hr class="my-4">
                </form>

                
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
                if(isset($_POST['register']))
                {
                    echo $name=$_POST['inputUsername'];
                    echo "<br>";
                    
                    echo $email=$_POST['inputEmail'];
                    echo "<br>";

                    echo $contact=$_POST['inputNumber'];
                    echo "<br>";

                    echo $passw=$_POST['inputPassword'];
                    echo "<br>";

                    echo $confPassw=$_POST['inputConfirmPassword'];
                    echo "<br>";

                    $query="INSERT INTO vol(userName,email,contact,uPassword,confPassword) VALUES ('$name','$email','$contact','$passw','$confPassw')";
                    $result=mysqli_query($connection,$query);
                    if($result)
                         {
                         echo "Data Save Successful";

                        }
                        else
                        {
                            echo "error";
                        }
                    
                }
                

                ?>
  </body>
  <?php include "includes/footer.php";