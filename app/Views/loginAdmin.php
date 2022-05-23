<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Ticket System System Management</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->include('include/head') ?>
</head>

<body>
    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100">
                <div class="col-xl-4 col-lg-4 col-md-4 m-auto">
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <a href="#">
                                <h6> Ticket </h6>
                            </a>
                        </div>
                        <p>Welcome back! </p>
                        <form method="POST" action="<?php echo '/dashboard' ?>">
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="alaeldinmusa91@gmail.com" required autocomplete="email" autofocus>
                                <i class="ik ik-user"></i>
                                <span class="invalid-feedback" role="alert">
                                </span>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                                <i class="ik ik-lock"></i>
                                <span class="invalid-feedback" role="alert">
                                </span>
                            </div>
                            <div class="sign-btn text-center">
                                <button class="btn btn-success">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><?= $this->include('include/script') ?>
</body>

</html>