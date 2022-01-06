<?php
$showError = false;
$showAlert = false;
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
    
    include 'partials/_dbconnect.php';
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $sql2 = "SELECT * FROM `studentlist` WHERE `Email`='$username'";
    $result = mysqli_query($conn,$sql2);
    $num2 = mysqli_num_rows($result);
    if($num2>0)
    {
        // $exists = true;
        $showError = "Username already exists";
    }
    else
    {
      // $exists = false;
    
    if(($password == $cpassword))
    {
        $sql = "INSERT INTO `studentlist` (`Email`, `Password`) VALUES ('$username', '$password')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            $showAlert = true;
        }
    }
    else
    {
        $showError = "Passwords do not match";
    }
  }




    }


?>

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="signup.css" rel="stylesheet">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <div class="container">
	<div class="topright">Already a Member?</div>
  </div>

<div class = "bottomleft">
    <button class="back"
    onclick="window.location.href = 'cardhome.php';">Home</button>
    </div>

    <div class="vl"></div>
<body>

    <div class="text-box">
        <h3>Tutors Arena</h3>
        <h4>Discover India's excellent tutors right on your fingertips</h4>
    </div>

    <div class="topright1">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign in</button>
	</div>
    <div id="id01" class="modal">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <h1>Sign in</h1>
                <img src="images/ab.png" alt="Avatar" class="avatar">
            </div>

            <form action="/Tutors Arena NFinal/signup.php" method="post">
  <div class="mb-3 col-md-6">
    <label for="uname" class="form-label">Username</label>
    <input type="text" class="form-control" id="uname" name="uname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="cpassword" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>

    </div>



   <body>
   <?php
   if($showAlert)
   { echo "<div class='alert alert-success' role='alert'>
           Success! Your Account is successfully created and you can log in
         </div>";
   }
   if($showError)
   {
    echo "<div class='alert alert-danger' role='alert'>".$showError."</div>";
   }
?>



<!-- Form Begins here-->

<div class="containerloc"><div class="container">
  <h1>Please enter email and password</h1>
  <form action="/Tutors Arena/signupnew.php" method="post">
  <div class="mb-3 col-md-6">
    <label for="uname" class="form-label">Username</label>
    <input type="text" class="form-control" id="uname" name="uname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>

</div></div>

<?php


?>






     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
   </body>
 </html>
