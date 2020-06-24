
<html>
  <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Page Title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel='stylesheet' type='text/css' media='screen' href='../styles/bootstrap.min.css'>
      <link rel='stylesheet' type='text/css' media='screen' href='../styles/main.css'>
      <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
  <?php
    session_start();
    $userid = $_SESSION['id'];
    $userfname = $_SESSION['namefirst'];
    $userlname = $_SESSION['namelast'];
    $uzaname = $_SESSION['username'];
    ?>
      <header class="mainheader">
                <div class = "">
                    <img class="ml-3 float-left" style = "max-height: 5rem;" src="../images/imageonline-co-whitebackgroundremoved.PNG" alt="">
                  <div style= "" class = "brand row px-5 float-right">
                    <?php if(isset($userfname)){?>
                      <p style ="margin-left:2rem;" class="alighn-self-center"> Hi <?php echo $uzaname ;?></p><br>
                    <form action = "controlla/logout.con.php" method = "POST">
                      <button style = "height:1.5rem; width: 3.5rem; font-size:0.6rem" class = "form-control form-control-sm mx-3" type = "submit" name = "logout">Log Out</button> 
                    </form>
                    <?php
                    }
                    else
                    {?>
                      <form class = "col-sm-7 mt-1" action="controlla/login.con.php" method = "POST">
                      <input style = "height:1.5rem; width: 4.5rem; margin-left:0.2rem; " class = " form-control form-control-sm" type = "hidden" name = "url_log" value = "<?php echo $_SERVER['REQUEST_URI']?>"/>
                      <input style = "height:1.5rem; width: 4.5rem; margin-left:0.2rem; " class = " form-control form-control-sm" type = "name" placeholder = "Username/email" name = "uname_log" required/>
                      <input style = "height:1.5rem; width: 4.5rem; margin-left:0.2rem; " class = "form-control form-control-sm" type = "password" placeholder = "Password" name = "pw_log" required/>
                      <button style = "height:1.5rem; width: 3rem; font-size:0.6rem; margin-left:0.2rem;" class = "form-control form-control-sm" type = "submit" name = "submit_log">LOG IN</button>
                    </form>
                    <!-- <a class = "ml-4 float-right btn btn-outline-info" style = "align-self: center; width: 2.5rem; font-size:0.65rem;text-align: center" href = "signup.php">Sign up</a> -->
                    <?php
                  }
                  ?>
                  </div>
                </div>
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> 
    </ul>
  </div> 
</nav>
                <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    
                    <a class="navbar-brand" href="index.php"></a>
                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="nav nav-pills nav-justified w-100 rounded">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>  
                            <li class="nav-item">
                                <a class=" nav-link" href="#">MH Topics</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">News</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Discussions</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="">Archives</a>
                            </li> 
                      </div>     
                  </nav> -->
              <!-- <div class="navbar navbar-expand-sm n w-100">
                  <div class ="brand row">
                      <img class="navbar-brand logo" src="/Vector.png" alt="" >
                      <p>Real Visionaries<br>Initiaitive</h1>
                  </div>
                <ul class="nav nav-pills nav-justified w-100">
                  <li class="nav-item rounded">
                      <a class=" nav-link" href="#">MH Topics</a>
                  </li>
                  <li class="nav-item active rounded">
                    <a class="nav-link" href="#">News</a>
                  </li>
                  <li class="nav-item active rounded">
                    <a class="nav-link" href="#">Discussions</a>
                  </li>
                  <li class="nav-item active rounded">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                  <li class="nav-item active rounded">
                    <a class="nav-link" href="#">Archives</a>
                  </li>
                </ul>
              </div>-->
      </header>