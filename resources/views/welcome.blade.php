
@extends('layouts.auth')

@section('content')
<style>
/* .body {
    background-image: url("/wallpaper.jpg");height:100%;
} */
 .navbar .transparent .navbar-inner {
    border-width: 0px;
    -webkit-box-shadow: 0px 0px;
    box-shadow: 0px 0px;
    background-color: rgba(0,0,0,0.0);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div class="container-fluid">
        <nav class="navbar transparent">
            <div class="navbar-inner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar">---</span>
                            <span class="icon-bar">---</span>
                            <span class="icon-bar">---</span>                        
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">

                            <b style="color:white">{{ config('app.name', 'Laravel') }}</b>

                        </a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            @if (Route::has('login'))
                
                                @if (Auth::check())
                                    <li><a href="{{ url('/home') }}"><span style="color:white" class="glyphicon glyphicon-home"></span><b style="color:white"> Home</b></a></li>
                                @else          
                                    <li><a href="{{ url('/register') }}"><span style="color:white" class="glyphicon glyphicon-user"></span><b style="color:white"> Registration</b></a></li>
                                @endif
                        
                            @endif
                    
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
  

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <center>

                    <br>
                        <div class="title">                        
                            <!-- <h1>@lang('titles.app') </h1>  -->
                            <h1 style="color:white">Ameyem Skill Development Portal </h1>
                        </div>     
                    <br>                  

                </center>
            </div>
        </div>
    </div>


        
<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading"><center><h2>Ameyem Skills Login</h2></center></div>
                    
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
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
                            
                            <div class="form-group margin-bottom-3">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <span><b>Or</b></span>
                                    {{--  <button  class="btn btn-success">  --}}
                                        <a class="btn btn-success" href="{{ route('register') }}"><b style="color:white">Register</b></a>   
                                    {{--  </button>  --}}
                                
                                </div>

                                <div class="col-md-8 col-md-offset-4">
                                    
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
        <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrolldelay="50">
            <label>How to Use this Portal? -Students </label><a class="btn" href="/download/ASDP-Welcome-StudentGuide.pdf" ><b style="color:white"><i class="fa fa-download"></b></i></a>
            <label>How to Use this Portal? -Teachers </label><a class="btn btn-small" href="/download/ASDP-Welcome-TeacherGuide.pdf" ><b style="color:white"><i class="fa fa-download"></b></i></a>
            <label>Shape your career.. PPT </label><a class="btn btn-small" href="/download/Shape your Career- A ppt for Students.pdf"><b style="color:white"><i class="fa fa-download"></b></i></a>
        </marquee>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <footer class="page-footer font-small blue pt-4 mt-4">
                <center>
                        <h4>
                        <a href="http://skills.ameyem.com"><b style="color:white">Ameyem Skill Labs</b></a>|
                        <a href="http://skills.ameyem.com/quiz"><b style="color:white">Ameyem Quiz</b></a>|
                        <a href="http://skills.ameyem.com/Typing-Game/Typing_Game.html"><b style="color:white">Ameyem Apps and Games</b></a>|
                        <a href="http://skills.ameyem.com/bookslot/slot.html"><b style="color:white">Ameyem Seminar Booking</b></a>|
                        <a href="http://sthali.in/"><b style="color:white">Sthali</b></a>
                    </h4>

                </center>
        </footer>
        </div>

        <div class="col-md-12">
                <!--Copyright-->
            <div class="footer-copyright py-3 text-center">
                © 2018 Copyright:
                <a href="https://skill.ameyem.com"> <b style="color:green">ameyem.com </b></a>
            </div>
        </div>
    </div>
</div>


{{--  <br><br><br><br><br><br><br><br><br><br><br><br><br>  --}}


{{--  @include("partials.footer")  --}}


@endsection
  
