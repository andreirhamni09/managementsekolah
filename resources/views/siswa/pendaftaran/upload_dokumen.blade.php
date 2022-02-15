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
  <div class="login-box" style="width:80%;">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="login-logo" style="margin-bottom:-25px;position: relative; z-index: 10;">
          <img src="{{ asset('public/img/Logo GEC.png') }}" class="rounded" style="width:22.5%;">
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-header" style="background-color:#06B8FF;color:white;border-bottom:5px solid white;text-align:center;">
            <h3 class="mt-4 mx-auto">Upload Kelengkapan Dokumen</h3>
          </div>
          <div class="card-body login-card-body" style="background-color:#06B8FF;color:white;">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile" style="color: black;">Scan Ijazah</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <i style="color: black;">(Dapat diupload Setelah Ijazah Keluar)</i>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile" style="color: black;">Scan Nilai Akhir</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <i style="color: black;">(Dapat diupload Setelah Ijazah Keluar)</i>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile" style="color: black;">Scan KTP/KTP/Ijazah *</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile" style="color: black;">Foto Ukuran 3x4 *</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-block fluid mx-auto" style="background-color:#5656DE;color:white; width:60%;">
                    Upload Dokumen
                  </button>
                </div>
              </div>
            </form>
            <!-- /.social-auth-links -->

          </div>

          <!-- /.login-card-body -->
        </div>


      </div>
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('public/js/adminlte.min.js') }}"></script>

  <!-- SweetAlert2 -->
  <script src="{{ asset('public/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('public/plugins/toastr/toastr.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('public/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('public/js/demo.js') }}"></script>

  <script src="{{ asset('public/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      bsCustomFileInput.init();
    });

    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

</body>

</html>