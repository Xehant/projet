<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>register</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <script type="text/javascript" src="main.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/solid.min.css">
</head>

<body>
  <header class="header">
    <h1>Weecode</h1>
    <p> Apparrence a voir</p>
    <div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="news.php">News</a>
      <a href="login.php">Login</a>
      <a href="image.php">Images</a>
      <a href="register.php">Sign-up</a>
    </div>
  </header>
<?php

    //Start session

    session_start();    

    //Unset the variables stored in session

    unset($_SESSION['SESS_ID']);

    unset($_SESSION['SESS_PSEUDO']);

    unset($_SESSION['SESS_EMAIL']);
    
    unset($_SESSION['SESS_IP']);
    
    unset($_SESSION['SESS_PASSWORD']);
    
    unset($_SESSION['SESS_DATE_LOGIN']);

?>
<form name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">

        <!--the code bellow is used to display the message of the input validation-->

         <?php

            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
            echo '<ul class="err">';
            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                echo '<li>',$msg,'</li>'; 
                }
            echo '</ul>';
            unset($_SESSION['ERRMSG_ARR']);
            }
        ?>

    </td>
  </tr>
  <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr>
</table>
</form>
  <footer class="footer">

    <div class="reseaux">
      <p>Réseaux sociaux</p>
      <ul>
        <li><a href="facebook.com" class="fab fa-facebook-f"> Facebook</a></li>
        <li><a href="instagram.com" class="fab fa-instagram"> Instagram</a></li>
        <li><a href="pinterest.com" class="fab fa-pinterest"> Pinterest</a></li>
      </ul>
    </div>
    <div class="contact">
      <p>Contact</p>
      <ul>
        <li>adresse</li>
        <li>code postal</li>
        <li>ville</li>
        <li>numéro de téléphone</li>
        <li>email</li>
      </ul>
    </div>
    <div class="lorem">
      <p>lettres</p>
      <ul>
        <li>j</li>
        <li>y</li>
        <li>m</li>
      </ul>
    </div>
  </footer>
</body>

</html>