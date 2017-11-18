<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WineCorporation Co.Ltd</title>
<!--
Stacked Template
http://www.templatemo.com/tm-505-stacked
-->
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
          <script type="text/javascript">
          function CheckFNSN(){
          if(frm.fname.value == ''){
              alert("Please Enter Your Name!!!")
              frm.fname.focus()
              return false
          }

          else if(frm.sname.value == ''){
              alert("Please Enter Your Surname!!!")
              frm.sname.focus()
              return false
          }
          else if(frm.email.value == ''){

              alert("Please enter your mail!!")
              frm.email.focus()
              return false
          }
         else if(frm.phone.value == ''){
              alert("Please enter your phone!!!")
              frm.phone.focus()
              return false
          }
          else if(frm.uname1.value == ''){
              alert("Please Enter Your username..")
              frm.uname1.focus()
              return false
          }
          else if(frm.pass1.value == ''){
              alert("Please enter your password!!!")
              frm.pass1.focus()
              return false
          }
      }
            </script>




    </head>
    <body>
        <?php
          include('.../Testphp/config.php');
            if ($_POST[btn1] == 'Confirm') {
                $fname = $_POST[fname];
                $sname = $_POST[sname];
                $email = $_POST[email];
                $phone = $_POST[phone];
                $uname1 = $_POST[uname1];
                $pass1 = $_POST[pass1];

                $query = "INSERT INTO mem_wine (mem_name,mem_sname,mem_mail,mem_phone,mem_uname,mem_pass)
                values ('$fname','$sname','$email','$phone','$uname1','$pass1');
                $result = mysql_db_query($dbname,$query);

                if($result){
                echo "ok....";

              }else{echo "Error!";}

            }


         ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="home1.php" class="nav__link c-blue"><img src="img/home-icon.png"></a>
            </li>
            <li class="nav__item">
              <a href="loginV3.php" class="nav__link c-yellow scrolly"><img src="img/about-icon.png"></a>
            </li>
            <li class="nav__item">
              <a href="registerV3.php" class="nav__link c-red"><img src="img/layout_icon.png" alt="" width="50px" height="50px"></a>
            </li>
          </ul>
        </nav>
        <section class="panel b-blue" id="1">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="home-content">
                      <div class="home-heading">

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <h1 align = 'center'><em> &nbsp; WINEKRUB</em> &nbsp;<hr width="80%" size="10px" color="red"><p> Register</h1>
                              <form name="frm" align = 'center'method="post" action="LoginV3.php" onsubmit="return CheckFNSN()">
                                <b style="color:white">Name : </b><input type="text" placeholder="Enter your name" name="fname" id="fname"/>
                                <b style="color:white">Surname :</b> <input type="text" placeholder="Enter your surname" name="sname" id="sname"/>
                                <br>
                                <br>
                                <b style="color:white">E-mail :</b><input type="email" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{>=6,}"
                                title="Not match" placeholder="Enter your email" name="email" id="email"/>
                                <b style="color:white">Phone : </b><input type="text" placeholder="Enter your phone" name="phone" id="phone"/>
                  <br>
                  <br>
                <b style="color:white">Username :</b> <input type="text" placeholder="Enter username" name="uname1" id="uname1" />
                <b style="color:white">Password :</b> <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number
                  and one uppercase and lowercase letter, and at least 6 or more characters"
                  placeholder="Enter your password" name="pass1" id="pass1"/>
                  <br>
                  <br>
                <p align = 'center'><input type="submit" name = "bt" id="btn1" value="Confirm" /></p>
              </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="footer">
                <p>Copyright &copy; Designed by ไวน์ไงงงไวน์เองงง</p>
              </div>
            </div>
          </article>
        </section>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
          <script src="js/vendor/bootstrap.min.js"></script>
          <script src="js/plugins.js"></script>
          <script src="js/main.js"></script>
    </body>
</html>
