
<html>
  <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Real Visionaries Initiat</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <div class = "d-flex justify-content-between container">
                    <img class="ml-3 " style = "max-height: 5rem;" src="../images/imageonline-co-whitebackgroundremoved.PNG" alt="">
                  <div class = "ml-auto d-inline-flex justify-content-around align-items-center">
                    <?php if(isset($userfname)){?>
                      <p class="my-1"> Hi <?php echo $uzaname ;?></p><br>
                    <form class="" action = "controlla/logout.con.php" method = "POST">
                      <button class = "form-control-sm mx-3 btn-sm btn-outline-secondary" type = "submit" name = "logout">Log Out</button> 
                    </form>
                    <?php
                    }
                    else
                    {?>
                      <form class = "form-group form-inline d-l-block" action="controlla/login.con.php" method = "POST">
                      <input class = "form-control-sm form-former" type = "hidden" name = "url_log" value = "<?php echo $_SERVER['REQUEST_URI']?>"/>
                      <input class = "form-control-sm form-former  btn-outline-info" type = "name" placeholder = "Username/email" name = "uname_log" required/>
                      <input class = "form-control-sm form-former  btn-outline-info" type = "password" placeholder = "Password" name = "pw_log" required/>
                      <button class = "form-control-sm btn-sm btn-outline-secondary" type = "submit" name = "submit_log">LOG IN</button>
                    </form>
                    <!-- <a class = "ml-4 float-right btn btn-outline-info" style = "align-self: center; width: 2.5rem; font-size:0.65rem;text-align: center" href = "signup.php">Sign up</a> -->
                    <?php
                  }
                  ?>
                  </div>
                </div>
                <nav class="ml-4 navbar navbar-light navbar-expand-lg bg-transparent navbar-custom">
                  <!-- Brand -->
                  <a class="navbar-brand" href="#">R V I</a>

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