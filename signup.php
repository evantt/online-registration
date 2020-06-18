<?php include('db.signup.php') ?>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="CSS//main.css">
  <style>
    .error {
        width: 92%; 
        margin: 5px auto; 
        padding: 10px; 
        border: 1px solid #a94442; 
        color: #a94442; 
        background: #f2dede; 
        border-radius: 5px; 
        text-align: left;
    }
    #register_form h1 {
        text-align: center;
    }
    #register_form {
        width: 37%;
        margin: 150px auto;
        padding-bottom: 30px;
        border: 1px solid #918274;
        border-radius: 5px;
        background: aliceblue;
    }
    #register_form input {
        width: 80%;
        height: 35px;
        margin: 5px 10%;
        font-size: 1.1em;
        padding: 4px;
        font-size: .9em;
    }
    .form_error span {
        width: 80%;
        height: 35px;
        margin: 3px 10%;
        font-size: 1.1em;
        color: #D83D5A;
    }
    .form_error input {
        border: 1px solid #D83D5A;
    }
    #reg_btn {
        height: 35px;
        width: 80%;
        margin: 5px 10%;
        color: white;
        background: #3B5998;
        border: none;
        border-radius: 5px;
    }
  </style>
</head>
<body>
  <?php require"Layout//header.php";?>
  <form method="post" action="signup.php" id="register_form">
      <h1>Sign Up</h1>
      <?php echo display_error(); ?>
  	<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        <?php if (isset($name_error)): ?>
            <span><?php echo $name_error; ?></span>
            <?php endif ?>
        </div>
        <div>
            <input type="password"  placeholder="Password" name="password">
        </div>
        <div>
            <button type="submit" name="register" id="reg_btn">Sign Up</button>
        </div>
    </form>
    <?php require"Layout//footer.php";?>
</body>
</html>