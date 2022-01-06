<!DOCTYPE html>
<html>
<?php
$showError = false;
$showAlert = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $IMAGE = $_POST['img1'];
    $whatsapp = $_POST['num'];
    $fees = $_POST['fes'];
    $mode = $_POST['mode'];
    $board = $_POST['board'];
    $experience = $_POST['exp'];
    $period = $_POST['period'];
    $standard = $_POST['stan'];
    $mentpass = $_POST['mentpass'];
    $mentrepass = $_POST['mentrepass'];
     

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dabatase = "dbmentors";


    //Create a connection
    $conn = mysqli_connect($servername, $username, $password,$dabatase);

    //Die if connection was not succesfull
    if(!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    else {
      //Submit these to database
      //sql query to be executed
      $sql2 = "SELECT * FROM `mentorlist` where `Name`='$name' AND `Email`='$email'";
      $result2 = mysqli_query($conn,$sql2);

      $num = mysqli_num_rows($result2);

      if($num>0)
      {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong><br>
        This account already exists
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
      else
      {
      $sql = "INSERT INTO `mentorlist` (`Name`, `Email`, `Image` , `Whatsapp`, `Fees`, `Experience`, `Period`, `Standard`, `Mentpass`, `Mentrepasss`,`Mode`,`Board`) VALUES ('$name', '$email', '$IMAGE' , '$whatsapp', '$fees', '$experience', '$period', '$standard', '$mentpass', '$mentrepass','$mode','$board')";
      $result = mysqli_query($conn, $sql);

      // add a new entry to the table mentorlist in database dbmentors
      if ($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong><br>
        Your entry has been saved succesfully.You can now login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';      
                  }
      else{

          echo "the record has not been inserted succesfully because of this error--->". mysqli_error($conn);
      }
    }
}
}
?>
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="mentorregistration.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
  </head>
  <style>
    * {
   margin: 0;
   padding: 0%;
}


.header{
    width: 100%;
    background-color: white;


  }

  nav{

    display: flex;
    border: 2px solid black;
    padding: 2% 2%;
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

  .nav-links ul li a{
    color: black;
    text-decoration: none;
    font-size: 13px;

  }

  .nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background-color: #f44336 ;
    display: block;
    /* margin: auto; */
    transition: 0.5s;

  }

  .nav-links ul li:hover::after{
    width: 100%;

  }

.header1{
    margin: 5%;
    padding: 2%;
    width: 86%;
}

.boxed{
  position: absolute;
  text-align: center;
  background: rgb(133, 128, 128);
  top: 4%;
  left: 40%;
  width: 14%;
  border-radius: 10px;
}

.entry{

    position: absolute;
    text-align: center ;
    top: 300px;
    left: 400px;

}

.entry1{

    position: absolute;
    text-align: center ;
    top: 300px;
    left: 1000px;

}

.entry2{

    position: absolute;
    text-align: center ;
    top: 900px;
    left: 400px;

}

.entry3{

    position: absolute;
    text-align: center ;
    top: 900px;
    left: 1000px;

}

.entry4{

    position: absolute;
    text-align: center ;
    left: 700px;
    top: 1100px;

}


.entry5{

    position: absolute;
    text-align: center ;
    left: 700px;
    top: 1300px;

}


.outerbox{
  position: absolute;
  height: 200%;
  width: 100%;
  background-color: #D9D9D9;
}

input {
  /* width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none; */
  background:#707070;
}

.anmol{
  margin: auto;
  width: 50%;
  /* border: 3px solid green; */
  padding: 10px;
}

/* #email{
  position: relative;
  left:50px;
}

#num
{
  position: relative;
  left:10px;
  
} */



  </style>
  <body>
    <section class="header">
        <nav>
            <a href=""><img src="images/z.png" style="height: 50px; width: 40px;"></a>
            <div class="nav-links">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Contact</a></li>
              </ul>

            </div>
        </nav>
        </section>
        <section class="outerbox">
          <section class="header1">
        <div class="boxed">
            Mentor Joining</div>
      </section>
 <section>
 <form action = "/Tutors Arena NFinal/mentorregistration.php" method = "post" class="anmol">
       <div class="entry">
        <label for="uname">Name</label><br>
        <input type="text"  id="uname"  name="uname">
        <br><br>
        
        <label for="email" id="email">Email address</label><br>
        <input type="email"  id="email" name="email">

        
      </div>
      
      <div class="entry1">
      <label for = "img1">Subject you teach</label><br>
				<select type="img1" id="img1" name="img1">
        <option value="Science">Science</option>
        <option value="Maths">Maths</option>
        <option value="Personal">Personal</option>
        <option value="Common">Common</option>

        </select>
        <br><br>
					
				<label for = "num" id="num">Whatsapp Number</label><br>
				<input type="tel"id="num" name="num" maxlength='10'>
					

      </div>


 </section>

 <section>
 
    <div class="entry2">
        <label for = "fes">Fees you want to charge</label><br>
		<input type="number"  name="fes" id = "fes" >
		<br><br>

		<label for = "exp">Write about your experience in teaching</label><br>
		<input type="text"  name="exp" id = "exp">
    <br><br>
    <label for="mode">Teaching mode</label>
    <select type="mode" id="mode" name="mode">
        <option value="online">Online</option>
        <option value="offline">Offline</option>
        
</select>

		<br><br>
</div>
<div class="entry3">
    <label for ="period">Set your inquiry period</label><br>
    <input type="datetime"placeholder="Enter date" name="period" id = "period">
    <br><br>
    <label for = "stan">Standards you teach</label><br>
    <input type="number"placeholder="Standards you teach" name="stan" id ="stan">
    <br><br>
    <label for="board">Boards you teach</label>
    <select type="board" id="board" name="board">
        <option value="StateBoard">State Board</option>
        <option value="ICSE">ICSE</option>
        <option value="CBSE">CBSE</option>
</select>

    <br><br>

</div>

<div class="entry4">
    <label for = "mentpass">Password</label><br>
		<input type="text" placeholder="Enter Password" name="mentpass" id ="mentpass"><br><br>
	<label for = "mentrepass">Reconfirm Password</label><br>
		<input type="text" placeholder="Enter Password" name="mentrepass" id = "mentrepass"><br><br>
</div>

<div class="entry5">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

 </section> 
  
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     

  </body>
</html>
