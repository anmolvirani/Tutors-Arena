<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
  
    <title></title>
    <style>


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: black; /* Fallback color */
  background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color:white;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.button1 {
  display: block;
  position: relative;
  background: black;
  width: 300px;
  height: 80px;
  line-height: 80px;
  text-align: center;
  font-size: 20px;
  text-decoration: none;
  text-transform: uppercase;
  color: white;
  margin: 40px auto;
  font-family: Helvetica, Arial, sans-serif;
  box-sizing: border-box;
}
/* Button Border Style */

.button1.border {
  border: 4px solid lightblue;
}
.button1.border:hover {
  background: lightblue;
  color: #fff;
}
/* Button Ribbon-Outset Border Style */

.button1.ribbon-outset.border:after,
.button1.ribbon-outset.border:before {
  top: 50%;
  content: " ";
  height: 43px;
  width: 43px;
  position: absolute;
  pointer-events: none;
  background: white;
}
.button1.ribbon-outset.border:after {
  left: -3px;
  margin-top: -40px;
  transform-origin: 0 0;
  box-sizing: border-box;
  border-bottom: 4px solid lightblue;
  border-left: 4px solid lightblue;
  transform: rotate(57.5deg) skew(30deg);
}
.button1.ribbon-outset.border:before {
  right: -46px;
  margin-top: -40px;
  transform-origin: 0 0;
  box-sizing: border-box;
  border-top: 4px solid lightblue;
  border-right: 4px solid lightblue;
  transform: rotate(57.5deg) skew(30deg);
}
.button1.ribbon-outset.border:hover:after {
  background: lightblue
}
.button1.ribbon-outset.border:hover:before {
  background: lightblue
}

</style>
  </head>

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
               
                <li><a><button id='myBtn' style = 'background-color: black; color:darkblue;'>Mentor Registration</button></a></li>";
              }
              // else
              // {
              //     echo "<li>".$_SESSION['username']."</li";
              // }

              if(isset($_SESSION['mentor']) && $_SESSION['mentor']==true)
              {
                  echo "<li><a href='/Tutors Arena/yourprofile.php'>Your Profile</a></li>";
              }
              
              
              
            
              if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
              echo "<li><a href='logout.php'>Logout</a></li>";
              }

              
              ?>
              </li>
            </ul>

          </div>
      </nav>
          


  <hr style="height: 0.01rem; width:100%; border-width:0; background-color:rgb(211,211,211);">
  <IMG class="displayed" src="images/ab.png">
  
</section>
  
  

    </section>
    <div class="text-box">
      <h1>Click on the card to find the right tutor</h1>
    </div>
    <section class="maincard">
      <ul class="card-wrapper">
        <li class="card" onclick="window.location.href = 'allprofiles.php?subject=Science';">
          <img class="displayed2" src="images/science.png">
          <h3>Science</h3>
        </li>
        <li class="card" onclick="window.location.href = 'allprofiles.php?subject=Maths';">
          <img class="displayed2" src="images/maths.png">
          <h3>Maths</h3>
        </li>
        <li class="card"onclick="window.location.href = 'allprofiles.php?subject=Personal';">
          <IMG class="displayed2" src="images/personal.png">
          <h3>Personal</h3>
        </li>
        <li class="card"onclick="window.location.href = 'allprofiles.php?subject=Common';">
          <IMG class="displayed2" src="images/common.png">
          <h3>Common</h3>
          </li>
        </ul>

    </section>

    <section class="maincard2">
      <ul class="card-wrapper2">
        <li class="card"onclick="window.location.href = 'courses.php';">
        <IMG class="displayed2" src="images/Courses.png">
        <h3>Courses</h3>
        </li>
       <li class="card"onclick="window.location.href = 'ebookmaterial.php';">
        <IMG class="displayed2" src="images/Ebooks.png">
        <h3>E-books</h3>
        </li>
        <li class="card"onclick="window.location.href = 'blog.php';">
        <IMG class="displayed2" src="images/Blogs.png">
        <h3>Blogs</h3>
        </li>
      </ul>
    </section>
    <section class="maincard3">
      <ul class="card-wrapper3">
        <li class="card_line3" onclick="window.location.href = 'schemesforstud.php'">
        <IMG class="displayed2" src="images/Schemestudent.png">
        <h3>Schemes for students</h3>
        </li>
        <li class="card_line3" onclick="window.location.href = 'schemesforteachers.php'">
        <IMG class="displayed2" src="images/Schemestudent.png">
        <h3>Schemes for teachers</h3>
        </li>
        <!-- <li class="card_line3">
        <IMG class="displayed2" src="images/perksbyus.png">
        <h3>Perks by us</h3>

        </li> -->
      </ul>
    </section>
    
<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <a href="mentorregistration1.php" class="button1 ribbon-outset border">Online</a>
  <a href="mentorregistration1.php" class="button1 ribbon-outset border">Offline</a>
  <a href="mentorregistration1.php" class="button1 ribbon-outset border">Both</a>
</div>

</div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   
    </div>
  </div>
</div>

<?php include 'partials/_footer.php'?>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 </body>
</html>