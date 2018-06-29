@extends('layouts.reglog')

@section('content')
<section class="section_gradiant small_pb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 col-md-12 col-sm-12 order-lg-first text-center">
            <div class="banner_text pt-5 res_md_mt_20">
              <h1><span></span> Forgot Password</h1>
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
                            <h2>Lost your password?</h2>
                        </div>
                        <div class="authorize_form">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="E-mail" required/>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-default">Reset Password</button>
                                </div>
                                <div class="form-group text-center">
                                    <span>Back to <a href="/login"><u>Login</u></a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
