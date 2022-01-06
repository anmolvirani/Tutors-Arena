<?php

session_start();

include 'partials/_dbconnect.php';

$email = $_SESSION['username'];

$sql = "SELECT * FROM `mentorlist` WHERE `Email`='$email'";





$result = mysqli_query($conn,$sql);

// $num=mysqli_num_rows($result);

// Display the row returned by the query
// $no = 1;

// for($i=1;$i<=$num;$i++)
// {
    $row = mysqli_fetch_assoc($result);

    

    // $no = $no+1;
// }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="yourprofile.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Your Profile</title>
  </head>
  <style>
    
p{
  width:10cm;
  height:0.75cm;
  /* text-align:center; */
  background-color:#707070;
  
}

.image{
  position: absolute;
  z-index: 1;
  top: 37%;
  left: 10%;
}

.ri{
  width:7cm;
}

.nav-links ul li{
display: block;
}

.nav-links{
    position: absolute;
    background: #707070;

    height: 152vh;
    border-radius: 1%;
    width: 580%;
    top: -35%;
    left: -368% ;
    text-align: left;
    overflow: hidden;
    overflow-y: scroll;
}
.maincard {
    flex: 1;
    place-content: left;
    justify-items: center;
    min-width: 1ch;
    margin: 0;
    padding: 0.1rem;
    line-height: 0.5;
    font-family: -apple-system, BlinkMacSystemFont, avenir next, avenir,
      helvetica neue, helvetica, Ubuntu, roboto, noto, segoe ui, arial, sans-serif;
    color: #444;
    background-color: rgba(blue);
  }
  .card-wrapper {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(24ch, 1fr));
    grid-gap: 1.5rem;
    max-width: 200ch;
    width: 31ch;
    height: 190ch;
    padding-top: 0.5rem;
    padding-left: 2rem;
    padding-right: 2rem;
    padding-bottom: 1rem;
  }

  .card {
    /* --card-gradient: #ADA5A5; */
    /* --card-gradient: #ADA5A5,#ADA5A5; */

    --card-blend-mode: overlay;


    background-color: #ADA5A5;
    border-radius: 0.5rem;
    box-shadow: 0.05rem 0.1rem 0.3rem -0.03rem rgba(0, 0, 0, 0.45);
    padding-bottom: 1rem;
    background-image: linear-gradient(
      var(--card-gradient),
      white max(9.5rem, 27vh)
    );
    overflow: hidden;
  }

  img.displayed2 {
    display: block;
    margin-bottom: 0px;
    margin-left: auto;
    margin-right: auto;
    height: 110px;
  }

  img.displayed3 {
    display: block;
    margin-bottom: 0px;
    margin-left: auto;
    margin-right: auto;
    height: 150px;
  }

nav{
  position: absolute;
  top: 20%;
  left: 92%;
    display: flex;
    padding: 2%;
    justify-content: space-between;
    align-items: center;
}

.header{
  position: absolute;
  top: 20%;
  left: 4%;
  height: 281px;
  width: 66%;
  padding: 2%;
  background-color: #444;
}

.header2{
  width: 100%;
  background-color: white;}

  .nav2{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;

  }

.mid{
  position: absolute;
  top: 70%;
  left: 4%;
  height: 690px;
  width: 66%;
  padding: 2%;
  padding-bottom: 2%;
  background-color: #444;
}

.sectionwhole{
  position: absolute;
  left: 5%;
  height: 5%;
  width: 66%;
  padding: 2%;
  background-color: #444;
}




h2 {
  font-size: 22px;
  text-align: center;
  font-weight: 20px;
}

.maincard2 {
  position: absolute;
  top: 185%;
  left: 0%;
  flex: 1;
  place-content: center;
  justify-items: center;
  min-width: 10px;
  margin: 0;
  padding: 1rem;
  line-height: 2;
  font-family: -apple-system, BlinkMacSystemFont, avenir next, avenir,
    helvetica neue, helvetica, Ubuntu, roboto, noto, segoe ui, arial, sans-serif;
  color: #444;
  background-color: rgba(blue);
}
.card-wrapper2 {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
  grid-gap: 2rem;
  max-width: 200vw;
  width: 140ch;
  height: 30ch;
  padding-top: 1rem;
  padding-left: 1rem;
  padding-right: 5rem;
  /* padding-bottom: 1rem; */
}

