<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link href="{{url('frontend/css/stylesheet.css')}}" rel="stylesheet">
</head>
<body>
    <header>
        <i class="fa-solid fa-bars" id="toggle-menu"></i>

        <div class="logo">
            <a href="#" class="header-logo">Eco-Green</a>
        </div>

        <nav class="nav" id="nav-menu">
            <i class="fa-solid fa-xmark" id="close-menu"></i>
            <ul class="nav-list">
                <li class="nav-item"><a href="" class="nav-links">Home</a></li>
                <li class="nav-item"><a href="" class="nav-links">Properties</a></li>
                <li class="nav-item"><a href="" class="nav-links">Blog</a></li>
                <li class="nav-item"><a href="" class="nav-links">Contact us</a></li>
            </ul>
        </nav>

        <div class="user">
            <i class="fa-solid fa-phone" id="phone-icon"></i>
            <a href="tel: +92 (344) 3945602" id="ph-no">+92 (344) 3945602</a>
            <i class="fa-solid fa-circle-user" id="user-login-btn"></i>
        </div>

    </header>
 <!-- user login and registration form -->
 <div class="form-wrapper" id="form-wrapper-show">
        <div class="form-wrapper-container">

            <div class="content-container">
                <i class="fa-solid fa-xmark" id="form-closing-btn"></i>
                <div class="form-container register-hide" id="register-form">
                    <h2>Create an account</h2>
                    <form action="{{route('user.signup')}}" method="post">
                        @csrf
                        <div class="input-container">
                            <input type="text" name="name" placeholder="Username">
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-container">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-container">
                            <input type="password" name="cpassword" placeholder="Retype Password">
                        </div>
                        <div class="user-agree-container">
                            <label>
                                <input type="checkbox" name="user-agree ment">
                                I agree with terms & conditions
                            </label>
                        </div>
                        <div class="input-container">
                            <input type="submit" value="Register" name="">
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>


                    <div class="login-signup-btn" id="login-btn">
                        <span class="text">Already member
                            <a href="#">Login</a>
                        </span>
                    </div>
                    
                </div>

                <div class="form-container login-hide" id="login-form">
                    <h2>Sign In</h2>
                    <form action="{{route('user.signin')}}" method="post">
                        @csrf
                        <div class="input-container">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-container">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-container">
                            <input type="submit" value="Login" name="">
                        </div>

                        <div class="login-bottom-box">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logcheck">
                                <label>Remember me</label>
                            </div>
                            <a href="forget password">Forget password ?</a>
                        </div>
                        <div class="error">
                            {{session('error')}}
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>
                    
                    <div class="login-signup-btn" id="login-signup-btn">
                        <span class="text">Not memeber a 
                            <a href="#">register</a>
                        </span>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
