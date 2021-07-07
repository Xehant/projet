<?php include('server.php') ?>
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

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>

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