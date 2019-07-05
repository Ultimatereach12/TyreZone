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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script> -->
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

        #retype_password:hover,
        #retype_password:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #retype_password{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #change_password{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #change_password:hover,
        #change_password:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        .passwordIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 10px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .retypeIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 70px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        #client:hover,
        #client:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #client{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        #find:hover,
        #find:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #find{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .findIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 10px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        #base_client:hover,
        #base_client:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #base_client{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .baseClientIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 10px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        #base_puncture:hover,
        #base_puncture:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #base_puncture{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .basePunctureIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 10px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        #base_alignment:hover,
        #base_alignment:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #base_alignment{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .baseAlignmentIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 10px 40px;
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
        <li><a href="{{ URL::to("/news") }}" id="news" name="news">News and Events</a></li>
        <li><a href="{{ URL::to("/emergency") }}" id="emergency" name="emergency">Emergency Pickup <strong style="color: #D84315"><?php $notify = DB::select("SELECT * FROM arrange_pickup WHERE is_emergency = 1 and pick_up_arranged = 0");
        echo count($notify); ?></strong></a></li>
        <li><a href="{{ URL::to("/arrange") }}" id="arrange" name="arrange">Arrange Pickup <strong style="color: #D84315"><?php $notify = DB::select("SELECT * FROM arrange_pickup WHERE is_emergency = 0 and pick_up_arranged = 0");
        echo count($notify); ?></strong></a></li>
        <li class="active"><a href="{{ URL::to("/updates") }}" id="updates" name="updates">Updates</a></li>
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
                          <label><h2>Shop ID:<?php echo $shop_get = session()->get('shop_ids'); ?></h2></label>
                      </div>
                  </div>
                  <hr>
              </div>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <label><h2>Change password</h2></label>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <form id="updates" method="POST" role="form" action="{{ URL::to("/updates") }}" style="display: block;">
                            {{ csrf_field() }}
                            <?php
                               $my_mobile = session()->get('mobile'); ?>
                              <div class="form-group">
                                <div class="passwordIcon">
                                  <input type="password" name="change_password" id="change_password" tabindex="1" class="form-control" placeholder="Password" value="">
                                  <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="retypeIcon">
                                  <input type="password" name="retype_password" id="retype_password" tabindex="1" class="form-control" placeholder="Confrom Password" value="">
                                  <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col-sm-6 col-sm-offset-3">
                                          <input type="submit" name="change" id="change" tabindex="4" class="form-control btn btn-login" value="Change Password">
                                      </div>
                                  </div>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <label><h2>OTP and Package details</h2></label>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <form id="updates" method="POST" role="form" action="{{ URL::to("/updates") }}" style="display: block;">
                            {{ csrf_field() }}
                            <?php
                               $my_mobile = session()->get('mobile'); ?>
                              <div class="form-group">
                                <div class="findIcon">
                                  <select name="find" id="find" tabindex="2" class="form-control" data-live-search="true" data-live-search-style="startsWith">
                                    <option selected value="0">-- Select the client --</option>
                                    <?php
                                      $items = DB::select("SELECT * FROM create_user WHERE user_type = 3");
                                      foreach ($items as $key) {
                                        $id = $key->user_id;
                                        $name = $key->name; ?>
                                        <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                                      <?php }
                                     ?>
                                  </select>
                                  <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group" >
                                <div class="col-md-offset-3">
                                  <label style="color: #D84315" for="client" id="get_otp" name="get_otp">
                                    <?php if (isset($_POST['get_client_otp'])) {
                                        $ids = $_POST['find'];
                                        $getting_id = DB::select("SELECT * FROM create_user WHERE user_id = '".$id1."'");
                                        if (count($getting_id) >= 1) {
                                          foreach ($getting_id as $key_otp) {
                                            $fin_otp = $key_otp->otp;
                                          }
                                          echo "OTP of user: ". $name ." is " . $fin_otp;
                                        } else {
                                          echo "No OTP Available for the user:  ". $name;
                                        }
                                    }
                                    if (isset($_POST['get_package'])) {
                                        $ids1 = $_POST['find'];
                                        $getting_id1 = DB::select("SELECT * FROM my_package WHERE user_id = '".$ids1."' ORDER BY id DESC LIMIT 1");
                                        if (count($getting_id1) >= 1) {
                                          foreach ($getting_id1 as $key_pack) {
                                            $fin_pun = $key_pack->left_puncture;
                                            $fin_alg = $key_pack->left_alignment;
                                          }
                                          echo "Package of user has: ". $fin_pun ." punctures and " . $fin_alg. " alignment in his account";
                                        } else {
                                          echo "No OTP Available for the user:  ". $name;
                                        }
                                    }
                                    ?>
                                  </label>
                                </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col-sm-6 col-sm-offset-0">
                                          <input type="submit" name="get_client_otp" id="get_client_otp" tabindex="4" class="form-control btn btn-login" value="Get OTP">
                                      </div>
                                      <div class="col-sm-6 col-sm-offset-0">
                                          <input type="submit" name="get_package" id="get_package" tabindex="4" class="form-control btn btn-login" value="Get Package Details">
                                      </div>
                                  </div>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <label><h2>Punctures and Alignments</h2></label>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <form id="updates" method="POST" role="form" action="{{ URL::to("/updates") }}" style="display: block;">
                            {{ csrf_field() }}
                            <?php
                               $my_mobile = session()->get('mobile'); ?>
                              <div class="form-group">
                                <div class="baseClientIcon">
                                  <select name="base_client" id="base_client" tabindex="2" class="form-control" data-live-search="true" data-live-search-style="startsWith">
                                    <option selected value="0">-- Select the client --</option>
                                    <?php
                                        $user_name_find = DB::select("SELECT * FROM create_user WHERE user_type = 3");
                                        foreach ($user_name_find as $keys) {
                                          $name = $keys->name;
                                          $id = $keys->user_id; ?>
                                        <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                                      <?php }
                                     ?>
                                  </select>
                                  <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group" >
                                <div class="row">
                                  <div class="basePunctureIcon">
                                    <div class="col-md-6">
                                      <select name="base_puncture" id="base_puncture" tabindex="2" class="form-control">
                                        <option selected value="0">-- Select the puncture --</option>
                                        <?php
                                          for ($i=1; $i < 10; $i++) {
                                            ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                          <?php
                                            }
                                         ?>
                                      </select>
                                      <i class="fa fa-road fa-lg fa-fw" aria-hidden="true"></i>
                                    </div>
                                  </div>
                                  <div class="baseAlignmentIcon">
                                    <div class="col-md-6">
                                      <select name="base_alignment" id="base_alignment" tabindex="2" class="form-control">
                                        <option selected value="0">-- Select the alignment --</option>
                                        <?php
                                          for ($i=1; $i < 10; $i++) {
                                            ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                          <?php
                                            }
                                         ?>
                                      </select>
                                      <i class="fa fa-gears fa-lg fa-fw" aria-hidden="true"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col-sm-6 col-sm-offset-3">
                                          <input type="submit" name="pun_alig" id="pun_alig" tabindex="4" class="form-control btn btn-login" value="Update Puncture and Alignment">
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
    $("#pun_alig").click(function(){
      var base_client = document.getElementById("base_client").value;
      var base_puncture = document.getElementById("base_puncture").value;
      var base_alignment = document.getElementById("base_alignment").value;
      if (base_client == "0") {
        $("#base_client").css("border-color","#D84315");
        $("#base_client").css("background-color","#FBE9E7");
        $("#base_puncture").css("border-color","#D84315");
        $("#base_puncture").css("background-color","#FBE9E7");
        $("#base_alignment").css("border-color","#D84315");
        $("#base_alignment").css("background-color","#FBE9E7");
        return false;
      }

      if (base_client == "0") {
        $("#base_client").css("border-color","#D84315");
        $("#base_client").css("background-color","#FBE9E7");
        return false;
      }
    });
    $("#get_client_otp").click(function(){
      var find = document.getElementById("find").value;
      if (find == 0) {
        $("#find").css("border-color","#D84315");
        $("#find").css("background-color","#FBE9E7");
        alert("Please select user and try again!!!!");
        return false;
      }
    });

    $("#find").change(function(){
      var find = document.getElementById("find").value;
      if (find != 0){
        $("#find").css("background-color","#C8E6C9");
        $("#find").css("border-color","#388E3C");
      } else {
        $("#find").css("background-color","#FBE9E7");
        $("#find").css("border-color","#D84315");
      }
    });

    $("#change").click(function(){
      var pass = document.getElementById("change_password").value;
      var retype = document.getElementById("retype_password").value;

      if (pass == "" && retype == "") {
        $("#retype_password").css("background-color","#FBE9E7");
        $("#retype_password").css("border-color","#D84315");
        $("#change_password").css("background-color","#FBE9E7");
        $("#change_password").css("background-color","#FBE9E7");
        return false;
      }
      else if (retype == ""){
        $("#retype_password").css("background-color","#FBE9E7");
        $("#retype_password").css("border-color","#D84315");
        return false;
      }
      else if (pass == ""){
        $("#change_password").css("background-color","#FBE9E7");
        $("#change_password").css("border-color","#D84315");
        return false;
      }
      else if (pass != retype){
        $("#retype_password").css("background-color","#FBE9E7");
        $("#retype_password").css("border-color","#D84315");
        $("#change_password").css("background-color","#FBE9E7");
        $("#change_password").css("border-color","#D84315");
        alert("Mismatched Password");
        return false;
      }

      if (pass.length > 6 || retype.length > 6) {
        $("#retype_password").css("background-color","#C8E6C9");
        $("#retype_password").css("border-color","#388E3C");
        $$("#change_password").css("background-color","#C8E6C9");
        $("#change_password").css("border-color","#388E3C");
        alert("Password minimum length should be six");
        return false;
      }
    });

    $("#change_password").keypress(function(){
      var cp = document.getElementById("change_password").value;
      if (cp.length > 6){
        $("#change_password").css("background-color","#C8E6C9");
        $("#change_password").css("border-color","#388E3C");
      } else {
        $("#change_password").css("background-color","#FBE9E7");
        $("#change_password").css("border-color","#D84315");
      }
    });

    $("#retype_password").keypress(function(){
      var retype_password1 = document.getElementById("retype_password").value;
      if (retype_password1.length > 6){
        $("#retype_password").css("background-color","#C8E6C9");
        $("#retype_password").css("border-color","#388E3C");
      } else {
        $("#retype_password").css("background-color","#FBE9E7");
        $("#retype_password").css("border-color","#D84315");
      }
    });

    $("#base_client").change(function(){
      var base_client1 = document.getElementById("base_client").value;
      if (base_client1 != "0"){
        $("#base_client").css("background-color","#C8E6C9");
        $("#base_client").css("border-color","#388E3C");
      } else {
        $("#base_client").css("background-color","#FBE9E7");
        $("#base_client").css("border-color","#D84315");
      }
    });

    $("#base_puncture").change(function(){
      var base_puncture1 = document.getElementById("base_puncture").value;
      if (base_puncture1 != "0"){
        $("#base_puncture").css("background-color","#C8E6C9");
        $("#base_puncture").css("border-color","#388E3C");
      } else {
        $("#base_puncture").css("background-color","#FBE9E7");
        $("#base_puncture").css("border-color","#D84315");
      }
    });

    $("#base_alignment").change(function(){
      var base_alignment1 = document.getElementById("base_alignment").value;
      if (base_alignment1 != "0"){
        $("#base_alignment").css("background-color","#C8E6C9");
        $("#base_alignment").css("border-color","#388E3C");
      } else {
        $("#base_alignment").css("background-color","#FBE9E7");
        $("#base_alignment").css("border-color","#D84315");
      }
    });

    $('html, body').animate({scrollTop: '50px'}, 1500);
    setTimeout(function() {
        location.reload();
    }, 1200000);
</script>
</html>
<!-- Completed by Sainath kishore.R.G at 18-06-2019 -->
