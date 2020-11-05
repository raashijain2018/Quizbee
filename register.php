<?php
include "connection.php";
 ?>

 <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="css1/style.css">
    <link rel="stylesheet" href="css1/responsive.css"> -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="icon" href="images/Quizbee.png" type="image/gif">
    <link rel="stylesheet" href="css/login_page.css">
    <!-- <link rel="stylesheet" href="css/vitnav.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@600&display=swap" rel="stylesheet">
</head>

<body class="form-v4">

	<!-- <div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h1>LOGIN FORM</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action=""name="form1" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="Enter Your Password" required="" value="" name="password" id="password" class="form-control">

                            </div>

                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button> -->
                            <!-- <a class="btn btn-default btn-block" href="register.php">Register</a> -->

                            <!-- <div class="alert alert-danger" id="failure" style="margin-top: 10px;display:none">
                              <strong>Does not Match Exist!</strong>Invalid Username Or Password!
                              </div>

                        </form>
                    </div>
                </div>
			</div>

		</div>
    </div> -->

    <nav>
        <div class="navbar">
          <div class="laptop">
            <ul class="nav-links">
              <li><a href="login.php" style="margin-top: 0.65rem;">Login</a> </li>
                <li><a href="about.php" style="margin-top: 0.65rem;">About Us</a></li>
                <li><a href="index.php"style="margin-top: -0.75rem;"><img src="images/Quizbee.png" class="b2s-logo" /></a></li>
                <li><a href="about.php" style="margin-top: 0.65rem;">Contact Us</a> </li>
                <li><a href="register.php"style="margin-top: 0.65rem;">Register</a></li>
            </ul>
          </div>
          <div class="mobile">
            <div class="mobile-nav">
              
              <div class="burger" id="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
              </div>
           </div>
            <div class="menu hidden" id="menu">
              <ul class="menu-links" id="menu-links">
                <hr style="margin: -10px 0 0 0;">
                <li><a href="login.php">Login</a> </li><hr>
                <li><a>Register</a></li><hr>
                <li><a href="about.php">About Us</a></li><hr>
                <li><a href="about.php" >Contact Us</a> </li><hr></ul>
            </div>
          </div>
        </div>
      </nav>

 <div class="container">
    <div class="container3" class="tilt">
        <img src="images\Quizbee.png" alt="qb" class="img2">
    </div>
    <div class="container1">
        <div class="login-box">
            <!--
			<form action=""name="form1"method="POST">
            <div class="textbox">
              <i class="fas fa-user"></i>
              <label for="username"></label>
              <input type="text" placeholder="Username" name="username" id="username"required>
            </div>
            <div class="textbox">
              <i class="fas fa-lock"></i>
              <input type="password" for="password" placeholder="Password" name="password" id="password"required>
            </div>
            <div class="textbox">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="password" id="confirm_password"required>
            </div>
            <div class="selectbox">
            <select name="test" id="test" onchange="check()" required>
                <option>Select your test</option>
                <option value="mathbee">Math-Bee</option>
                <option value="spellbee">Spell-Bee</option>
            </select>
            </div>
            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button>
            
    

            <div class="alert alert-danger" id="failure" style="font-size: 20px;margin-top: 5px;display:none">
              Does not Match!<br>Invalid Username Or Password!
              </div>
              <div class="alert alert-danger" id="selectexam" style="margin-top: 10px;display:none">
                <strong>Select Exam</strong><br>Please choose an exam.
                </div>
            </form>
			-->


			<form action="/" method="post">
        </form>
			</div>
			<form class="form-detail" action="" method="post" id="myform">
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" id="first_name" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="input-text">
					</div>
				</div>
				<div class="form-row">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="input-text" required>
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Confirm Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Your Email</label>
					<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="contact">Contact</label>
						<input type="tel" name="contact" id="contact" class="input-text" pattern="[6-9]{1}[0-9]{9}" required>
					</div>
					<div class="form-row form-row-1">
						<label for="school">School/College</label>
						<input type="text" name="school" id="school" class="input-text" required>
					</div>
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="class">Class/Year</label>
						<input type="number" name="class" id="class" class="input-text" min= "1" max= "13" required>
					</div>
					<div class="form-row form-row-1">
						<label for="refer">Referred By</label>
						<input type="text" name="refer" id="refer" class="input-text" required>
					</div>
				</div>

				<!-- <div class="form-checkbox">
					<label class="container"><p>I agree to the Terms and Conditions and Privacy Policy</p>
					  	<input type="checkbox" name="checkbox" required>
					  	<span class="checkmark"></span>
					</label>
				</div> -->
				<div class="form-row-last">
					<input type="submit" name="submit1" class="register" value="Register">
				</div>
				<div class="alert alert-success" id="success" style="margin-top:10px;display: none">
					<strong>Success!</strong> Account Registration Successful!
				</div>
				<div class="alert alert-danger" id="failure" style="color: red;margin-top: 10px;display: none">
					<strong>Username already exists!</strong> Please register with a different username!
				</div>
			</form>
		</div>
	</div>
        </div>

    </div>
    <div class="container2">
        <img src="images/Quizbee.png" alt="qb" class="img1 tilt">
    </div>
