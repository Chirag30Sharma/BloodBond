<?php
include("inc/db.php");
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login For admin</title>
</head>
<style>
  body {
    padding-top: 5%;
    font-family: sans-serif;
    background: #4070f4;
    color: black;
  }


  h1 {
    text-align: center;
  }


  form {
    width: 35rem;
    margin: auto;
    color: black;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: white;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;
  }

  input[type=text],
  input[type=password] {
    width: 100%;
    margin: 10px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
  }

  button {
    background-color: white;
    color: black;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 100%;
    font-size: 18px;
  }

  button:hover {
    opacity: 0.6;
    cursor: pointer;
  }

  .headingsContainer {
    text-align: center;
  }

  .headingsContainer p {
    color: black;
  }

  .mainContainer {
    padding: 16px;
  }


  .subcontainer {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
  }

  .subcontainer a {
    font-size: 16px;
    margin-bottom: 12px;
  }

  span.forgotpsd a {
    float: right;
    color: whitesmoke;
    padding-top: 16px;
  }

  .forgotpsd a {
    color: black;
  }

  .forgotpsd a:link {
    text-decoration: none;
  }

  .register {
    color: black;
    text-align: center;
  }

  .register a {
    color: black;
  }

  .register a:link {
    text-decoration: none;
  }
  

  /* Media queries for the responsiveness of the page */
  @media screen and (max-width: 600px) {
    form {
      width: 25rem;
    }
  }

  @media screen and (max-width: 400px) {
    form {
      width: 20rem;
    }
  }
  .popup-box {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    font-family: Arial, sans-serif;
    text-align: center;
}

.popup-box p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.popup-box button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.popup-box button:hover {
    background-color: #0056b3;
}

</style>

<body>
  <form action="aindex.php" method="post">
    <div class="headingsContainer">
      <h2>Sign in</h2>
    </div>

    <!-- Main container for all inputs -->
    <div class="mainContainer">
    
      <!-- Email -->
      <label for="email">Your Email</label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <br><br>

      <!-- Password -->
      <label for="pswrd">Your password</label>
      <input type="password" placeholder="Enter Password" name="pswrd" required>

      <!-- Submit button -->
      <button type="submit" name="log">Login</button>

      <!-- Sign up link -->
      <p class="register">Don't Have An Admin Account? <a href="asignup.php">Sign up</a></p>

    </div>
  </form>
  </body>

</html>

<?php
session_start(); // Start the session
include("inc/db.php");

if (isset($_POST["log"])) {
  $email = $_POST["email"];
  $pswrd = $_POST["pswrd"];

  $sql = "SELECT * FROM admin_registration WHERE org_email = '$email' AND org_pass = '$pswrd'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
    $_SESSION["email"] = $email;

    header("Location: aaindex.php");
    exit;
  } else {
    echo "Invalid username or password";
  }
}
?>

