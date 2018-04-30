<?php
//similar to checkout page but for signup form 

//dbconn.php has function to create connection
include 'dbConnect.php';
$con = connect_to_db("CAL");
include 'login.php'; 
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
    <link rel="stylesheet" href="Login.css">

</head>
<body id="body" onload="showSlides()">

  <script src="Home.js" type="text/javascript"></script>

  <!-- Login HTML -->
  <script type="text/javascript">

  //validate password, contains 8 or more letters and at least one number
  var valPassword = function(password) {
      var n = /^(?=.*\d)[A-Za-z\d]{8,}$/;
      if (n.test(String(document.forms["myForm"]["password"].value))) {
          return true;
      }
      else {
          alert("Invalid Password");
          return false;
      }
  };

  //validate email
  var valEmail = function() {
      var em = /^([\w-\.]+@(?!students.claremontmckenna.edu)(?!cmc.edu)([\w-]+\.)+[\w-]{2,4})?$/;
      if (em.test(String(document.forms["myForm"]["email"].value))) {
          return true;
      }
      else {
          alert("Invalid Email");
          return false;
      }
  };

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
?>
 </script>
  <!-- login -->
  <div id="mod1" class="modal">
    <form class="modal-content animate" onsubmit="return (valPassword() && valEmail()">
      <div class="imgcontainer">
        <span onclick="document.getElementById('mod1').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="Pics/advocateLogo.jpg" id="logoPic" class="avatar"> 
      </div>
      <div class="container">
        <b>Email</b><br>
        <input type="text" placeholder="Enter Email" name="email" value="" required><br>
        <b>Password</b><br>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit" name="Login">Login</button>
      </div>
    </form>
  </div>

  <!-- sign up --> 
  <div id="mod2" class="modal">
    <form class="modal-content animate" method="post" onsubmit="return (valPassword() && valEmail())">
      <div class="imgcontainer">
        <span onclick="document.getElementById('mod2').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="Pics/advocateLogo.jpg" id="logoPic" class="avatar"> 
      </div>
      <div class="container">
        <b>Full Name</b><br>
        <input type="text" placeholder="Enter Full Name" name="name" value="" required><br>
        <b>Email</b><br>
        <input type="text" placeholder="Enter Email" name="email" value="" required><br>
        <b>Password</b><br>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit" name="Signup">Signup</button>
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
    <button class="button" onclick="document.getElementById('mod1').style.display='block'" style="width:auto;">Login</button>
    <button class="button" onclick="document.getElementById('mod2').style.display='block'" style="width:auto;">Signup</button>
    
  
    <div class="topnav">
      <a class="active" href="Home.html">Home</a>
      <a href="AboutUs.html">About Us</a>
      <a href="UpcomingEvents.html">Upcoming Events</a>
      <a href="BookAnAdvocate.html">Book an Advocate</a>
      <a href="MeetTheTeam.html">Meet the Team</a>
      <a href="Resources.html">Emergency Resources</a> 
      <a href="ContactUs.html">Contact Us</a>
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