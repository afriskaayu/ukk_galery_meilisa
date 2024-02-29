<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GALERY MEILISA | Halaman Registrasi</title>

  <!-- Google Font: Source Sans Pro -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>Galery</b>Registrasi</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registrasi Member Baru</p>

      <form action="{{ route('postregister') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukan Nama Pengguna" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>  <span class="text-danger">
            @error('username')
                {{ $message }}
            @enderror
        </span>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Masukan Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
        </span>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Masukkan Kata Sandi" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
        </span>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Masukan Kata Sandi Lagi" name="repassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">
            @error('repassword')
                {{ $message }}
            @enderror
        </span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Yakin Ingin Registrasi <a href="#"></a>
              </label>
            </div>
          </div>
          <span class="text-danger">
            @error('terms')
                {{ $message }}
            @enderror
        </span>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="/login" class="text-center">Halaman Masuk </a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
