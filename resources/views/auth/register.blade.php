@extends('layouts.frontend')
@section('content')
<div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
      <form method="POST" action="{{ URL::route('register') }}">
        @csrf
        <span>Create Account</span>
        <div class="form-group">
          <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" required autofocus>
          {{-- @error('name')
                                    <span class="invalid-feedback alert alert-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
        </div>
        <div class="form-group">
          <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required>
          @error('email')
          {{-- <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span> --}}
      @enderror
        </div>
        <div class="form-group">
          <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
          {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
        </div>
        <div class="form-group">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="form-checkbox">
          <label class="custom-control-label" for="form-checkbox">I agree to the <a href="terms-condition.html">Terms &amp;
              Conditions</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
      </form>
      <h2>Already have an account? <a href="{{url('/login')}}">Sign in here</a></h2>
    </div>
  </div>
  @include('flash-message')

@endsection