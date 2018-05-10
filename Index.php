<?php
//similar to checkout page but for signup form 

//dbconn.php has function to create connection
include 'dbConnect.php';
$con = connect_to_db("CAL");
include 'Signup.php'; 
session_start(); 
?>

<!DOCTYPE HTML>
<html>

<head>
    <!--Title-->
    <title>Home Page</title>

    <!--Meta Tags which give information about the site but do not display-->
    <meta name="description" content="Advocates Website">
    <meta name="keywords" content="HTML, CSS, Javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link to stylesheet (External Style Sheet)-->
    <link rel="stylesheet" href="General.css">
    <link rel="stylesheet" href="Modal.css">

</head>
<body id="body" onload="showSlides()">

  <script src="Home.js" type="text/javascript">

 <?php
 if (isset($_POST["Signup"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bio = "Not Available.";
    $image = "Pics/blankProfPic.png";

    mysqli_stmt_execute($insertUser); 
    print_r($con->error);
    $id = mysqli_stmt_insert_id($insertUser);  
    echo "Welcome, Your new ID is $id <br>";
 }


if (isset($_POST["Login"])) {
  $lemail = $_POST['lemail'];
  $lpassword = $_POST['lpassword'];

  $query = "SELECT id FROM advocateInformation WHERE email = '$lemail' AND password = '$lpassword'";

  $result = perform_query($con, $query);

  $rows = mysqli_num_rows($result);

  $_SESSION['advocate'] = FALSE;

  if(mysqli_num_rows($result) == 1) {
    $_SESSION['advocate'] = TRUE;

  } else {
    $_SESSION['advocate'] = FALSE;
    echo "Unable to Login";
  }
  if($_SESSION['advocate']) {
    echo "Welcome! You are now logged in";
  } 
}
?>

/*
var loggedOut() = function() { 
  <?php
    //$_SESSION['advocate'] = FALSE;
    //session_destroy();
    //echo "Logged out";
  ?>
}
*/
</script>

  <!-- login -->
  <div id="mod1" class="modal">
    <form class="modal-content animate" action="Index.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('mod1').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="Pics/advocateLogo.jpg" id="logoPic" class="avatar"> 
      </div>
      <div class="container">
        <b>Email</b><br>
        <input type="text" placeholder="Enter Email" name="lemail" value="" required><br>
        <b>Password</b><br>
        <input type="password" placeholder="Enter Password" name="lpassword" required>
        <button id="loginbutton" type="submit" name="Login">Login</button>
      </div>
    </form>
  </div>
<!-- sign up --> 
  <div id="mod2" class="modal">
    <form class="modal-content animate" action="Index.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('mod2').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="Pics/advocateLogo.jpg" id="logoPic" class="avatar"> 
      </div>
      <div class="container">
        <b>Full Name</b><br>
        <input type="text" placeholder="Enter Full Name" name="name" value="" required><br>
        <b>Email</b><br>
        <input type="text" placeholder="Enter Email" name="email" value="" pattern="[A-Za-z0-9._%+-]+@(cmc.edu|students.claremontmckenna.edu)$" title="Must contain a valid CMC email" required><br>
        <b>Password</b><br>
        <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <button id="signupbutton" type="submit" name="Signup">Signup</button>
      </div>
    </form>
  </div>

  <script>
// Get the modal
var modal1 = document.getElementById('mod1');
var modal2 = document.getElementById('mod2');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2) {
        modal1.style.display = "none";
        modal2.style.display = "none";
    }
}
</script>

  <header>
    <img src="Pics/advocateLogo.jpg" id="logoPic"> 
    <!-- login and signup buttons -->
    <button id="lbutton" class="button" 
            onclick="document.getElementById('mod1').style.display='block'" style="width:auto; 
          <?php if ($_SESSION['advocate']) {
            echo "display:none";
          } else if (!$_SESSION['advocate']) {
            echo "display:block";
          }?>;">Login</button>
    <button id="sbutton" class="button" 
            onclick="document.getElementById('mod2').style.display='block'" style="width:auto; 
          <?php if ($_SESSION['advocate']) {
              echo "display:none";
          } else if (!$_SESSION['advocate']){
              echo "display:block";
          }?>;">Signup</button>
    <!--logout button, if clicked...-->
    <button id="logout" class="button" onclick="window.location.href='Logout.php'" style="width:auto; 
        <?php if (!$_SESSION['advocate']) {
                echo "display:none";
              } else if ($_SESSION['advocate']){
                echo "display:block";
              }?>;">Log Out</button>
    
    <div class="topnav">
      <a class="active" href="Index.php">Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="calendar.php">Book an Advocate</a>
      <a href="MeetTheTeam.php">Meet the Team</a>
      <a href="Resources.php">Emergency Resources</a> 
      <?php
          if($_SESSION['advocate']) {
            echo '<a href="EditProfile.php">Edit Profile</a>';
          }
        ?> 
    </div>
  </header>
  <!--Link to stylesheet (External Style Sheet)-->
  <link rel="stylesheet" href="Home.css">
  <aside>
    <div class="slideshow-container">
    
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="Pics/carnival1.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="Pics/carnival2.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
        <img src="Pics/carnival3.jpg" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
  </aside>

  <article>
    <!--Introductory paragraph about Advocates-->
    <p id="IntroductoryPara"> 
      We provide confidential support to survivors of any type of sexual violence, in any way needed including counseling, support groups, and reporting.We provide confidential support to survivors of any type of sexual violence, in any way needed including counseling, support groups, and reporting.We provide confidential support to survivors of any type of sexual violence, in any way needed including counseling, support groups, and reporting.We provide confidential support to survivors of any type of sexual violence, in any way needed including counseling, support groups, and reporting.
    </p>
  </article>

  <div class="footer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" src="https://www.facebook.com/CMCadvocates/">
    <footer>
        <a href="https://www.facebook.com/CMCadvocates/" class="fa fa-facebook"></a>
        <p> Email:
          <a href="cmcadvocates@gmail.com"> cmcadvocates@gmail.com</a></p>
          <p>Phone Number: (909)377-2400</p>
    </footer>
  </div>

</body>

</html>
