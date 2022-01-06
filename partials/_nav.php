<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.nav-links ul li a{
 color: white;
}

.header{
 width: 100%;
 background-color: black;

}
nav{
  display: flex;
  padding: 2% 6%;
  justify-content: space-between;
  align-items: center;

}

nav img{
  width: 150px;

}

.nav-links{
  flex: 1;
  text-align: right;
}
.nav-links ul li{
  list-style: none ;
  display: inline-block;
  padding: 8px 12px;
  position: relative;
}


.nav-links ul li::after{
  content: '';
  width: 0%;
  height: 2px;
  background-color: #f44336 ;
  display: block;
  margin: auto;
  transition: 0.5s;

}

.nav-links ul li:hover::after{
  width: 100%;

}

IMG.displayed{
  display: block;
  margin-bottom: 0px;
  margin-left: auto;
  margin-right: auto;
  height: 320px;
}

.nav-links ul li a{
  color:white;
}


</style>
<body>
<section class="header" style="height: 5%;">
<nav>
          <a href="index.php"><img src="images/z.png" style="height: 50px; width: 40px;"></a>
          <div class="nav-links">
            <ul>
              <li><a href="">Contact Us?</a></li>
              <!-- <li><a href="mentorregistration.php">Mentor Registration</a></li> -->
              <?php
              session_start();
              if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
              {

                echo "<li><a href='login.php'>Login</a></li>
                <li><a href='signupnew.php'>Sign up</a></li>
                <li><a href='mentorregistration.php'>Mentor Registration</a></li>";
              }
              // else
              // {
              //     echo "<li>".$_SESSION['username']."</li";
              // }

              if(isset($_SESSION['mentor']) && $_SESSION['mentor']==true)
              {
                  echo "<li><a href='/Tutors Arena NFinal/yourprofile.php'>Your Profile</a></li>";
              }
              
              
              
            
              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
              echo "<li><a href='logout.php'>Logout</a></li>";
              }

              
              ?>
              </li>
            </ul>

          </div>
      </nav>
            </section>
</body>
</html>