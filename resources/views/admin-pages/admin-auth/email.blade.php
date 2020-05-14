@extends('layouts.admin-auth')
@section('title')
    Admin Login
@endsection
@section('auth-content')
<div class="card">
    @if (session('status'))
      <div class="alert alert-success" role="alert" style="margin-top:20px;">
          {{ session('status') }}
      </div>
    @endif
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
     
      <form action="{{ route('admin.password.email') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{ route('admin.login.get') }}">Login</a>
      </p>
     
    </div>
    <!-- /.login-card-body -->
  </div>
@endsection