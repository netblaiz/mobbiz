@extends('layouts.app')

@section('content')
    <div id="token" class="section_token">
        <div class="container">
            <form action="dashboard" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="authorize_box">
                            <!-- <div class="title_dark text-center">
                                <h2> BETWEEN </h2>
                            </div> -->
                            <div class="authorize_form">
                                <!-- <div class="form-group">
                                    <input type="file" name="agreement" placeholder="Upload Agreement" required />
                                </div> -->
                                <div class="form-group">
                                    <select name="agreement" placeholder="Upload Agreement" required >
                                        <option> Use Template</option>
                                        <option value=""> Partnership Agreement </option>
                                        <option value=""> Employment Agreement </option>
                                        <option value=""> Non disclosure Agreement </option>
                                        <option value=""> Service Level Agreement </option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- <textarea name="agreement_content" class="summernote" placeholder="Agreement Content" required></textarea> -->
                        <!-- <div class="summernote">Hello Summernote</div> -->

                        <textarea class="wysihtml5" rows="30" placeholder="Paste your agreement here or Get started with a template"></textarea>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-md-6 offset-md-3" style="margin: 0 auto; ">
                        <div class="" style="padding-bottom: 35px;">
                            <button type="submit" class="btn btn-default"><span class="ion-disc"> </span> Save as Template </button>
                            <button type="submit" class="btn btn-default pull-right"><span class="ion-android-send"> </span> Send </button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
    
@endsection
  <script type="text/javascript" src="bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

    <!--form validation init-->
    <script src="summernote/summernote.min.js"></script>

    <script src="js/jquery.app.js"></script>

    <script>

        jQuery(document).ready(function(){
            $('.wysihtml5').wysihtml5();

            $('.summernote').summernote({
                height: 200,                 // set editor height

                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor

                focus: true                 // set focus to editable area after initializing summernote
            });

        });
    </script>