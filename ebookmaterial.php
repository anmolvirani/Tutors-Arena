<?php
            include 'partials/_dbconnect.php';

            $sql1 = "SELECT * FROM fileup WHERE subject='Science'";
            $sql2 = "SELECT * FROM fileup WHERE subject='Maths'";

            $result1 = mysqli_query($conn,$sql1);
            $result2 = mysqli_query($conn,$sql2);

            $num1 = mysqli_num_rows($result1);
            $num2 = mysqli_num_rows($result2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>E-books</title>
    <style>
    .dropbtn {
  background-color: darkgrey;
  width: 70%;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  /* cursor: pointer; */
}

.dropdown {
  position:absolute;
  width: 100%;
  /* display: inline-block; */
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  width: 70%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: white;
  display: block;
}

.dropdown-content a:hover {background-color: grey}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: lightblue;


}
.drop1{
width: 100%;
    position:absolute;
    top: 30%;
    left: 5%;
    /* right: 10%; */
}    
.drop2{
width: 100%;
    position:absolute;
    top: 50%;
    left: 5%;
    /* right: 10%; */
}
    </style>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <?php
    include 'partials/_nav.php'?>

<section class="drop1">
    <div class="dropdown">
        <button class="dropbtn">Science</button>
        <div class="dropdown-content">
            <?php
                $no = 1;
                while($row = mysqli_fetch_assoc($result1))
               
                { ?>
                     <a href="Science/<?php echo $row['image'] ?>">Ebook <?php echo $no ?></a>
                     <?php
                    $no++;
                }
            ?>
            
            
        </div>
    </div>
</section>

<section class="drop2">
    <div class="dropdown">
        <button class="dropbtn">Maths</button>
        <div class="dropdown-content">
        <?php
                $no2 = 1;
                while($row = mysqli_fetch_assoc($result2))
               
                { ?>
                     <a href="Maths/<?php echo $row['image'] ?>">Ebook <?php echo $no2 ?></a>
                     <?php
                    $no2++;
                }
            ?>
        </div>
    </div>
</section>
    <!-- <div class="dropdown">
  <button class="dropbtn">Maths</button>
  <div class="dropdown-content">
  <a href="#">Ebook 1</a>
  <a href="#">Ebook 2</a>
  <a href="#">Ebook 3</a>
  </div>
</div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>