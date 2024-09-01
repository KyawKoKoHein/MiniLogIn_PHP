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
                <div class="">
                    <div class="m-auto w-50">
                        <div class="alert alert-dark text-center" role="alert">
                            You're logged out
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
        session_start();

        session_destroy();
    ?>
</body>

</html>