</div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<!--
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180348448-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180348448-1');
</script>
-->
<!-- Google Tag Manager -->
<!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':-->
<!--new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],-->
<!--j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=-->
<!--'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);-->
<!--})(window,document,'script','dataLayer','GTM-PWB4XW3');</script>-->
<!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
<!--

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWB4XW3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

-->
<!-- End Google Tag Manager (noscript) -->
    
		<!--
        <form action="/" method="post">
        </form>
			</div>
			<form class="form-detail" action="" method="post" id="myform">
				<h2>REGISTER FORM</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" id="first_name" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="input-text">
					</div>
				</div>
				<div class="form-row">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="input-text" required>
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Confirm Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Your Email</label>
					<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="contact">Contact</label>
						<input type="tel" name="contact" id="contact" class="input-text" pattern="[6-9]{1}[0-9]{9}" required>
					</div>
					<div class="form-row form-row-1">
						<label for="school">School/College</label>
						<input type="text" name="school" id="school" class="input-text" required>
					</div>
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="class">Class/Year</label>
						<input type="number" name="class" id="class" class="input-text" min= "1" max= "13" required>
					</div>
					<div class="form-row form-row-1">
						<label for="refer">Referred By</label>
						<input type="text" name="refer" id="refer" class="input-text" required>
					</div>
				</div>

				 <div class="form-checkbox">
					<label class="container"><p>I agree to the Terms and Conditions and Privacy Policy</p>
					  	<input type="checkbox" name="checkbox" required>
					  	<span class="checkmark"></span>
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="submit1" class="register" value="Register">
				</div>
				<div class="alert alert-success" id="success" style="margin-top:10px;display: none">
					<strong>Success!</strong> Account Registration Successful!
				</div>
				<div class="alert alert-danger" id="failure" style="color: red;margin-top: 10px;display: none">
					<strong>Username already exists!</strong> Please register with a different username!
				</div>
			</form>
		</div>
	</div>
	-->

	    <?php
	    if(isset($_POST["submit1"]))
	    {
	      $count=0;
	      $res = mysqli_query($link,"select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
	      $count = mysqli_num_rows($res);

	      if($count>0)
	      {
	        ?>
	        <script type="text/javascript">
	          document.getElementById("success").style.display = "none";
	          document.getElementById("failure").style.display = "block";
	        </script>
	        <?php
		  }
	      else {
	        mysqli_query($link,"insert into registration values(NULL,'$_POST[first_name]','$_POST[last_name]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[school]','$_POST[class]','$_POST[refer]')") or die(mysqli_error($link));
	        ?>
	        

	        <?php
	      }
	    }
	     ?>
		

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		first_name: {
		  			required: "Please enter a firstname"
		  		},
		  		last_name: {
		  			required: "Please enter a lastname"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please enter a password"
		  		},
		  		comfirm_password: {
		  			required: "Please enter a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		}
	 validator.destroy();
);
		// validator.destroy();
	</script>
</body>
</html>
