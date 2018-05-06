<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Project Manager v1.0</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Ahmed Said"/>
    <link rel="shortcut icon" href="{{asset('template/iconfav.ico')}}">
    <link rel="icon" href="{{asset('template/iconfav.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link href="{{asset('template/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('template/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper pa-0">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="index.html">
                <img class="brand-img mr-10" src="{{asset('template/dist/img/logo.png')}}" alt="brand"/>
                <span class="brand-text">Projects Manager v1.0</span>
            </a>
        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Sign in to Projects Manager</h3>
                                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                </div>
                                <div class="form-wrap">
                                    <form action="{{ url('/login') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Email
                                                address</label>
                                            <input type="email" name="email" class="form-control" required=""
                                                   id="exampleInputEmail_2" placeholder="Enter email">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>Entered email is not correct</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                            <a class="capitalize-font txt-primary block mb-10 pull-right font-12"
                                               href="forgot-password.html">forgot password ?</a>

                                            <div class="clearfix"></div>
                                            <input type="password" name="password" class="form-control" required=""
                                                   id="exampleInputpwd_2" placeholder="Enter pwd">
                                        </div>

                                        <div class="form-group">
                                            <div class="checkbox checkbox-primary pr-10 pull-left">
                                                <input id="checkbox_2" name="remember" type="checkbox">
                                                <label for="checkbox_2"> Keep me logged in</label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info btn-success btn-rounded">sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div style="width: 50%; margin: 10px auto; position: fixed; bottom: 0px; left: 0; right: 0;">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{route('contractor.login')}}" class="btn btn-danger btn-block"><i class="fas fa-user-shield"></i> Contractors Area</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('owner.login')}}" class="btn btn-success btn-block"><i class="fas fa-user-shield"></i> Owner Area</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('engineer.login')}}" class="btn btn-warning btn-block"><i class="fas fa-user-shield"></i> Engineer Area</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<script src="{{asset('template/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('template/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('template/dist/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('template/dist/js/init.js')}}"></script>
</body>
</html>
