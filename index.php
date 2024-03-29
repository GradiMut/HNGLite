<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HNGLite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <!-- Sign-in page -->
    <div class="container-fluid" id="view">
        <div class="row float-md-left bg-dark first" style="min-height: 100vh;">
            <div class="col col-md-12 align-self-center text-center">
                <img class="bulb" src="./icons/lightbulb.svg" />
                <h4 class="text-light h3">Hello</h4>
                <p class="text-danger">New here?</p>
                <br />
                <br />
                <p class="text-secondary">
                    Enter your personal details to get started
                </p>
                <a class="btn btn-outline-light text-light font-weight-bold" id="switch">
                    Sign Up
                </a>
            </div>
        </div>
        <div class="row pt-5" style="min-height: 100vh;" id="page">
            <div class="col col-md-12 align-self-center text-center">
                <img class="bulb" src="./icons/lightbulb.svg" />
                <form action="./src/backend/login.php" method="POST" class="justify-content-center">
                    <div class="form-group col-8 col-md-4 p-2">
                        <input type="email" name="mail" id="email" placeholder="Your email address" class="p-4 form-control form-control-lg color" />

                        <div class="invalid-feedback">
                            Enter a valid email address
                        </div>
                    </div>
                    <div class="form-group col-8 col-md-4 p-2">
                        <input type="password" name="pass" id="password" placeholder="Password" class="p-4 form-control form-control-lg color" />
                        <div class="invalid-feedback">
                            Password cannot be less than 8 characters long
                        </div>
                    </div>
                    <div class="form-group pt-3">
                        <input type="submit" name="log" id="submit" value="Login" class="p-3 btn btn-danger col-8 col-md-4" />
                    </div>
                    <a href="#" class="float-right col-9 forgot">
                        <p>Forgot Password?</p>
                    </a>

                    <p class="text-center col-12 float-right h6 text-danger pt-5">
                        OR<br /><br /><br />
                        <a href="#" class="">
                            <img src="./icons/facebook.svg" alt="" /></a>
                        <a href="#" class=" ">
                            <img src="./icons/google.svg" alt="" /></a>
                        <a href="#" class=" ">
                            <img src="./icons/linkedin.svg" alt="" /></a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <!-- Sign-up page -->
    <div class="container-fluid" id="view1" style="display: none">
        <div class="row float-md-left bg-dark first" style="min-height: 100vh;">
            <div class="col col-md-12 align-self-center text-center">
                <img class="bulb" src="./icons/lightbulb.svg" />
                <h4 class="text-light h3">Hello</h4>
                <p class="text-danger">New here?</p>
                <br />
                <br />
                <p class="text-secondary">
                    Enter your personal details to get started
                </p>
                <a class="btn btn-outline-light text-light font-weight-bold" id="switch1">
                    Sign In
                </a>
            </div>
        </div>
        <div class="row pt-5" style="min-height: 100vh;" id="page1">
            <div class="col col-md-12 align-self-center text-center">
                <img class="bulb" src="./icons/lightbulb.svg" />
                <form action="./src/backend/signup.php" method="POST" class="justify-content-center">
                    <div class="form-group col-8 col-md-4 p-2">
                        <input type="text" name="name" id="name" placeholder="Your full name" class="p-4 form-control form-control-lg color" />
                    </div>
                    <div class="form-group col-8 col-md-4 p-2">
                        <input type="text" name="email" id="email1" placeholder="Your email address" class="p-4 form-control form-control-lg color" />

                        <div class="invalid-feedback">
                            Enter a valid email address
                        </div>
                    </div>
                    <div class="form-group col-8 col-md-4 p-2">
                        <input type="password" name="password" id="password1" placeholder="Password" class="p-4 form-control form-control-lg color" />
                        <div class="invalid-feedback">
                            Password cannot be less than 8 characters long
                        </div>
                    </div>
                    <div class="form-group pt-3">
                        <input type="submit" name="submit" id="submit1" value="Register" class="p-3 btn btn-danger col-8 col-md-4" />
                    </div>
                    <a href="" id="signInLink" class="float-right col-9 forgot font-weight-bold d-md-none">
                        Sign In</a>

                    <p class="text-center col-12 float-right h6 text-danger pt-5">
                        OR<br /><br /><br />
                        <a href="#" class="">
                            <img src="./icons/facebook.svg" alt="" /></a>
                        <a href="#" class=" ">
                            <img src="./icons/google.svg" alt="" /></a>
                        <a href="#" class=" ">
                            <img src="./icons/linkedin.svg" alt="" /></a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./app.js"></script>
</body>

</html>