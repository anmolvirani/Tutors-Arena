<?php
$showError = false;
$showAlert = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $name = $_POST['uname'];
    
    $email = $_POST['email'];
    $whatsapp = $_POST['num'];
    $fees = $_POST['fes'];
    $period = $_POST['period'];
    $subject = $_POST['subject'];
    $experience = $_POST['exp'];
    $standard = $_POST['stan'];
    $password = $_POST['mentpass'];
    $repassword = $_POST['mentrepasss'];
    


     

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
        $pname = $_FILES["File"]["name"];
    $tname = $_FILES["File"]["tmp_name"];

    $uploads_dir = 'Profileimages';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

     
      $sql = "INSERT INTO `mentorlist` ( `Name`, `Email`, `Image`, `Whatsapp`, `Fees`, `Experience`, `Period`, `Standard`, `Mentpass`, `Mentrepasss`, `subject`) VALUES ('$name', '$email','$pname' , '$whatsapp', '$fees', '$experience', '$period', '$standard', '$password', '$repassword','$subject');";
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


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="mentorregistration1.css">
    
    <title>Mentor Registration</title>
  </head>
  <style>

.section1{
  width: 80%;
  position: absolute;
  top: 20%;
  left: 15%;
}
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 90%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 80%;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

</style>
  <body>
    <?php
    include 'partials/_nav.php';
    ?>

<section class="section1">

  <form action="\Tutors Arena\mentorregistration1.php" method="post" enctype="multipart/form-data">
    <div class="row g-1">
      <div class="col-md-5 ">
        <label for="uname">First name</label>
        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="uname">
      </div>
      
      <div class="col-md-5">
      <label for="formFile" class="form-label">Profile photo Upload</label>
        <input class="form-control" type="File" name="File" id="formFile">
        
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
      </div>
      <div class="form-group col-md-5">
        <label for="num">Whatsapp Number</label>
        <input type="tel" class="form-control" id="num" placeholder="Number" name="num" maxlength='10'>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="fes">Fees you want to charge</label>
        <input type="number" class="form-control" id="fes" placeholder="Fees" name="fes">
      </div>
      <div class="form-group col-md-5">
        <label for="period">Set your enquiry period</label>
        <input type="datetime" class="form-control" id="period" name="period">
      </div>
    </div>
    <br>
    <label for = "subject"><h1>Subject you teach</h1></label><br>
				<select type="subject" id="subject" name="subject">
        <option value="Science">Science</option>
        <option value="Maths">Maths</option>
        <option value="Personal">Personal</option>
        <option value="Common">Common</option>

        </select>
    <br><br>
    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="exp">Write about your experience in teaching</label>
        <input type="text" class="form-control" id="exp" placeholder="Experience" name="exp">
      </div>
      <div class="form-group col-md-5">
        <label for="stan">Standards you teach</label>
        <input type="number" class="form-control" id="stan" placeholder="Standards" name="stan">
      </div>
    </div>
    
    <div class="form-group col-md-5">
      <label for="mentpass">Password</label>
      <input type="password" id="mentpass" class="form-control" name = "mentpass">
      
    </div>
    <div class="form-group col-md-5">
      <label for="mentrepasss">Reconfirm Password</label>
      <input type="password" id="mentrepasss" class="form-control" name = "mentrepasss">

    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</section>
  
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>

<!-- education board 
teaching mode -->