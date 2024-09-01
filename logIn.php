<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body style="background-color: #DCD4D8;">
  <div class="container mt-5">
    <div class="row">
      <div class="col-3">
        <div class="text-center mb-3">
          <a href="logIn.php">
            <button class="btn btn-primary" style="width:200px">log In</button>
          </a>
        </div>

        <div class="text-center mb-3">
          <a href="register.php">
            <button class="btn btn-success" style="width:200px">Register</button>
          </a>
        </div>

        <div class="text-center mb-3">
          <a href="logout.php">
            <button class="btn btn-dark" style="width:200px">log out</button>
          </a>
        </div>
      </div>
      <div class="col-8">
        <div class="card w-75">
          <div class="card-body">
            <h4 class="text-primary">Log In page</h4>
            <form action="" method="POST">
              <div class="">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control w-50">
              </div>

              <!-- password -->
              <div class="">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control w-50">
              </div>

              <!-- button -->
              <div class="mt-3">
                <button type="submit" name="logIn" class="btn btn-primary">Log In </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  session_start();

  if (isset($_POST['logIn'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if ($userEmail == $_SESSION['email'] && password_verify($userPassword, $_SESSION['password'])) {
      echo "Login Success";
    } else {
      echo "Login Fail";
    }
  }


  ?>

</body>

</html>