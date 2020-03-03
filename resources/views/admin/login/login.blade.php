<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/datta-able/bootstrap/tab/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 19:35:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Datta Able - Signin</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="CodedThemes" />

    <link rel="icon" href="http://html.codedthemes.com/datta-able/bootstrap/assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/fonts/fontawesome/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/plugins/animation/css/animate.min.css">

    <link rel="stylesheet" href="{{asset('/')}}/admin/assets/css/style.css">
</head>
<body>
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="auth-bg">
            <span class="r"></span>
            <span class="r s"></span>
            <span class="r s"></span>
            <span class="r"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center">

                            <h3 class="mb-4 h1">Login</h3>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="submit" class="btn btn-primary btn-block shadow-2 mb-4" value="Login">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{asset('/')}}/admin/assets/js/vendor-all.min.js"></script><script src="{{asset('/')}}/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}/admin/assets/js/pcoded.min.js"></script>
</body>

<!-- Mirrored from html.codedthemes.com/datta-able/bootstrap/tab/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 19:35:19 GMT -->
</html>

