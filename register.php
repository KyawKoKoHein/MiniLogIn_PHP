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
                        <h4 class="text-primary">Register page</h4>
                        <form action="" method="post">
                            <div class="">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control w-50">
                            </div>

                            <!-- email -->
                            <div class="">
                                <label for="">Email</label>
                                <input type="email" name="email" id="" class="form-control w-50">
                            </div>

                            <!-- phone -->
                            <div class="">
                                <label for="">Phone</label>
                                <input type="phone" name="phone" id="" class="form-control w-50">
                            </div>

                            <!-- password -->
                            <div class="">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control w-50">
                            </div>

                            <!-- password -->
                            <div class="">
                                <label for="">Confirm Password</label>
                                <input type="password" name="cpassword" id="" class="form-control w-50">
                            </div>

                            <!-- button -->
                            <div class="mt-3">
                                <button type="submit" name="register" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php

    session_start();

    function checkStrongPassword($password)
    {
        $upperStatus = false;
        $lowerStatus = false;
        $specialStatus = false;
        $numberStatus = false;

        if (preg_match('/[A-Z]/', $password)) {
            $upperStatus = true;
        }

        if (preg_match('/[a-z]/', $password)) {
            $lowerStatus = true;
        }

        if (preg_match('/[0-9]/', $password)) {
            $numberStatus = true;
        }

        if (preg_match('/[!@#$%^&*]/', $password)) {
            $specialStatus = true;
        }

        if ($upperStatus && $lowerStatus && $numberStatus && $specialStatus) {
            return true;
        } else {
            return false;
        }
    }


    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cPassword = $_POST['cpassword'];
        if ($name != "" || $email != "" || $password != "" || $cPassword != "") {
            if (strlen($password) >= 6 && strlen($cPassword) >= 6) {
                if ($password == $cPassword) {

                    $status = checkStrongPassword($password);

                    if($status) {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
                        echo "Register Success";
                    } else {
                        echo "Your password is not strong";
                    }

                } else {
                    echo "Password and Confirm password must be same! Type Again.";
                }
            } else {
                echo "Password's length must be greater than 6.";
            }
        } else {
            echo "Need to Fill!";
        }
    }

    ?>

</body>

</html>