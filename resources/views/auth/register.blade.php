<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/')}}dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/iCheck/square/blue.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition register-page">

<div class="register-box" style="margin-top: 14px">

    <div class="register-logo">
        <a href=""><b>Complete The Form</b></a>
    </div>

    <div class="card">

        <div class="card-body register-card-body">

            <p class="login-box-msg">Register a new membership</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group has-feedback">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>

                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                </div>

                <div class="row">

                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>


                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>

                </div>

            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>

                <a href="{{route('login')}}" class="btn btn-block btn-danger">
                    I already have a membership
                </a>

                <a href="{{route('password.request')}}" class="btn btn-block btn-primary">
                    I Forget My Password
                </a>
            </div>

        </div>

    </div>
</div>


<!-- jQuery -->
<script src="{{asset('/')}}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="{{asset('/')}}plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        })
    })
</script>
</body>
</html>
