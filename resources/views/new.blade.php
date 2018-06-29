@extends('layouts.app')

@section('content')
   <div id="token" class="section_token">
        <div class="container">
            <form action="new" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <div class="authorize_box">
                            <div class="title_dark text-center">
                                <h2> BETWEEN </h2>
                            </div>
                            <div class="authorize_form">
                                <div class="form-group">
                                    <input type="text" name="creating_party_name" placeholder="Name" required value="Current User Name" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="creating_party_email" placeholder="Email Address" required value="Current User Email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="creating_party_phone" placeholder="Phone Number" required value="Current User Phone Number" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-5">
                        <div class="authorize_box">
                            <div class="title_dark text-center">
                                <h2>AND</h2>
                            </div>
                            <div class="authorize_form">
                                <div class="form-group">
                                    <input type="text" name="creating_party_name" placeholder="Name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="creating_party_email" placeholder="Email Address" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="creating_party_phone" placeholder="Phone Number" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ADD MORE PARTY FORM FOR REPEATITION -->
                    <!-- <div class="col-md-5">
                        <div class="authorize_box">
                            <div class="title_dark text-center">
                                <h2>AND</h2>
                            </div>
                            <div class="authorize_form">
                                <div class="form-group">
                                    <input type="text" name="creating_party_name" placeholder="Name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="creating_party_email" placeholder="Email Address" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="creating_party_phone" placeholder="Phone Number" required/>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-md-2">
                        <div class="">
                            <br>
                            <div class="divider small_divider"></div>
                            <!-- <div class="title_dark text-center">
                                <h2>AND</h2>
                            </div> -->
                            <a href="" class="btn btn-default"> Add More <i class="ion-plus"></i></a> 
                        </div>
                    </div>


                </div>

                <hr>

                <div class="row">

                    <div class="col-md-6 offset-md-3" style="margin: 0 auto; ">
                        <div class="" style="padding-bottom: 35px;">
                            <a href="load" class="btn btn-default"><span class="ion-upload"> </span> Upload Agreement </a>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection
