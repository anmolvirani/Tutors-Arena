<?php

include 'partials/_dbconnect.php';

        $subject = $_GET['subject'];
        $sql = "SELECT * FROM mentorlist WHERE subject='$subject'";
        
        $result = mysqli_query($conn,$sql);

        $num = mysqli_num_rows($result);

        $var1 = "maincard2";
        $var2 = "maincard";
        $var3 = "maincard3";

        

?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="allprofile.css"> -->
    <title></title>
  </head>

  <style>



    .maincard2 {
  position: absolute;
  top: 30%;
  left: 18%;
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
  /* width: 115ch; */
  height: 36ch;
  padding-top: 1rem;
  padding-left: 1rem;
  padding-right: 5rem;
  /* padding-bottom: 1rem; */
}

.maincard{
  position: absolute;
  top: 80%;
  left: 18%;
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

.card-wrapper {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
  grid-gap: 2rem;
  max-width: 200vw;
  /* width: 115ch; */
  height: 36ch;
  padding-top: 1rem;
  padding-left: 1rem;
  padding-right: 5rem;
  /* padding-bottom: 1rem; */
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

  .header{
    width: 100%;
    background-color: black;

  }

  .card {
    /* --card-gradient: #ADA5A5; */
    /* --card-gradient: #ADA5A5,#ADA5A5; */

    --card-blend-mode: overlay;

    align-content: center;
    align-items: center;
    text-align:center;

    background-color: #707070;
    border-radius: 0.5rem;
    box-shadow: 0.05rem 0.1rem 0.3rem -0.03rem rgba(0, 0, 0, 0.45);
    padding-bottom: 1rem;
    background-image: linear-gradient(
      var(--card-gradient),
      white max(9.5rem, 27vh)
    );
    overflow: hidden;
    height:38ch;
    width:9cm;
  }

  .contain{
      position: absolute;
      top: 2%;
      height:3%;
      background-color: black;
  }



  .inlineblock{


    border: 5px solid #707070;
    margin: auto;
    top: 5%;
    border-radius: 10%;
    height: 25%;
    /* width: 36ch; */
    background-color: #ADA5A5;
  }

  .inlineblock2{

    position: absolute;
    border: 6px solid #707070;
    top: 47%;
    border-radius: 10%;
    margin: auto;
    height: 50%;
    width: 36ch;
    background-color: #ADA5A5;
  }

  .maincard3{
    position: absolute;
    top: 150%;
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
  .card-wrapper3 {
    /* list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
    grid-gap: 2rem;
    max-width: 200vw;
    width: 140ch;
    height: 36ch;
    padding-top: 1rem;
    padding-left: 1rem;
    padding-right: 5rem; */
    /* padding-bottom: 1rem; */

    list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
  grid-gap: 2rem;
  max-width: 200vw;
  width: 115ch;
  height: 36ch;
  padding-top: 1rem;
  padding-left: 1rem;
  padding-right: 5rem;
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

  .leftbox{
    position: absolute;
    left: 6%;
    top: 35%;
    border-radius: 2%;
    height: 70%;
    width: 10%;
    background-color: #707070;
  }

  /* .dotbox{
    position: absolute; */
    /* border: 30px solid #707070; */
    /* top: 20%;
    left: 33%;
    border-radius: 50%;
    margin: auto;
    background-color: white;
    height: 20%;
    width: 5.4%;
  } */

  /* .dotbox2{
    position: absolute;
    /* border: 30px solid #707070; */
    /*top: 20%;
    left: 56%;
    border-radius: 50%;
    margin: auto;
    background-color: white;
    height: 20%;
    width: 5.4%; */
  /* }

  .dotbox3{
    position: absolute; */
    /* border: 30px solid #707070; */
    /* top: 20%;
    left: 79%;
    border-radius: 50%;
    margin: auto;
    background-color: white;
    height: 20%;
    width: 5.4%;
  } */

  </style>
  <body>
    <!-- <section class="leftbox">
      <input type="checkbox" unchecked="checked">Mode<br>
      <input type="checkbox" checked="checked">Online<br>
      <input type="checkbox" checked="checked">Offline<br>
      <input type="checkbox" unchecked="checked">Type<br>
      <input type="checkbox" checked="checked">Common<br>
      <input type="checkbox" checked="checked">Private<br>
      <input type="checkbox" unchecked="checked">Board<br>
      <input type="checkbox" checked="checked">State Board<br>
      <input type="checkbox" checked="checked">CBSE<br>
      <input type="checkbox" checked="checked">ICSE<br>
      <input type="checkbox" unchecked="checked">Subjects<br>
      <input type="checkbox" checked="checked">Science<br>
      <input type="checkbox" checked="checked">Maths<br>
      <input type="checkbox" unchecked="checked">Fee Structure<br>
      <input type="checkbox" checked="checked">High to low<br>
      <input type="checkbox" checked="checked">Low to high<br>
      <input type="checkbox" checked="checked">0-500<br>
      <input type="checkbox" checked="checked">500-1000<br>
      <input type="checkbox" unchecked="checked">Education<br>
      <input type="checkbox" checked="checked">1-10<br>
      <input type="checkbox" checked="checked">Higher Studies<br>
      <input type="checkbox" checked="checked">Engineering<br>
    </section> -->
    <section class="header" style="height: 5%;">
      

              
        <?php include 'partials/_nav.php' ?>
        <?php
          if($num<=3)
          {
           echo '<section class="maincard2">
           <ul class="card-wrapper2">'; 
              for($i=1;$i<=$num;$i++)
              {
                $row = mysqli_fetch_assoc($result);
                echo '<li class="card">
                <div class="inlineblock"></div>
                <div class="dotbox2"></div>
                <div class="inlineblock2"><p>Email : '.$row['Email'].'</p>
                <p>Whatsapp Number : '.$row['Whatsapp'].'</p>
                <p>Fees charged per month : '.$row['Fees'].'</p>
                <p>Experience : '.$row['Experience'].'</p></div>
    
                <h3><a href="mentorprofile.php?username='.$row['Email'].'"> '.$row['Name'].' </a></h3>
              </li>';

              }
              echo '</section>';
          }
          else if($num>3 and $num<=6)
          {
            echo '<section class="maincard2">
            <ul class="card-wrapper2">'; 
              for($i=1;$i<=3;$i++)
              {
                $row = mysqli_fetch_assoc($result);
                echo '<li class="card">
                <div class="inlineblock"></div>
                <div class="dotbox2"></div>
                <div class="inlineblock2"><p>Email : '.$row['Email'].'</p>
                <p>Whatsapp Number : '.$row['Whatsapp'].'</p>
                <p>Fees charged per month : '.$row['Fees'].'</p>
                <p>Experience : '.$row['Experience'].'</p>
                 
                </div>
    
                <h3><a href="mentorprofile.php?username='.$row['Email'].'">'.$row['Name'].'</a></h3>
              </li>';

              }
              echo '</section>';
              echo '<section class="maincard">
              <ul class="card-wrapper">';
                
              for($i=4;$i<=$num;$i++)
              {
                $row = mysqli_fetch_assoc($result);
                echo '<li class="card">
                <div class="inlineblock"></div>
                <div class="dotbox2"></div>
                <div class="inlineblock2"><p>Email : '.$row['Email'].'</p>
                <p>Whatsapp Number : '.$row['Whatsapp'].'</p>
                <p>Fees charged per month : '.$row['Fees'].'</p>
                <p>Experience : '.$row['Experience'].'</p>
                </div>
    
                <h3><a href="mentorprofile.php?username='.$row['Email'].'">'.$row['Name'].'</a></h3>
              </li>';
              }
              echo '</ul>
              </section>';
          }
          // else if($num>6 and $num<=9)
          // {
          //   echo '<section class="maincard2">
          //   <ul class="card-wrapper2">'; 
          //     for($i=1;$i<=3;$i++)
          //     {
          //       $row = mysqli_fetch_assoc($result);
          //       echo '<li class="card">
          //       <div class="inlineblock"></div>
          //       <div class="dotbox2"></div>
          //       <div class="inlineblock2"><p>Email : '.$row['Email'].'</p>
          //       <p>Whatsapp Number : '.$row['Whatsapp'].'</p>
          //       <p>Fees charged per month : '.$row['Fees'].'</p>
          //       <p>Experience : '.$row['Experience'].'</p>
                 
          //       </div>
    
          //       <h3><a href="mentorprofile.php?username='.$row['Email'].'">'.$row['Name'].'</a></h3>
          //     </li>';

          //     }
          //     echo '</section>';
          //     echo '<section class="maincard">
          //     <ul class="card-wrapper">';
                
          //     for($i=4;$i<=6;$i++)
          //     {
          //       $row = mysqli_fetch_assoc($result);
          //       echo '<li class="card">
          //       <div class="inlineblock"></div>
          //       <div class="dotbox2"></div>
          //       <div class="inlineblock2"><p>Email : '.$row['Email'].'</p>
          //       <p>Whatsapp Number : '.$row['Whatsapp'].'</p>
          //       <p>Fees charged per month : '.$row['Fees'].'</p>
          //       <p>Experience : '.$row['Experience'].'</p>
          //       </div>
    
          //       <h3><a href="mentorprofile.php?username='.$row['Email'].'">'.$row['Name'].'</a></h3>
          //     </li>';
          //     }
          //     echo '</ul>
          //     </section>';
          //     echo '<section class="maincard3">
          //     <ul class="card-wrapper3">';

          //     for($i=7;$i<=9;$i++)
          //     {
          //         $row = mysqli_fetch_assoc($result);
          //         echo '<li class="card">
          //         <div class="inlineblock"></div>
          //         <div class="dotbox2"></div>
          //         <div class="inlineblock2"><p>Email : '.$row['Email'].'</p>
          //         <p>Whatsapp Number : '.$row['Whatsapp'].'</p>
          //         <p>Fees charged per month : '.$row['Fees'].'</p>
          //         <p>Experience : '.$row['Experience'].'</p>
          //         </div>
      
          //         <h3><a href="mentorprofile.php?username='.$row['Email'].'">'.$row['Name'].'</a></h3>
          //       </li>';
          //     }

          //     echo '</ul>
          //     </section>';

          // }
        ?>
        


      
      
            
          

      

      <!-- <section class="maincard3">
        <ul class="card-wrapper3">
          <a href=""><li class="card">
            <div class="inlineblock"></div>
            <div class="dotbox2"></div>
            <div class="inlineblock2"></div>

            <h3><a href="">Mohit</a></h3>
          </li>
          <li class="card">
            <div class="inlineblock"></div>
            <div class="dotbox2"></div>
            <div class="inlineblock2"></div>

            <h3><a href="">Mohit</a></h3>
          </li>
          <li class="card">
            <div class="inlineblock"></div>
            <div class="dotbox2"></div>
            <div class="inlineblock2"></div>

            <h3><a href="">Mohit</a></h3>
            </li>
          </ul>

      </section> -->


  </body>
  <footer>
    <div class="footer2">
            
    </div>

  </footer>

  </html>
