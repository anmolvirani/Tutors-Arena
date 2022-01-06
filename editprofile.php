<?php

    session_start();

    include 'partials/_dbconnect.php';

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM mentorlist WHERE Email='$username'";

    $result = mysqli_query($conn,$sql);
    
    $num = mysqli_num_rows($result);

    $row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>
<?php
$showError = false;
$showAlert = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $whatsapp = $_POST['num'];
    $fees = $_POST['fes'];
    $experience = $_POST['exp'];
    $period = $_POST['period'];
    $standard = $_POST['stan'];
    $mentpass = $_POST['mentpass'];
    $mentrepass = $_POST['mentrepass'];
    $subject = $_POST['subject'];

    // $old_image = $_POST['stud_image_old'];

    // $new_image = $_FILES['File']['name'];

    // if($new_image!=' ')
    // {
    //   $updated_filename =$_FILES['File']['name'];

    // }
    // else
    // {
    //     $updated_filename = $old_image;
    // }

    // if(file_exists("Profileimages/" . $_FILES['File']['name']))
    // {
    //     $filename = $_FILES['File']['name'];
    //     $_SESSION['status'] = "Image already exists ".$filename;
    //     header('Location: editprofile.php');
    // }

     


    //Create a connection
    

    //Die if connection was not succesfull
    

    
      //Submit these to database
      //sql query to be executed
      $sql2 = "UPDATE mentorlist SET Name='$name',Email='$email',Whatsapp='$whatsapp',Fees='$fees',Experience='$experience',Period='$period',Standard='$standard',Mentpass='$mentpass',Mentrepasss='$mentrepass',subject='$subject' WHERE `mentorlist`.`Name`='$name'";
      $result2 = mysqli_query($conn,$sql2);


      

      // add a new entry to the table mentorlist in database dbmentors
      if ($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong><br>
        Your data has been updated successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';      
                  }
      else{

          echo "the record has not been updated succesfully because of this error--->". mysqli_error($conn);
      }
    }


?>
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
  </head>
  <style>
    * {
   margin: 0;
   padding: 0%;
}

.section1{
  width: 80%;
  position: absolute;
  top: 25%;
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
    color: white;
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

  .header{
    background-color: black;

  }
  
  </style>
  <body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="images/z.png" style="height: 50px; width: 40px;"></a>
            <div class="nav-links">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Contact</a></li>
              </ul>

            </div>
        </nav>
        </section>

      
 <section>
<?php
 echo '<form action = "/Tutors Arena/editprofile.php" method = "post" class="anmol" enctype="multipart/form-data">
<section class="section1">
  <form action="\Tutors Arena\mentorregistration1.php" method="post">
    <div class="row g-1">
      <div class="col-md-5 ">
        <label for="uname">First name</label>
        <input type="text" class="form-control" placeholder="First name" name="uname" value="'.$row['Name'].'">
      </div>

      
    </div>

    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="'.$row['Email'].'">
      </div>
      <div class="form-group col-md-5">
        <label for="num">Whatsapp Number</label>
        <input type="number" class="form-control" id="num" placeholder="Number" name="num" value="'.$row['Whatsapp'].'">
      </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-5">
      <label for="fes">Fees you want to charge</label>
      <input type="number" class="form-control" id="fes" placeholder="Fees" name="fes" value="'.$row['Fees'].'">
    </div>
    <div class="form-group col-md-5">
      <label for="period">Set your enquiry period</label>
      <input type="datetime" class="form-control" id="period" name="period" value="'.$row['Period'].'">
    </div>
  </div>
        
  <br>
    <label for = "subject"><h1>Subject you teach</h1></label><br>
				<select type="subject" id="subject" name="subject" value="'.$row['subject'].'">
        <option value="Science">Science</option>
        <option value="Maths">Maths</option>
        <option value="Personal">Personal</option>
        <option value="Common">Common</option>

        </select>
    <br><br>

    <div class="form-row">
      <div class="form-group col-md-5">
        <label for="exp">Write about your experience in teaching</label>
        <input type="text" class="form-control" id="exp" placeholder="Experience" name="exp" value="'.$row['Experience'].'">
      </div>
      <div class="form-group col-md-5">
        <label for="stan">Standards you teach</label>
        <input type="number" class="form-control" id="stan" placeholder="Standards" name="stan" value="'.$row['Standard'].'">
      </div>
    </div>


     
    <div class="form-group col-md-5">
      <label for="mentpass">Password</label>
      <input type="password" id="mentpass" class="form-control" name = "mentpass" value="'.$row['Mentpass'].'">
      
    </div>
    <div class="form-group col-md-5">
      <label for="mentrepasss">Reconfirm Password</label>
      <input type="password" id="mentrepasss" class="form-control" name = "mentrepasss" value="'.$row['Mentrepasss'].'">

    </div>

<div class="entry4">
    <label for = "mentpass">Password</label><br>
		<input type="text" placeholder="Enter Password" name="mentpass" id ="mentpass" value="'.$row['Mentpass'].'"><br><br>
	<label for = "mentrepass">Reconfirm Password</label><br>
		<input type="text" placeholder="Enter Password" name="mentrepass" id = "mentrepass" value="'.$row['Mentrepasss'].'"><br><br>
</div>

 
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>';
?>

 </section> 
  
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     

  </body>
</html>