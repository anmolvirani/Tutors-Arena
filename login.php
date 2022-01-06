<?php
$login = false;
$showError = false;
$showAlert = false;
if($_SERVER["REQUEST_METHOD"]== "POST")
{


include 'partials/_dbconnect.php';
$username = $_POST['uname'];
$password = $_POST['password'];

$sql = "SELECT * FROM `mentorlist` WHERE `Email`='$username' AND `Mentrepasss`='$password'";
$sql2 = "SELECT * FROM `studentlist` WHERE `Email`='$username' AND `Password`='$password'";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);
$num = mysqli_num_rows($result);
$num2 = mysqli_num_rows($result2);

if($num == 1)
{
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['mentor'] = true;
    $_SESSION['username'] = $username;
    header("location: yourprofile.php");
}
else if($num2==1)
{
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['mentor'] = false;
    $_SESSION['username'] = $username;
    header("location: index.php");
}
else
{
    $showError = "Invalid Credentials";
}




}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
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
<?php

if($showError)
{
    echo '<div class="alert alert-danger" role="alert">
    Error!Username or password is incorrect
    </div>';
}
?>

    <div class="text-box">
        <h3>Tutors Arena</h3>
        <h4>Discover India's excellent tutors right on your fingertips</h4>
        
    </div>




	<div class="topright1">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up</button>
	</div>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <h1>Sign up</h1>
                <img src="images/ab.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Username</b></label><br>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <br><br>

                <label><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <br><br>

                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me

                    <div class="text-box44">
                        <h3>Tutors Arena</h3>
                        <h4>Discover India's excellent tutors right on your fingertips</h4>
                    </div>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

<div class = "containerloc">
    <div class="container">
    <form action="/Tutors Arena/login.php" method="post">
  <div class="mb-3 col-md-6">
    <label for="uname" class="form-label">Username</label>
    <input type="text" class="form-control" id="uname" name="uname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
        <input type="checkbox" checked="checked"> creating an account means you are okay with our terms <br>of service , privacy policy and our default notification settings
        <br>
        </div>
    </div>
</div>
<div class = "createaccount">
<button class="createaccountlayout"
onclick="window.location.href = 'home.php';">Create Account</button>
</div>

    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>




    <div class="signupwithgoogle">
    <button class = "buttonlayout"
      onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login with Google</button>
      </div>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <img src=
"img/Schemestudent.png" alt="Avatar" class="avatar">
            </div>




            <!-- <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div> -->
        </form>
    </div>

    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                signup.html;
            }
        }
    </script>


	</body>
</html>
