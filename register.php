<?php
//Database Connection
$conn = new mysqli('localhost','root','','loginpage');
$username =$_POST['username'];
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];

if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into students(username,password,cpassword) value(?,?,?)");
    $stmt->bind_param("sss", $username,$password,$cpassword);
    $result = $stmt->execute();
    if($result){
        echo"Successfully Registered";
    }
    else{
        echo"Error";
    }
    $stmt->close();
    $conn->close();
}
    
?>

<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-182x182.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>studentlogin</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
</head>
<body>
  <section data-bs-version="5.1" class="menu cid-sLm7MJLXOb" once="menu" id="menu1-5a">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/mbr-182x182.png" alt="kleit" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white text-primary display-7" href="index.html">Home</a></li><li class="nav-item"><a class="nav-link link text-white display-7" href="contactus.html">Contact us</a></li><li class="nav-item"><a class="nav-link link text-white display-7" href="about.html">About</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-white display-7" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Departments</a><div class="dropdown-menu" aria-labelledby="dropdown-undefined"><div class="dropdown"><a class="dropdown-item dropdown-toggle text-white display-7" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Under Graduate Programmes</a><div class="dropdown-menu dropdown-submenu" aria-labelledby="dropdown-undefined"><a class="dropdown-item text-white display-7" href="E&C.html" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Electronics &amp; Communications <br>Engineering</a><a class="dropdown-item text-white display-7" href="Mechanical-engineering.html" data-bs-auto-close="outside" aria-expanded="false">Mechanical Engineering</a><a class="dropdown-item text-white display-7" href="ComputerScience-engineering.html" data-bs-auto-close="outside" aria-expanded="false">Computer Science &amp; Engineering</a><a class="dropdown-item text-white display-7" href="Electrical-Electronics-Engineering.html" data-bs-auto-close="outside" aria-expanded="false">Electrical &amp; Electronics Engineering</a><a class="dropdown-item text-white display-7" href="Civil-Engineering.html" data-bs-auto-close="outside" aria-expanded="false">Civil Engineering</a></div></div><div class="dropdown"><a class="dropdown-item dropdown-toggle text-white display-7" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Post Graduate Programmes</a><div class="dropdown-menu dropdown-submenu" aria-labelledby="dropdown-undefined"><a class="dropdown-item text-white display-7" href="MCA.html">Master of Computer Applications</a></div></div><div class="dropdown"><a class="dropdown-item dropdown-toggle text-white display-7" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Basic Science</a><div class="dropdown-menu dropdown-submenu" aria-labelledby="dropdown-undefined"><a class="dropdown-item text-white display-7" href="chemistry.html">Chemistry Department</a><a class="dropdown-item text-white display-7" href="maths.html">Mathematics Department</a><a class="dropdown-item text-white display-7" href="physics.html">Physics Department</a></div></div></div></li>
                    <li class="nav-item"><a class="nav-link link text-white text-primary display-7" href="adminlogin.html">Admin Login</a></li><li class="nav-item"><a class="nav-link link text-white text-primary display-7" href="studentlogin.html">Student Login</a></li></ul>
                      
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="form6 cid-t0433KCSIp" id="form6-5k">
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5"><strong>Student Registration</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="register.php" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="fUPjPa6BOLSAGeRkVbwqEL5Xj1dLiGOaP3gdsahgqLZdPxeAT/TFompZ544AwbizhvIfj3HmNXievX+yYwKf23AvoP0UbncUDoCLa73sFQ8dpsKY3yW6+1nJRGWT6tX9">
                                     
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="username">
                            <input type="text" name="username" placeholder="Username" data-form-field="username" class="form-control" value="" id="name-form6-5k" required>
                        </div>
                        <div data-for="password" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input type="password" name="password" placeholder="Password" data-form-field="password" class="form-control" value="" id="password-form6-5k" required>
                        </div>
                        <div data-for="cpassword" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input type="cpassword" name="cpassword" placeholder="Confirm Password" data-form-field="password" class="form-control" value="" id="password-form6-5k" required>
                        </div>
                        <div class="col-auto mbr-section-btn align-center">
                            <button type="submit" class="btn btn-primary display-4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer1 cid-sLm7MLgckc" once="footers" id="footer1-5b">

    <div class="container">
        <div class="row mbr-white">
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Menu</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">KLE Society
</li><li class="mbr-text item-wrap">Chairman
</li><li class="mbr-text item-wrap">Principal</li><li class="mbr-text item-wrap">Contact Us</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Programmes</strong></h5>
                <ul class="list mbr-fonts-style display-4">

                    <li class="mbr-text item-wrap">Civil Engineering
</li><li class="mbr-text item-wrap">Computer Science &amp; Engineering
</li><li class="mbr-text item-wrap">Electrical &amp; Electronics Engineering
</li><li class="mbr-text item-wrap">Electronics &amp; Communication Engineering
</li><li class="mbr-text item-wrap">Mechanical Engineering
</li><li class="mbr-text item-wrap">Master of Computer Applications</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Links</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">IGS – Indian Geotechnical Society
</li><li class="mbr-text item-wrap">NIRF
</li><li class="mbr-text item-wrap">Youth Red Cross Wing</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Legal</strong></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">Mandatory Disclosure
<br>Privacy Policy
<br>Terms &amp; Conditions</p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                    <strong>Social</strong>
                </h5>
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="https://www.facebook.com/kleithbl/" target="_blank">
                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://twitter.com/admin_kleit" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.instagram.com/kleit_official" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><section ><a href="https://mobirise.site/h"></a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/parallax/jarallax.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/playervimeo/vimeo_player.js"></script>  <script src="assets/theme/js/script.js"></script>  

 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>