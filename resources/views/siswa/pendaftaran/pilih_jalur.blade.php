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
    <div class="login-logo" style="margin-bottom:-25px;position: relative; z-index: 10;">
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
            <!-- JALUR MANDIRI -->
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
                      <span><i class="fas fa-user-circle fa-3x" style="color: black;"></i>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-check" style="text-align: center;">
                      <input class="form-check-input" type="radio" name="jalur">
                      <label class="form-check-label">
                        Mandiri
                        <i class="fas fa-question-circle" style="color:black;" data-toggle="modal" data-target="#modal-jalur-mandiri"></i>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Jalur Prestasi A -->
            <div class="col-md-4">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" style="text-align: center;">
                      <label>Prestasi A</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" style="text-align: center;">
                      <i class="fas fa-medal fa-3x" style="color: black;"></i>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-check" style="text-align: center;">
                      <input class="form-check-input" type="radio" name="jalur">
                      <label class="form-check-label">
                        Akademik
                        <i class="fas fa-question-circle" style="color:black;" data-toggle="modal" data-target="#modal-jalur-prestasi-a-akademik"></i>
                      </label>
                    </div>
                    <div class="form-check" style="text-align: center;">
                      <input class="form-check-input" type="radio" name="jalur">
                      <label class="form-check-label">
                        Nonakademik
                        <i class="fas fa-question-circle" style="color:black;" data-toggle="modal" data-target="#modal-jalur-prestasi-a-non-akademik"></i>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Jalur Prestasi B -->
            <div class="col-md-4">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <label class="form-group" style="margin-left:30%; margin-right:auto;">Prestasi B</label>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" style="text-align: center;">
                      <i class="fas fa-medal fa-3x" style="color: black;"></i>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-check" style="text-align: center;">
                      <input class="form-check-input" type="radio" name="jalur">
                      <label class="form-check-label">
                        Akademik
                        <i class="fas fa-question-circle" style="color:black;" data-toggle="modal" data-target="#modal-jalur-prestasi-b-akademik"></i>
                      </label>
                    </div>
                    <div class="form-check" style="text-align: center;">
                      <input class="form-check-input" type="radio" name="jalur">
                      <label class="form-check-label">
                        Nonakademik
                        <i class="fas fa-question-circle" style="color:black;" data-toggle="modal" data-target="#modal-jalur-prestasi-b-non-akademik"></i>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-block fluid mx-auto" style="background-color:#5656DE;color:white; width:80%;">
                Lanjut Pendaftaran
              </button>
            </div>
          </div>
        </form>
        <!-- /.social-auth-links -->

      </div>

      <!-- Modal Jalur Mandiri -->
      <div class="modal fade" id="modal-jalur-mandiri">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Jalur Mandiri</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Gelombang</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Potongan Biaya Kuliah</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Gelombang 1</td>
                    <td>12 Februari 2022 - 12 Maret 2021</td>
                    <td>10% Total Biaya Pendaftaran</td>
                  </tr>

                  <tr>
                    <td>Gelombang 2</td>
                    <td>12 Februari 2022 - 12 Maret 2021</td>
                    <td>5% Total Biaya Pendaftaran</td>
                  </tr>

                  <tr>
                    <td>Gelombang 2</td>
                    <td>12 Februari 2022 - 12 Maret 2021</td>
                    <td>0% atau Tidak Ada Potongan</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.login-card-body -->

      <!-- Modal Jalur Prestasi A Akademik -->
      <div class="modal fade" id="modal-jalur-prestasi-a-akademik">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Prestasi A Akademik</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Syarat</th>
                    <th>Keuntungan</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><b>Rangking 1-5 dari Sekolah</b></td>
                    <td rowspan="2" style="vertical-align: middle;">Kuliah Bebas SPP 50%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- Modal Jalur Prestasi A Non-akademik -->
      <div class="modal fade" id="modal-jalur-prestasi-a-non-akademik">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Prestasi A Non-akademik</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Syarat</th>
                    <th>Keuntungan</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><b>Juara Lomba Tingkat Nasional, Provisi, atau Kabupaten</b></td>
                    <td rowspan="2" style="vertical-align: middle;">Kuliah Bebas SPP 50%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.login-card-body -->

      <!-- Modal Jalur Prestasi B Akademik -->
      <div class="modal fade" id="modal-jalur-prestasi-b-akademik">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Prestasi B Akademik</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Syarat</th>
                    <th>Keuntungan</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><b>Rangking 6-10 dari Sekolah</b></td>
                    <td rowspan="2" style="vertical-align: middle;">Kuliah Bebas SPP 25%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- Modal Jalur Prestasi B Non-akademik -->
      <div class="modal fade" id="modal-jalur-prestasi-b-non-akademik">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Prestasi B Non-Akademik</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Syarat</th>
                    <th>Keuntungan</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><b>Juara Lomba Tingkat Kecamatan, Kelurahan, Desa, atau Sekolah</b></td>
                    <td rowspan="2" style="vertical-align: middle;">Kuliah Bebas SPP 25%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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

  <!-- SweetAlert2 -->
  <script src="{{ asset('public/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('public/plugins/toastr/toastr.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('public/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('public/js/demo.js') }}"></script>

  <script>
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