footer{
  background-color: rgba(75, 71, 71, 0.548);
  position: absolute;
  height: 40%;
  width: 100%;
  top: 240%;

}
.footer2{
  margin: 5%;
  padding: 2%;
  width: 86%;
  position: absolute;
  text-align: center ;
  background: rgb(133, 128, 128);
  border-radius: 30%;
  top: -40%;
  left: 12%;
  width: 60%;
  height: 10%;
}

/* .extra{
  position: absolute;
  padding: 1%;
} */


.dot {
  position: absolute;
  top: 50%;
  left: 12%;
  height: 62%;
  width: 20%;
  background-color: rgb(255, 255, 255);
  border-radius: 50%;
  display: inline-block;}


  .backbox{
  position: absolute;
  border-radius: 1%;
  top: 17%;
  left: 2.6%;
  height: 148%;
  width: 69%;
  padding: 2%;
  background-color:#707070;
  }
.yourprofile{
  position: absolute;
  left: 40%;
  top: 5%;
  background-color: #ffffff;
  color: black;

}

.Name{
  text-align: center;
  position: relative;
top:170px;
}

  </style>



  <body>
    <section class="yourprofile">
      <h1>Your Profile</h1>
    </section>
    <section class="backbox">

    </section>
    <section class="header2" style="height: 5%;">
      <div class="nav2">
        
          <a href="home.html"><img src="images/z.png" style="height: 50px; width: 40px;"></a>
          <!-- <div class="nav-links"> -->
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="">Contact</a></li>
			      	<li><a href="logout.php">Logout</a></li>
					    <!-- <li><a href="signup.html">Sign up</a></li> -->
              </li>
            </ul>
        </div>
    </section>

    <!-- <section>
            <nav>
              <div class="nav-links" id="navLinks">
                <h2>Feeback and ratings</h2>


                  <section class="maincard">
                      <ul class="card-wrapper">
                        <li class="card">

                        </li>
                        <li class="card">

                        </li>
                        <li class="card">

                        </li>
                        <li class="card">

                        </li>
                        <li class="card">

                        </li>
                        <li class="card">
                        </li>
                        </ul>
                    </section>
               </div>
              </nav>
    </section> -->
    <div class="image">
    <img src="Profileimages/<?php echo $row['Image'] ?>" style="height:250px; width:260px; border-radius: 50%;" alt="">

</div>
    
<section class="header">





  

  

</section>

<h1 class='Name' style='
  text-align: center;
  position: relative;
  color:aliceblue;
  top:170px;'><?php echo $row['Name'] ?></h1>;


<section class="mid">

  <div class="Left" style="color:aliceblue;">
    <?php
  echo "<h3>Subject | Boards of expertise</h3>
  
  <p>".$row['subject']."</p>
  <h3>Fees you will charge</h3>
  <p>".$row['Fees']."</p>
  <h3>Whatsapp Number</h3>
  <p>".$row['Whatsapp']."</p>";
  ?>
  </div>
  <div class="Right" style="position: relative;
    color:aliceblue;
    left: 70%;
    bottom: 28%;">
    <?php
  echo "<h3>Standards you teach</h3>
  <p class='ri'>".$row['Standard']."</p>
  
  <h3>Enquiry Period</h3>
  <p class='ri'>".$row['Period']."</p>";
  ?>
  </div>


  <div class="container">
  <button type="button" class="btn btn-dark" onclick="window.location.href='editprofile.php'">Edit Profile</button>
  </div>


  <div class="container">
  <button type="button" class="btn btn-dark" onclick="window.location.href='upload.php'">Upload Ebooks</button>
  </div>



</section>
<br><br>
<div class="extra" style="position:absolute; top: 179%; left: 42%;">
  <h1>Extra Curricular by you </h1>
</div>




<section class="maincard2">
  <ul class="card-wrapper2">
    <a href="home.php"><li class="card">
      <img class="displayed3" src="images/science.png">
      <h3>Courses</h3><br></a>
    </li>
    <li class="card">
      <img class="displayed3" src="images/maths.png">
      <h3><a href="">Ebooks</a></h3>
    </li>
    <li class="card">
      <IMG class="displayed3" src="images/personal.png">
      <h3><a href="">Blogs</a></h3>
      </li>
    </ul>

</section>
<!-- <section class="footer">

</section> -->


  </body>
  <footer>
    >

  </footer>

</html>
