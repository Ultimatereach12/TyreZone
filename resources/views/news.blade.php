<!-- create by R.G.Sainath kishore at 27-06-2019 intial commit-->
<!-- used editor Atom IDE -->
<!-- Admin -->
@extends('layouts.app')

@section('content')
<head>
    <title>TyreZone</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Ends here -->

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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

        #title{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #title:hover,
        #title:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #content:hover,
        #content:focus{
          border-top-right-radius: 100px;
          border-top-left-radius: 100px;
          border-bottom-right-radius: 100px;
          border-bottom-left-radius: 100px;
          padding: 70px;
          background-color: #E0F7FA;
          border-color: #5a6268;
          height: 300px;
        }

        #content{
            border-top-right-radius: 100px;
            border-top-left-radius: 100px;
            border-bottom-right-radius: 100px;
            border-bottom-left-radius: 100px;
            padding: 70px;
            border-color: #5a6268;
            height: 300px;
        }

        .titleIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 10px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .contentIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 190px 40px;
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
        <a class="navbar-brand" href=""><strong>TyreZone</strong></a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to("/home") }}" id="home" name="home">Create User</a></li>
        <li class="active"><a href="{{ URL::to("/news") }}" id="news" name="news">News and Events</a></li>
        <li><a href="{{ URL::to("/emergency") }}" id="emergency" name="emergency">Emergency Pickup</a></li>
        <li><a href="{{ URL::to("/arrange") }}" id="arrange" name="arrange">Arrange Pickup</a></li>
        <li><a href="{{ URL::to("/updates") }}" id="updates" name="updates">Updates</a></li>
        <li><a href="{{ URL::to("/") }}" id="logout" name="logout">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- fixed nav bar end -->
<div class="container" style="padding-top: 300px;">
    <div class="row justify-content-center">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <label><h2>News & Events</h2></label>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <form id="news" method="POST" role="form" action="{{ URL::to("/news") }}" style="display: block;">
                            {{ csrf_field() }}
                              <div class="form-group">
                                <div class="titleIcon">
                                  <input type="text" name="title" id="title" tabindex="1" class="form-control" placeholder="Title" value="">
                                  <i class="fa fa-newspaper-o fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="contentIcon">
                                  <textarea name="content" id="content" tabindex="2" class="form-control" placeholder="Start typing..." value=""></textarea>
                                  <i class="fa fa-pencil fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col-sm-6 col-sm-offset-3">
                                          <input type="submit" name="publish" id="publish" tabindex="4" class="form-control btn btn-login" value="Publish">
                                      </div>
                                  </div>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $("#create_user").click(function(){
      var title = document.getElementById("title").value;
      var content = document.getElementById("content").value;

      if (title == "" && content == "") {
        $("#title").css("background-color","#FBE9E7");
        $("#title").css("border-color","#D84315");
        $("#content").css("background-color","#FBE9E7");
        $("#content").css("border-color","#D84315");
        return false;
      }
      else if (title == ""){
        $("#title").css("background-color","#FBE9E7");
        $("#title").css("border-color","#D84315");
        return false;
      }
      else if (content == ""){
        $("#content").css("background-color","#FBE9E7");
        $("#content").css("border-color","#D84315");
        return false;
      }
    });

    $("#content").keyup(function(){
      var content1 = document.getElementById("content").value;
      if (id.length >= 50){
        $("#content").css("background-color","#C8E6C9");
        $("#content").css("border-color","#388E3C");
      } else {
        $("#content").css("background-color","#FBE9E7");
        $("#content").css("border-color","#D84315");
      }
    });

    $("#title").keyup(function(){
      var title1 = document.getElementById("title").value;
      if (title1.length >= 10){
        $("#title").css("background-color","#C8E6C9");
        $("#title").css("border-color","#388E3C");
      } else {
        $("#title").css("background-color","#FBE9E7");
        $("#title").css("border-color","#D84315");
      }
    });

    $('html, body').animate({scrollTop: '150px'}, 800);
</script>
</html>
<!-- Completed by Sainath kishore.R.G at 18-06-2019 -->
