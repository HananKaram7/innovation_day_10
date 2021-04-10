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
<link rel="stylesheet" href="./styles/headerandfooter.css">
<link href="scripts/aos-master/dist/aos.css" rel="stylesheet">
    <link href="styles/register.css" rel="stylesheet">
    
</head>  
<body class="text-capitalize" style="background-color: #101d3d;">
<header>
		<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
			<a href="#" class="navbar-brand"><img src="./images/logo3.png" class="ieee-logo" alt="innovation day" class="logo" width="180px;"></a>
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
    
    
      <!-- php in the same page -->
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" class="contactForm py-5 container w-50 m-auto" enctype="multipart/form-data">
          <div data-aos="fade-down" class="py-3">
                <h1  style="color: #f1f1f1;">Registration <span style="color: #e8465a"> form</h1>
        </div>
            <div class="form-row ">
              <div class="form-group col-lg-6  col-md-12 col-sm-12">
              <label for="exampleInputEmail1" class="text-white">FirstName:</label> <span class="text-danger">*</span>
                <input id="name-input" type="name" name="fname" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="text-danger d-none alert alert-danger  w-57" id="nameAlert">
                            name is valid , please enter you name
                        </div>
              </div>
              <div class="form-group col-lg-6 col-md-12 col-sm-12">
              <label for="exampleInputEmail1" class="text-white">LastName:</label> <span class="text-danger">*</span>
              <input id="name1-input" type="name" name="lname" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="text-danger d-none alert alert-danger  w-57" id="nameAlert">
                            name is valid , please enter you name
                        </div>
              </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="exampleInputEmail1" class="text-white">Email address</label> <span class="text-danger">*</span>
              <input id="email-input" type="email" class="form-control rounded" name="email" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger  w-75" id="emailAlert">
                            e-mail is valid , please enter you mail
                        </div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="exampleInputPassword1" class="text-white">Mobile</label> <span class="text-danger">*</span>
              <input id="number-input" type="number" class="form-control rounded" name="num" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger  w-75" id="phoneAlert">
                            phone number is valid , please enter you number
                        </div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <p class="text-white">You're Attending As:</p>
                        <input type="radio" id="Attendee" name="Attending" value="Attendee">
                        <label class="text-white" for="male">Attendee</label><br>
                        <input type="radio" id="Partner" name="Attending" value="Partner">
                        <label class="text-white" for="female">Partner</label><br>
                        <input type="radio" id="Speakers" name="Attending" value="Speakers">
                        <label class="text-white" for="other">Speakers</label>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <p class="text-white">Educational Status:</p>
                        <input type="radio" id="Attendee" name="Estatus" value="Student">
                        <label class="text-white" for="male">Student</label><br>
                        <input type="radio" id="Partner" name="Estatus" value="Bachelor">
                        <label class="text-white" for="female">Bachelor</label><br>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label class="main  text-white">Governorate:</label>
                      <select class="w-100  form-control" id="dropdown" name="governorate" >
                      <option value="" selected="selected">Select</option>
                      <option value="Minia">Minia</option>
                      <option value="Sohag">Sohag</option>
                      <option value="Qena">Qena</option>
                    </select>
</div>
                    </div>
                  
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label class="text-white" for="state" accesskey="s">College:</label>
                      <select class="w-100  form-control" id="dropdown" name="college">
                      <option value="" selected="selected">Select</option>
                      <option value="Sciences">Sciences</option>
                      <option value="Engineering">Engineering</option>
                      <option value="Education">Education</option>
                      <option value="Other">Other</option>
                    </select>
            </div>
            </div>
            
           
                <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label class="main  text-white ">Add Your Comment</label>
            <textarea class="form-control rounded" id="comment" name="comments"  rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
              <div class="validation"></div>
            </div>
            </div>

            <div class="text-center my-2"><button class="bb rounded-top" name="submit" type="submit">Submit</button></div>
          </form>

   
    <?php
    // valadation in form 
         // define variables and set to empty values
         $fnameErr =  $lnameErr= $emailErr = $numErr=$AttendingErr=$EstatusErr=$commentsErr= "";
         $fname = $lname= $email =$num=$Attending=$Estatus=$governorate=$college=$comments="";
         if (isset($_POST['submit'])) {
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fname"])) {
               $fnameErr = "FirstName is required";
              
            }else {
              $fname = test_input($_POST["fname"]);
            }
            if (empty($_POST["lname"])) {
                $lnameErr = "LastName is required";
               
             }else {
                $lname = test_input($_POST["lname"]);
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
          
            
            if (empty($_POST["num"])) {
              $numErr = "phone is required";
            
            }else {
                $num = test_input($_POST["num"]);
            }
            if (empty($_POST["Attending"])) {
              $AttendingErr = "Attending is required";
             
            }else {
                $Attending= test_input($_POST["Attending"]);
            }

            if (empty($_POST["Estatus"])) {
              $EstatusErr = "Estatus is required";
             
            }else {
                $Estatus= test_input($_POST["Estatus"]);
            }
            if(!isset($_POST['governorate'])){
              $error_msg[] = "No governorate as selected.";
            
            }
            if(isset($_REQUEST['college']) && $_REQUEST['college'] == '0') { 
             $college='Please select a college.'; 
            } 
            if (empty($_POST["comments"])) {
              $commentsErr = "comments is required";
            }else {
                $comments= test_input($_POST["comments"]);
            }

            
         }
        }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         
        }
        

        // connect with data and check button submit
        if(isset($_POST['submit'])) {
          $fname = $_POST['fname']; 
          $lname = $_POST['lname']; 
          $email = $_POST['email']; 
          $num = $_POST['num']; 
          $Attending=$_POST['Attending'];
          $Estatus=$_POST['Estatus'];
          $governorate=$_POST['governorate'];
          $college=$_POST['college'];
          $comments=$_POST['comments'];
          
          include_once("config.php");
          $sql="select * from attendees where ( email='$email');";

          $res=mysqli_query($mysqli,$sql);
    
          if (mysqli_num_rows($res) > 0) {
            
            $row = mysqli_fetch_assoc($res);
            if($email==isset($row['email']))
            {
              ?>

              <p class="font-weight-bold text-white" > <?php   echo "email already exists";?></p>
              <?php
            }
        }
        else{

          $result = mysqli_query($mysqli,"INSERT INTO attendees(firstname,lastname,email,Phonenum,attendingas,educationalstatus,governorate,college,comment) VALUES('$fname','$lname','$email','$num','$Attending',' $Estatus','$governorate','$college','$comments')");	
          //do your insert code here or do something (run your code)

          }
        }
      ?>

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
    <script src="scripts/js/register.js"></script>
   </body>
 </html>