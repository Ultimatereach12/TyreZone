<!-- create by R.G.Sainath kishore at 27-06-2019 intial commit-->
<!-- used editor Atom IDE -->
<!-- SuperAdmin -->
@extends('layouts.app')

@section('content')
<head>
    <title>TyreZone</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--Ends here -->

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!------ Bootstrap Ends ---------->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="../assets/bootstrap/google_font_api.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts Ends -->

    <!-- Design CSS -->
    <style>
        body {
            padding-top: 0px;
        }
        .panel-login {
            border-color: #ccc;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        }
        .panel-login>.panel-heading {
            color: #00415d;
            background-color: #fff;
            border-color: #fff;
            text-align:center;
        }
        .panel-login>.panel-heading a{
            text-decoration: none;
            color: #666;
            font-weight: bold;
            font-size: 15px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        .panel-login>.panel-heading a.active{
            color: #029f5b;
            font-size: 18px;
        }
        .panel-login>.panel-heading hr{
            margin-top: 10px;
            margin-bottom: 0px;
            clear: both;
            border: 0;
            height: 1px;
            background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
            background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        }
        .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
            height: 45px;
            border: 1px solid #ddd;
            font-size: 16px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        .panel-login input:hover,
        .panel-login input:focus {
            outline:none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-color: #ccc;
        }
        .btn-login {
            background-color: #59B2E0;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #59B2E6;
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
        }
        .btn-login:hover,
        .btn-login:focus {
            color: #fff;
            background-color: #1c7430;
            border-color: #1c7430;
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
        }
        .forgot-password {
            text-decoration: underline;
            color: #888;
        }
        .forgot-password:hover,
        .forgot-password:focus {
            text-decoration: underline;
            color: #666;
        }

        .btn-register {
            background-color: #1CB94E;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }
        .btn-register:hover,
        .btn-register:focus {
            color: #fff;
            background-color: #1CA347;
            border-color: #1CA347;
        }

        #mobile{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #mobile:hover,
        #mobile:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #user_id:hover,
        #user_id:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #user_id{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #password{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #password:hover,
        #password:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #username:hover,
        #username:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #username{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #email:hover,
        #email:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #email{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #address:hover,
        #address:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #address{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .usernameIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 70px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .passwordIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 250px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .useridIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 10px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .emailIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 190px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .mobileIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 130px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .addressIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 310px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        i.fa{
            font-size: 30px;
        }
    </style>
    <!-- Design CSS Ends -->

</head>
<body>
  <!-- fixed nav bar starts -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="">TyreZone</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="" id="home" name="home">Create Admin</a></li>
        <li><a href="" id="news" name="news">Production Status</a></li>
        <li><a href="" id="shop" name="shop">Create Shop</a></li>
        <li><a href="" id="change_password" name="change_password">Change Password</a></li>
        <li><a href="" id="lock_user" name="lock_user">Lock User</a></li>
        <li><a href="{{ URL::to("/") }}" id="logout" name="logout">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- fixed nav bar ends -->
<div class="container" style="padding-top: 200px;">
    <div class="row justify-content-center">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <label><h2>Create User</h2></label>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="home" method="POST" role="form" action="{{ URL::to("/superadmin") }}" style="display: block;">
                              {{ csrf_field() }}
                              <div class="form-group">
                                <div class="useridIcon">
                                  <input type="text" name="user_id" id="user_id" tabindex="1" class="form-control" placeholder="User ID" value="" maxlength="8">
                                  <i class="fa fa-id-card fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="usernameIcon">
                                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="User Name" value="" maxlength="20">
                                  <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                                <div class="form-group">
                                  <div class="mobileIcon">
                                    <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile Number" value="" maxlength="10">
                                    <i class="fa fa-mobile fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="emailIcon">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" maxlength="40">
                                    <i class="fa fa-envelope-o fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="passwordIcon">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" maxlength="20">
                                    <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="addressIcon">
                                    <select name="address" id="address" tabindex="2" class="form-control">
                                      <option selected value="0">-- Select the shop --</option>
                                    </select>
                                    <i class="fa fa-location-arrow fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="admin" id="admin" tabindex="4" class="form-control btn btn-login" value="Create Admin">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="panel-body" style="display: none;">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" method="POST" role="form" action="{{ URL::to("/index") }}" style="display: block;">
                              {{ csrf_field() }}
                                <div class="form-group">
                                  <div class="usernameIcon">
                                    <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Username" value="">
                                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="passwordIcon">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="addressIcon">
                                    <input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Password">
                                    <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="create" id="create" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $("#admin").click(function(){
      var id = document.getElementById("user_id").value;
      var pass = document.getElementById("password").value;
      var username = document.getElementById("username").value;
      var mobile = document.getElementById("mobile").value;
      var email = document.getElementById("email").value;
      var address = document.getElementById("address").value;

      if (id == "" && username == "" && mobile == "" && email == "" && pass == "" && address == "0") {
        $("#mobile").css("background-color","#FBE9E7");
        $("#mobile").css("border-color","#D84315");
        $("#password").css("background-color","#FBE9E7");
        $("#password").css("border-color","#D84315");
        $("#username").css("background-color","#FBE9E7");
        $("#username").css("border-color","#D84315");
        $("#user_id").css("background-color","#FBE9E7");
        $("#email").css("background-color","#FBE9E7");
        $("#email").css("border-color","#D84315");
        $("#user_id").css("border-color","#D84315");
        $("#address").css("background-color","#FBE9E7");
        $("#address").css("border-color","#D84315");
        return false;
      }
      else if (id == ""){
        $("#user_id").css("background-color","#FBE9E7");
        $("#user_id").css("border-color","#D84315");
        return false;
      }
      else if (mobile == ""){
        $("#mobile").css("background-color","#FBE9E7");
        $("#mobile").css("border-color","#D84315");
        return false;
      }
      else if (username == ""){
        $("#username").css("background-color","#FBE9E7");
        $("#username").css("border-color","#D84315");
        return false;
      }
      else if (email == ""){
        $("#email").css("background-color","#FBE9E7");
        $("#email").css("border-color","#D84315");
        return false;
      }
      else if (pass == "") {
        $("#password").css("background-color","#FBE9E7");
        $("#password").css("border-color","#D84315");
        return false;
      }
      else if (address != "0") {
        $("#address").css("background-color","#FBE9E7");
        $("#address").css("border-color","#D84315");
        return false;
      }
    });

    $("#mobile").keypress(function(e){
      var mobile1 = document.getElementById("mobile").value;
      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          return false;
      } else {
        if (mobile1.length == 9){
          $("#mobile").css("background-color","#C8E6C9");
          $("#mobile").css("border-color","#388E3C");
        } else {
          $("#mobile").css("background-color","#FBE9E7");
          $("#mobile").css("border-color","#D84315");
        }
      }
    });

    $("#password").keyup(function(){
      var password1 = document.getElementById("password").value;
      if (password1.length >= 6){
        $("#password").css("background-color","#C8E6C9");
        $("#password").css("border-color","#388E3C");
      } else {
        $("#password").css("background-color","#FBE9E7");
        $("#password").css("border-color","#D84315");
      }
    });

    $("#user_id").keyup(function(){
      var id1 = document.getElementById("user_id").value;
      if (id1.length >= 6){
        $("#user_id").css("background-color","#C8E6C9");
        $("#user_id").css("border-color","#388E3C");
      } else {
        $("#user_id").css("background-color","#FBE9E7");
        $("#user_id").css("border-color","#D84315");
      }
      var fin_id = id1.toUpperCase();
      document.getElementById("user_id").value = fin_id;
    });

    $("#username").keyup(function(){
      var username1 = document.getElementById("username").value;
      if (username1.length >= 5){
        $("#username").css("background-color","#C8E6C9");
        $("#username").css("border-color","#388E3C");
      } else {
        $("#username").css("background-color","#FBE9E7");
        $("#username").css("border-color","#D84315");
      }
    });

    $("#email").keyup(function(){
      var email1 = document.getElementById("email").value;
      if (email1.length >= 10){
        $("#email").css("background-color","#C8E6C9");
        $("#email").css("border-color","#388E3C");
      } else {
        $("#email").css("background-color","#FBE9E7");
        $("#email").css("border-color","#D84315");
      }
    });

    $("#address").keyup(function(){
      var e = document.getElementById("address");
      var selected = e.options[e.selectedIndex].value;
      if (selected == "0"){
        $("#address").css("background-color","#C8E6C9");
        $("#address").css("border-color","#388E3C");
      } else {
        $("#address").css("background-color","#FBE9E7");
        $("#address").css("border-color","#D84315");
      }
    });

    $.post('/superadmin/index', function(response){
        if(response.success)
        {
            alert(response);
        }
    }, 'json');
</script>
</html>
<!-- Completed by Sainath kishore.R.G at 18-06-2019 -->