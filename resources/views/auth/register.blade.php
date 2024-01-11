<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/user.jpg') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="account-page bglogin">
    <!-- Main Wrapper -->
    <div id="form_wrapper">
        <div id="form_left">
            <img src="assets\img\icon.png" alt="computer icon">
        </div>
        <div id="form_right">
            <div class="account-content">
                <div class="container">
                   <div class="">
                      <div class="account-wrapper">
                         <h3 class="account-title">Pendaftaran</h3>
                         <p class="account-subtitle">Penggajian Karyawan X</p>
                         <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                               <label>Name</label>
                               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                               @error('name')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                            </div>
                            <div class="form-group">
                               <label> Alamat Email</label>
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                               @error('email')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                            </div>
                            <div class="form-group">
                               <label>Kata sandi</label>
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                               @error('password')
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                            </div>
                            <div class="form-group">
                               <label>Konfirmasi Sandi</label>
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group text-center">
                               <button class="btn btn-primary account-btn" type="submit">Daftar</button>
                            </div>
                            <div class="account-footer">
                                <p>Apakah sudah punya akun? <a href="/login">Masuk</a></p>
                            </div>
                         </form>
                         <!-- /Account Form -->
                      </div>
                   </div>
                </div>
             </div>
        </div>
    </div>
</body>

</html>
