<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body>

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="loader-wrapper">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="card card-authentication1 mx-auto my-5">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="assets/images/logo-icon.png" alt="logo icon">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Sign In</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername" class="sr-only">Username</label>
                            <div class="position-relative has-icon-right">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <div class="position-relative has-icon-right">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <div class="icheck-material-primary">
                                    <input type="checkbox" id="user-checkbox" checked="" />
                                    <label for="user-checkbox">Remember me</label>
                                </div>
                            </div>
                            <div class="form-group col-6 text-right">
                                <a href="authentication-reset-password.html">Reset Password</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        <div class="text-center mt-3">Sign In With</div>

                        <div class="form-row mt-4">
                            <div class="form-group mb-0 col-6">
                                <button type="button" class="btn bg-facebook text-white btn-block"><i
                                        class="fa fa-facebook-square"></i> Facebook</button>
                            </div>
                            <div class="form-group mb-0 col-6 text-right">
                                <button type="button" class="btn bg-twitter text-white btn-block"><i
                                        class="fa fa-twitter-square"></i> Twitter</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card-footer text-center py-3">
                <p class="mb-0">Do not have an account? <a href="authentication-signup.html"> Sign Up here</a></p>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->



    </div><!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

</body>

</html>
