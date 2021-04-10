<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/all.min.css">
    <link rel="stylesheet" href="./styles/headerandfooter.css">
    <link rel="stylesheet" href="scripts/aos-master/dist/aos.css">
    <link rel="stylesheet" href="styles/workshops.contact.css">
    </head>

<body class="text-capitalize" style="background-color: #101d3d;">


  <!-- start the head of page -->
  <section class=" mb-5">
    <button id="btnUp" class="rounded-circle  p-2 text-white change" style="background-color: #e8465a;">
      <i class="fa fa-chevron-up"></i>
    </button>
    <header>
      <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <a href="#" class="navbar-brand"><img src="images/logo3.png" class="ieee-logo" alt="innovation day" class="logo"
            width="180px;"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links-->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
          <div class="navbar-nav ml-auto">
            <a href="index.html" class="nav-item nav-link" id="active"><span>Home</span></a>
            <a href="crowd.html" class="nav-item nav-link"><span>Crowd</span></a>
            <a href="speakers.php" class="nav-item nav-link"></i><span>Speakers</span></a>
            <a href="workshops.php" class="nav-item nav-link"></i><span>Workshops</span></a>
            <a href="hackathon.html" class="nav-item nav-link"><span>Hackathons</span></a>
            <a href="register.php" class="nav-item nav-link"><span>Registration</span></a>
            <a href="About.html" class="nav-item nav-link"><span>About</span></a>
            <a href="contact.php" class="nav-item nav-link"><span>Contact Us</span></a>
          </div>
        </div>
      </nav>
    </header>

     <!-- starting php -->
          <!-- php in the same page -->
          
          <form class="w-50 m-auto" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" class="contactForm py-5 container">
          <div data-aos="fade-down" class="py-3">
                <h1  style="color: #f1f1f1;">workshops <span style="color: #e8465a"> form</h1>
        </div>
            <div class="form-row ">
              <div class="form-group col-lg-12  col-md-12 col-sm-12">
                <label class="main font-weight-bold text-white"> your full name:</label>
                <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                  name is valid , please enter you name
              </div>
              </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label class="main font-weight-bold text-white"> your e-mail:</label>
                <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
                <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                  e-mail is valid , please enter you mail
              </div>
              </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main font-weight-bold text-white"> your number:</label>
              <input id="phoneNumInput" type="number" class="form-control rounded" name="phone" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                phone number is valid , please enter you number
            </div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main font-weight-bold text-white">Your Experience:</label>
              <textarea class="form-control rounded" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
              <div class="validation"></div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main font-weight-bold text-white">Why Do You Want To Attend These Workshops:</label>
              <textarea class="form-control rounded" name="message2" rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
              <div class="validation"></div>
            </div>
            </div>

            <div class="app-form-group">
            <label class="main font-weight-bold text-white">Workshops You Want To Attend(Up To 2):</label><br>
                        <input type="checkbox" id="ws1" name="techno[]" value="ws1">
                        <label class="text-white" for="male">deep-dive workshops</label><br>
                        <input type="checkbox" id="ws2" name="techno[]" value="ws2">
                        <label class="text-white" for="female">in bierf workshops</label><br>
                      </div>
            <div class="text-center my-2"><button class="bb rounded-top" name="submit" type="submit">submit</button></div>
          </form>

        </div>
      </div>
    
    
  </section>

   <!-- end the head of page -->
   <!-- ======================================statring php valedation ==================================== -->
   <?php
         // define variables and set to empty values
         $nameErr =  $emailErr = $phoneErr=$messageErr=$message2Err= "";
         $name = $email = $phone=$message= $message2="";
         if (isset($_POST['submit'])) {
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
             
            }else {
              $name= test_input($_POST["name"]);
            }
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
               
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            if (empty($_POST["phone"])) {
              $phoneErr = "Phone is required";
              
            }else {
                $phone = test_input($_POST["phone"]);
            }
            if (empty($_POST["message"])) {
              $messageErr = "message is required";
           
           }else {
            $message = test_input($_POST["message"]);
           }
           if (empty($_POST["message2"])) {
            $message2Err = "message2 is required";
           
         }else {
          $message2 = test_input($_POST["message2"]);
         }
        //  if(!empty($_POST['checkArr'])){
        //   foreach($_POST['checkArr'] as $checked){
        //     echo $checked . '<br>';
        //   }
        // } else {
        //   echo '<div class="error">Checkbox is not selected!</div>';
        // }
            
         }
        }
        //callback function of test_input
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
        //============================  config //database conection =====================//
         if(isset($_POST['submit'])) {
          $name = $_POST['name']; 
          $email = $_POST['email']; 
          $phone = $_POST['phone']; 
          $message = $_POST['message'];
          $message2=$_POST['message2'];
          $checkbox1=$_POST['techno'];


      
          include_once("conf.php");
          $sql="select * from workshops  where (email='$email');";//// table name "workshops"

          $res=mysqli_query($mysqli,$sql);
    
          if (mysqli_num_rows($res) > 0) {
        
            $row = mysqli_fetch_assoc($res); // check if email is already exists , you will not to login 
            if($email==isset($row['email']))
            {
              ?>

              <p class="font-weight-bold text-white"> <?php echo "email already exists"; ?></p>
              <?php
            }
        }
        else{
          $chk="";  
              foreach($checkbox1 as $chk1)  // foreach to check the checkbox 
                {  
                    $chk .= $chk1.",";  
                }  
         
          //===========================insert into the table of db ================================//

          $result = mysqli_query($mysqli,"INSERT INTO workshops (name,email,Phonenum,workshop_attend,workshops,Experience) VALUES('$name','$email','$phone','$message','$message2','$chk')");////
          

          }
        }
       
      ?>  
  <!-- end the head of page -->
  <footer>
    <div class="footer">
      <div>
        <h2 style="font-family:'viga'; font-size: 22px; color:var(--red); font-weight:500;">Innovation Day</h2>
        <p>A series of integrated hackathons from idea to MVP to
           product, a three days of providing all facilities to
           the attendees also providing mentors, workshops and
           sessions. Innovation Day Hackathon is a unique event style that provide the value of awareness of technology to the mass and also to raise the awareness of entrepreneurship to help to launch startups and help  motivated youth to start their own businesses, We have skilled and talented youth and it’s our time to motivate and lead them to make their ideas come true. Also the hackathon is a great opportunity for ideation and finding innovative solutions for community problems.
          The final day is a one day event with all activities
          of 10 talks in business technology and design featuring
          the new technologies and opportunities, panel
          discussions about investment opportunities in Upper
          Egypt, startup exhibition for 40 startups from Upper
          Egypt, and startup pitching competition for the best
          10 startups
    </p>
      </div>
      <div class="quick">
        <h2 style="font-family:'viga'; font-size: 22px; color:var(--red); font-weight:500;">Quick Links</h2>
        <a href="">Startups Registration</a>
        <a href="">Partners Registration</a>
        <a href="">Hackathon Registration</a>
        <a href="">Speakers Registration</a>
        <a href="">Attendees Registration</a>
        <a href="">Workshops Registration</a>
      </div>
      <div class="">
        <h3 style="font-family:'viga'; font-size: 22px;color:var(--red); font-weight:500;">Follow Us...</h3>
        <a href="https://www.facebook.com/events/904737229734041/" target="_blank">
          <img src="./images/fb.png" alt="facebook logo" width="30px">
        </a>
        <a href="https://twitter.com/IEEEMUSB" target="_blank">
          <img src="./images/twetter.png" alt="twetter logo" width="20px">
        </a>
        <a href="https://www.youtube.com/user/IEEEMUSB" target="_blank">
          <img src="./images/insta.png" alt="instagram logo" width="20px">
        </a>
        <a href="https://www.youtube.com/user/IEEEMUSB" target="_blank">
          <img src="./images/youtube.png" alt="youtube" width="20px">
        </a>
        <br>
        <h3 style="font-family:'viga'; font-size: 22px;color:var(--red); font-weight:500;">Contact Us</h3>
        <span>halim@innovationday.com</span> <br>
        <span>01007397235</span>
      </div>
    </div>
    <div class="copy">
    &copy; Innovation Day Team - 2021</div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="scripts/js/all.min.js"></script>
  <script src="scripts/aos-master/dist/aos.js"></script>
  <script src="scripts/js/main2.js"></script>
</body>

</html>