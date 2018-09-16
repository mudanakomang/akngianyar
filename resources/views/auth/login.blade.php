<link href="{{ asset('css/bootstrap4.min.css') }}" rel="stylesheet" id="bootstrap-css">
<script src="{{ asset('js/jquery3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap4.min.js') }}"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
    body{
        padding-top: 60px;
    }
    @import url("{{ asset('css/font-awesome.css') }}");
    .login-block{
        background: #DE6262;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        float:left;
        width:100%;
        padding : 50px 0;
    }
    .banner-sec{background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
    .container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
    .carousel-inner{border-radius:0 10px 10px 0;}
    .carousel-caption{text-align:left; left:5%;}
    .login-sec{padding: 50px 30px; position:relative;}
    .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
    .login-sec .copy-text i{color:#FEB58A;}
    .login-sec .copy-text a{color:#E36262;}
    .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
    .login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
    .btn-login{background: #DE6262; color:#fff; font-weight:600;}
    .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
    .banner-text h2{color:#fff; font-weight:600;}
    .banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
    .banner-text p{color:#fff;}
</style>
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login</h2>


                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    @if(session()->has('login_error'))
                        <div class="alert alert-danger">
                            {{ session()->get('login_error') }}
                        </div>
                    @endif
                    <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
                        <label for="identity" class="control-label">Email / Username</label>


                            <input id="identity" type="identity" class="form-control" name="identity" placeholder="Email / Username"
                                   value="{{ old('identity') }}" autofocus>

                            @if ($errors->has('identity'))
                                <span class="help-block">
                                        <strong class=" alert-danger">{{ $errors->first('identity') }}</strong>
                                    </span>
                            @endif
                        </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>


                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block ">
                                        <strong class="alert-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                            <button type="submit" class="btn btn-login float-right">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Lupa Password?
                            </a>

                    </div>
                </form>

            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{ asset('images/pexels-photo.jpg') }}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ asset('images/people-coffee-tea-meeting.jpg') }}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ asset('images/pexels-photo-872957.jpeg') }}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>