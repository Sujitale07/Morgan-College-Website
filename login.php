
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morgan-int'l collage</title>
  
  <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="skeleton.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    

    form {
      width: 400px;
      
    }

    .field {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }


   

    .error {
      color: red;
      font-size: 12px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
<section>
    <div class="wrapper">
        <nav>
          <input type="checkbox" id="show-search">
          <input type="checkbox" id="show-menu">
          <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
          <div class="content">
          <div class="logo"><a href="morgan.html"><img src="img/logo.png" width="100px" alt=""></a></div>
            <ul class="links">
              <li><a href="morgan.html">Home</a></li>                           
              <li>
                <a href="#" class="desktop-link">Subjects <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>
                <input type="checkbox" id="show-features">
                <label for="show-features">subjects <i class="fa fa-caret-down" aria-hidden="true"></i>
                </label>
                <ul>
                  <li><a href="#">Accountancy</a></li>
                  <li><a href="teachers.html">Economics</a></li>
                  <li><a href="#">Nepali</a></li>
                  <li><a href="#">English</a></li>
                  <li><a href="#">Computer Science</a></li>
                  <li><a href="#">Social</a></li>
                </ul>
              </li>
              <li>
                <a href="#" class="desktop-link">Departments<i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>
                <input type="checkbox" id="show-services">
                <label for="show-services">Departments <i class="fa fa-caret-down" aria-hidden="true"></i></label>
                <ul>
                  <li>
                    <a href="#" class="desktop-link">Management <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <input type="checkbox" id="show-items">
                    <label for="show-items">Management <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </label>
                    <ul>
                      <li><a href="#">C Science</a></li>
                      <li><a href="#">H Management</a></li>
                      <li><a href="#">B Studies</a></li>
                    </ul>
                  </li>                            
                  <li>
                    <a href="#" class="desktop-link">Science <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <input type="checkbox" id="show-items-1">
                    <label for="show-items-1">    Science <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </label>
                    <ul>
                      <li><a href="#">&nbsp;&nbsp;&nbsp;Physics</a></li>
                      <li><a href="#">&nbsp;&nbsp;&nbsp;Biology</a></li>
                      <li><a href="#">&nbsp;&nbsp;&nbsp;Chemistry</a></li>
                    </ul>
                  </li>              
                </ul>
              </li>
              <li><a href="Our-programs.html">Our Programs</a></li>
              <li><a href="about-us.html">About us</a></li>
              <li><a href="contact-us.html">Contact-us</a></li>
            </ul>
          </div>
          <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
          <form action="#" class="search-box">
            <input type="text" placeholder="Type Something to Search..." required>
            <button type="submit" class="button"><i class="fas fa-long-arrow-alt-right"></i></button>
          </form>
        </nav>
      </div>
      
    </section>

    <section class="bg-img-1 only-for-this">
        <marquee behavior="" direction="" style="background: #e0e0ff; color: #2A2986;padding: 10px;margin: 0;">admisson open!!!&nbsp;&nbsp;&nbsp;&nbsp; admission open!!!&nbsp;&nbsp;&nbsp;&nbsp;admission open!!!</marquee>   
        <div class="transparant-layer"></div>
        <div class="container">
          <div class="sixteen columns">
            
            <div class="content-2">
              <h1>Welcome to Morgan Int'l collage</h1>
              <p class="mt-15">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, l</p>
              <a href="" class="mt-15"><button class="mt-15 btn-primary"><span class="btn-txt">GET ADMITTED</span></button></a>     
            </div>
          </div>
        </div>
    </section>
    <section>
        <div class="container">
        <div class="sixteen coloums">
    <main style="padding-bottom: 49px">
        <?php
        $email_error = '';
        $password_error = '';
        $login_error = '';
        if(isset($_POST['login-submit'])){
            // Retrieve and sanitize the email and password fields
            $email = htmlspecialchars(trim($_POST['login-email']));
            $password = htmlspecialchars(trim($_POST['login-password']));

            // Check if the email field is empty
            if(empty($email)){
                $email_error = "Please enter your email address.";
            }

            // Check if the password field is empty
            if(empty($password)){
                $password_error = "Please enter your password.";
            }

            // Check if the email and password are valid
            if(!empty($email) && !empty($password)){
                if($email == "sujitale01@gmail.com" && $password == "admin123"){
                    // If the email and password are valid, redirect to the student page
                    header("Location: about-us.html");
                    exit();
                } else {
                    // If the email and password are invalid, display an error message
                    $login_error = "Invalid email or password.";
                }
            }
        }
        ?>
        <form method="post" class="student-login mt-15" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1 style=" color: #2A2986;margin: 0;">Login Here</h1>
            <div class="field">
                <label for="login-email">Email Address:</label>
                <input type="text" id="login-email" name="login-email" placeholder="Enter your email address">
                <?php if(isset($email_error)): ?>
                    <div class="error"><?php echo $email_error; ?></div>
                <?php endif; ?>
            </div>
            <div class="field">
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="login-password" placeholder="Enter your password">
                <?php if(isset($password_error)): ?>
                    <div class="error"><?php echo $password_error; ?></div>
                <?php endif; ?>
            </div>
            <?php if(isset($login_error)): ?>
                <div class="error"><?php echo $login_error; ?></div>
            <?php endif; ?>
            <button type="submit" name="login-submit">Login</button>
        </form>
    </main>
</div>

    </section>
    <footer style="background-color: #2A2986; padding-bottom: 49px;">
        <div class="container">
            <div class="sixteen columns">
                <main>
                    <div>
                        <a href="http://">Home</a><br>
                        <a href="http://">About us</a><br>
                        <a href="http://">Contact us</a><br>
                        <a href="http://"></a><br>
                    </div>
                    <div>
                        <a href="http://">Get admitted</a><br>
                        <a href="http://">Call now</a><br>                                
                    </div>
                    <div>
                        <a href="http://">Street	901 S Cage Blvd</a><br>
                        <a href="http://">City/Town	Pharr</a><br>
                        <a href="http://">State/Province/Region	Texas</a><br>
                        <a href="http://">Phone Number	(956) 781-5920</a><br>
                    </div>
                </main>                
            </div>
        </div>
    </footer>    
   
</body>
</html>
