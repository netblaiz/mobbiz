@extends('layouts.reglog')

@section('content')

 <section class="section_gradiant small_pb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 col-md-12 col-sm-12 order-lg-first text-center">
            <div class="banner_text pt-5 res_md_mt_20">
              <h1><span></span> My Account</h1>
          </div>
          
        </div>
        </div>
      </div>
    </section>
    <!-- END SECTION BANNER --> 

    <!-- START SECTION BLOG LIST -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="authorize_box">
                        
                        <div class="title_dark text-center">
                            <h2>Login</h2>
                        </div>
                        <div class="authorize_form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus/>
                                     @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password-field" name="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required/>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    <span data-toggle="#password-field" class="ion-eye toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox_field d-inline">
                                        <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }} name="remember">
                                        <label for="rememberme">Remember me</label>
                                    </div>
                                    <a href="recover-password" class="forgot_pass">Forgot Password?</a>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-default">Login</button>
                                </div>
                                <div class="form-group text-center">
                                    <span>if you don't have an account <a href="register"><u>Sign Up</u></a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
