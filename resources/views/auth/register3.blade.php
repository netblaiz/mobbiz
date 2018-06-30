@extends('layouts.reglog')

@section('content')

 <section class="section_gradiant small_pb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 col-md-12 col-sm-12 order-lg-first text-center">
            <div class="banner_text pt-5 res_md_mt_20">
              <h1><span></span> Create Account</h1>
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
                            <h2>REGISTER</h2>
                        </div>
                        <div class="authorize_form">
                            <form method="POST" action="{{ route('register') }}">
                                 @csrf
                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="identity" name="identity" placeholder="BVN or RC Number" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="E-mail" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password-field" name="password" placeholder="Password" required/>
                                    <span data-toggle="#password-field" class="ion-eye toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="cpassword-field" name="password" placeholder="Confirm Password" required/>
                                    <span data-toggle="#cpassword-field" class="ion-eye toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox_field d-inline">
                                        <input type="checkbox" value="rememberme" id="rememberme" name="rememberme">
                                        <label for="rememberme">I agree with <a href="/terms">Terms of Services</a></label>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-default">Sign Up</button>
                                </div>
                                <div class="form-group text-center">
                                    <span>Back to <a href="login"><u>Login</u></a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
