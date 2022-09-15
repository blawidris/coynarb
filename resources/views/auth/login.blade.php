@extends('layouts.frontend')
@section('content')
<div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
      <form method="POST" action="{{ URL::route('login') }}">
        @csrf
        <span>Sign In</span>
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required autofocus>
        @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
        </div>
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="text-right">
          <a href="reset-password-dark.html">Forgot Password?</a>
        </div>
        <div class="custom-control custom-checkbox">
          <input name="remember" type="checkbox" class="custom-control-input" id="form-checkbox {{ old('remember') ? 'checked' : '' }}">
          <label class="custom-control-label" for="form-checkbox">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </form>
      <h2>Don't have an account? <a href="{{url('/register')}}">Sign up here</a></h2>
    </div>
  </div>
  @include('flash-message')
@endsection