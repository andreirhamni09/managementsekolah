<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pendaftaran</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        .jalur input[type="radio"] {
            display: none;
        }

        .jalur input[type="radio"]+i {
            cursor: pointer;
        }

        .jalur input[type="radio"]:checked+i {
            outline: 2px solid #f00;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box" style="width:40%;">
        <div class="login-logo" style="margin-bottom:-25px;position: relative; z-index: 9999;">
            <img src="{{ asset('public/img/Logo GEC.png') }}" class="rounded" style="width:40%;">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-header" style="background-color:#06B8FF;color:white;border-bottom:5px solid white;text-align:center;">
                <h3 class="mt-4 mx-auto">JALUR</h3>
            </div>
            <div class="card-body login-card-body" style="background-color:#06B8FF;color:white;">

                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="text-align: center;">
                                            <label>Mandiri</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group jalur" style="text-align: center;">
                                            <span><i class="fas fa-user-alt fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check" style="text-align: center;">
                                            <input class="form-check-input" type="radio" name="prestasi_a">
                                            <label class="form-check-label">Akademik<abbr class="pl-2" title="Mantap"><i class="fas fa-question-circle"></i></abbr></label>
                                        </div>
                                        <div class="form-check" style="text-align: center;">
                                            <input class="form-check-input" type="radio" name="prestasi_a">
                                            <label class="form-check-label">Nonakademik<abbr class="pl-2" title="Mantap"><i class="fas fa-question-circle"></i></abbr></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="text-align: center;">
                                            <label>Mandiri</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" style="text-align: center;">
                                            <i class="fas fa-user-alt fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check" style="text-align: center;">
                                            <input class="form-check-input" type="radio" name="prestasi_a">
                                            <label class="form-check-label">Akademik<abbr class="pl-2" title="Mantap"><i class="fas fa-question-circle"></i></abbr></label>
                                        </div>
                                        <div class="form-check" style="text-align: center;">
                                            <input class="form-check-input" type="radio" name="prestasi_a">
                                            <label class="form-check-label">Nonakademik<abbr class="pl-2" title="Mantap"><i class="fas fa-question-circle"></i></abbr></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-group" style="margin-left:30%; margin-right:auto;">Prestasi B</label>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" style="text-align: center;">
                                            <i class="fas fa-user-alt fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check" style="text-align: center;">
                                            <input class="form-check-input" type="radio" name="prestasi_b">
                                            <label class="form-check-label">Akademik<abbr class="pl-2" title="Mantap"><i class="fas fa-question-circle"></i></abbr></label>
                                        </div>
                                        <div class="form-check" style="text-align: center;">
                                            <input class="form-check-input" type="radio" name="prestasi_b">
                                            <label class="form-check-label">Nonakademik<abbr class="pl-2" title="Mantap"><i class="fas fa-question-circle"></i></abbr></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-block fluid mx-auto" style="background-color:#5656DE;color:white; width:80%;">
                                <label>Lanjut Pendaftaran</label>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- /.social-auth-links -->

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/js/adminlte.min.js') }}"></script>

</body>

</html>