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
<link href="styles/speakerregister.css" rel="stylesheet">

</head>

<body class="text-capitalize" style="background-color: #101d3d;">
 
 
  <!-- start the head of page -->
  <section class=" mb-5">
    <button id="btnUp" class="rounded-circle  p-2 text-white change" style="background-color: #a83341;">
      <i class="fa fa-chevron-up" ></i>
  </button>
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
					<a href="workshops.html" class="nav-item nav-link"></i><span>Workshops</span></a>
					<a href="hackathon.html" class="nav-item nav-link"><span>Hackathons</span></a>
					<a href="register.php" class="nav-item nav-link"><span>Registration</span></a>
					<a href="About.html" class="nav-item nav-link"><span>About</span></a>
					<a href="contact.html" class="nav-item nav-link"><span>Contact Us</span></a>
				</div>
			</div>
		</nav>
	</header>
   
          <!-- starting php -->
          <!-- php in the same page -->
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" class="contactForm py-5 container w-50 m-auto" enctype="multipart/form-data">
          <div data-aos="fade-down" class="py-3">
                <h1  style="color: #f1f1f1;">Speakers <span style="color: #e8465a"> form</h1>
        </div>
            <div class="form-row ">
              <div class="form-group col-lg-6  col-md-12 col-sm-12">
              <label for="exampleInputEmail1" class="text-white">FullName:</label> <span class="text-danger">*</span>
                <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                  name is valid , please enter you name
              </div>
              </div>
              <div class="form-group col-lg-6 col-md-12 col-sm-12">
              <label for="exampleInputEmail1" class="text-white">Email address</label> <span class="text-danger">*</span>
                <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
                <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                  e-mail is valid , please enter you mail
              </div>
              </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="exampleInputPassword1" class="text-white">Mobile</label> <span class="text-danger">*</span>
              <input id="phoneNumInput" type="number" class="form-control rounded" name="phone" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                phone number is valid , please enter you number
            </div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main text-white">Job Tittle:</label>
              <input id="Job" type="text" class="form-control rounded" name="text" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="inputjobAlert">
                job tittle  is valid , please enter you job
            </div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main text-white">Linked In Profile Link:</label>
              <input id="Job" type="url" class="form-control rounded" name="link" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="inputlinkAlert">
                job tittle  is valid , please enter you job
            </div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main text-white">Bio:</label>
              <textarea class="form-control rounded" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
              <div class="validation"></div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label class="main text-white ">Governorate:</label>
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
              <label class="main text-white">Company:</label>
              <input id="Company" type="Company" class="form-control rounded" name="Company" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="text-danger d-none alert alert-danger" id="inputCompanyAlert">
              Company  is valid , please enter you job
            </div>
            </div>
            </div>
            <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label class="main text-white">Add a Image :</label>
                 <input class="bg-light w-100" type="file" name="file"  />        
                </div>
                </div>
                <div class="form-row ">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <label class="main text-white">Comment:</label>
              <textarea class="form-control rounded" name="message2" rows="5" data-rule="required" data-msg="Please write something for us" placeholder=""></textarea>
              <div class="validation"></div>
            </div>
            </div>

            <div class="text-center my-2"><button class="bb rounded-top" name="submit" type="submit">submit</button></div>
          </form>
        </div>
      </div>

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
  </section>

   <!-- end the head of page -->
   <!-- ======================================statring php valedation ==================================== -->
   <?php
         // define variables and set to empty values
         $nameErr =  $emailErr = $phoneErr=$textErr=$linkErr=$messageErr=$CompanyErr=$message2Err= "";
         $name = $email = $phone=$text= $link=$message=$Company=$message2="";
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

            if (empty($_POST["text"])) {
                $textErr = "text is required";
               
              }else {
                  $text = test_input($_POST["text"]);
              }
              if (empty($_POST["link"])) {
                $linkErr = "link is required"; 
               
              }else {
                $link = test_input($_POST["link"]);
              }


            if (empty($_POST["message"])) {
              $messageErr = "message is required";
            
           }else {
            $message = test_input($_POST["message"]);
           }
           if(!isset($_POST['governorate'])){
            $error_msg[] = "No governorate as selected.";
            
          }
          if (empty($_POST["Company"])) {
            $CompanyErr = "Company is required";
            
          }else {
            $Company = test_input($_POST["Company"]);
          }
           if (empty($_POST["message2"])) {
            $message2Err = "message2 is required";
           
         }else {
          $message2 = test_input($_POST["message2"]);
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

          $fname = $_POST['name']; 
          $email = $_POST['email']; 
          $num = $_POST['phone']; 
          $text=$_POST['text'];
          $link=$_POST['link'];
          $message=$_POST['message'];
          $governorate=$_POST['governorate'];
          $Company=$_POST['Company'] ;
          // $file=$_POST['file'];
          $comments=$_POST['message2'];

          $errors=array();
          $fileTmpPath = $_FILES['file']['tmp_name'];
          $fileName = $_FILES['file']['name']; 
          $fileSize = $_FILES['file']['size'];
          $fileType = $_FILES['file']['type'];
          
          
          $fileNameCmps = explode(".", $fileName); 
         
          $fileExtension = strtolower(end($fileNameCmps));
          
          
          $allowedfileExtensions = array('jpg', 'png');
          if (in_array($fileExtension, $allowedfileExtensions) === false) {
              $errors[] = "ext not allowed";
              
          }
          if ($fileSize > 2097152) {
              $errors[] = "size not allowed";
            
          }
          if(empty($errors) == true){
              move_uploaded_file($fileTmpPath, "upload/".$fileName);
          }else{
              print_r($errors);
          
          }
          
          if ($fileTmpPath != ""){
                  $newFilePath = "./upload/" . $_FILES['file']['name'];
                  move_uploaded_file($fileTmpPath, $newFilePath);
              }   
          include_once("config.php");
          $sql="select * from speakers where ( email='$email');";

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

          // Select file type
 
          $result = mysqli_query($mysqli,"INSERT INTO speakers(fullname,email,Phonenum,jobtittle,Linked_In_Profile_Link,bio,governorate,company,image_upload,comment) VALUES('$fname','$email','$num','$text',' $link',' $message',' $governorate','$Company','  $fileName','$comments')");
          
          //do your insert code here or do something (run your code)

          }
         }
        
       ?>

    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="scripts/js/all.min.js"></script>
    <script src="scripts/aos-master/dist/aos.js"></script>
    <script src="scripts/js/register.js"></script>
   </body>
 </html>