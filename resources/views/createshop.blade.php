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

        #shop_idd:hover,
        #shop_idd:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #shop_idd{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #shop_areas{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #shop_areas:hover,
        #shop_areas:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #product_idd:hover,
        #product_idd:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #product_idd{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #product_pack:hover,
        #product_pack:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
        }

        #product_pack{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
        }

        #product_name:hover,
        #product_name:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #product_name{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        #puncture:hover,
        #puncture:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #puncture{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .punctureIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 270px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .shopidIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 90px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .shopareaIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 150px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .productidIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 90px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .productpackIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 150px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .productnameIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 210px 40px;
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

        #alignment:hover,
        #alignment:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #alignment{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .alignmentIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 330px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        #size:hover,
        #size:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #size{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .sizeIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 390px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        #rate:hover,
        #rate:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #rate{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .rateIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 450px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        #type:hover,
        #type:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #type{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .typeIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 510px 40px;
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
        <li><a href="superadmin" id="superadmin" name="superadmin">Create Admin</a></li>
        <!-- <li><a href="production" id="production" name="production">Production Status</a></li> -->
        <li class="active"><a href="createshop" id="createshop" name="createshop">Create Shop</a></li>
        <li><a href="changepassword" id="changepassword" name="changepassword">Change Password</a></li>
        <li><a href="lockuser" id="lock_user" name="lockuser">Lock User</a></li>
        <li><a href="{{ URL::to("/") }}" id="logout" name="logout">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- fixed nav bar ends -->
<div class="container" style="padding-top: 200px;">
    <div class="row justify-content-center">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-6">
                            <label><h2>Create Shop and product</h2></label>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="home" method="POST" role="form" action="{{ URL::to("/createshop") }}" style="display: block;">
                              {{ csrf_field() }}
                              <div class="form-group">
                                <div class="useridIcon">
                                  <label for="shop_idd"><h2><strong>Create Shop</strong></h2></label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="shopidIcon">
                                  <input type="text" name="shop_idd" id="shop_idd" tabindex="1" class="form-control" placeholder="Shop ID" value="" maxlength="8">
                                  <i class="fa fa-id-card fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="shopareaIcon">
                                  <input type="text" name="shop_areas" id="shop_areas" tabindex="1" class="form-control" placeholder="Shop Area" value="" maxlength="50">
                                  <i class="fa fa-location-arrow fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="shopcreate" id="shopcreate" tabindex="4" class="form-control btn btn-login" value="Create Shop">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form id="product" method="POST" role="form" action="{{ URL::to("/createshop") }}" style="display: block;">
                              {{ csrf_field() }}
                              <div class="form-group">
                                <div class="useridIcon">
                                  <label for="shop_idd"><h2><strong>Create Product</strong></h2></label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="productidIcon">
                                  <input type="text" name="product_idd" id="product_idd" tabindex="1" class="form-control" placeholder="Product ID" value="" maxlength="8">
                                  <i class="fa fa-id-card fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="productpackIcon">
                                  <input type="text" name="product_pack" id="product_pack" tabindex="1" class="form-control" placeholder="Package Type" value="" maxlength="20">
                                  <i class="fa fa-cart-arrow-down fa-lg fa-fw" aria-hidden="true"></i>
                                </div>
                              </div>
                                <div class="form-group">
                                  <div class="productnameIcon">
                                    <input type="text" name="product_name" id="product_name" tabindex="1" class="form-control" placeholder="Product name" value="" maxlength="50">
                                    <i class="fa fa-automobile fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="punctureIcon">
                                    <input type="text" name="puncture" id="puncture" tabindex="1" class="form-control" placeholder="Punctures quantity" value="" maxlength="40">
                                    <i class="fa fa-road fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="alignmentIcon">
                                    <input type="text" name="alignment" id="alignment" tabindex="2" class="form-control" placeholder="Alignment quantity" maxlength="20">
                                    <i class="fa fa-gears fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="sizeIcon">
                                    <input type="text" name="size" id="size" tabindex="1" class="form-control" placeholder="Size" value="" maxlength="40">
                                    <i class="fa fa-database fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="rateIcon">
                                    <input type="text" name="rate" id="rate" tabindex="2" class="form-control" placeholder="Rate" maxlength="20">
                                    <i class="fa fa-money fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="typeIcon">
                                    <select name="type" id="type" tabindex="2" class="form-control">
                                      <option value="0">-- Select Product type --</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                    </select>
                                    <i class="fa fa-tachometer fa-lg fa-fw" aria-hidden="true"></i>
                                  </div>
                                </div>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="productcreate" id="productcreate" tabindex="4" class="form-control btn btn-login" value="Create Product">
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
    $("#shopcreate").click(function(){
      var shop_idd = document.getElementById("shop_idd").value;
      var shop_areas = document.getElementById("shop_areas").value;

      if (shop_idd == "" && shop_areas == "") {
        $("#shop_idd").css("background-color","#FBE9E7");
        $("#shop_idd").css("border-color","#D84315");
        $("#shop_areas").css("background-color","#FBE9E7");
        $("#shop_areas").css("border-color","#D84315");
        return false;
      }
      else if (shop_idd == ""){
        $("#shop_idd").css("background-color","#FBE9E7");
        $("#shop_idd").css("border-color","#D84315");
        return false;
      }
      else if (shop_areas == ""){
        $("#shop_areas").css("background-color","#FBE9E7");
        $("#shop_areas").css("border-color","#D84315");
        return false;
      }
    });

    $("#productcreate").click(function(){
      var product_name = document.getElementById("product_name").value;
      var puncture = document.getElementById("puncture").value;
      var alignment = document.getElementById("alignment").value;
      var size = document.getElementById("size").value;
      var rate = document.getElementById("rate").value;
      var product_pack = document.getElementById("product_pack").value;
      var type = document.getElementById("type").value;
      var product_idd = document.getElementById("product_idd").value;

      if (product_name == "" && puncture == "" && size == "" && alignment == "" && rate == "" && type == "0" && product_pack == "" && product_idd == "") {
        $("#product_idd").css("background-color","#FBE9E7");
        $("#product_idd").css("border-color","#D84315");
        $("#product_name").css("background-color","#FBE9E7");
        $("#product_name").css("border-color","#D84315");
        $("#puncture").css("background-color","#FBE9E7");
        $("#puncture").css("border-color","#D84315");
        $("#size").css("border-color","#D84315");
        $("#size").css("background-color","#FBE9E7");
        $("#email").css("border-color","#D84315");
        $("#alignment").css("border-color","#D84315");
        $("#alignment").css("background-color","#FBE9E7");
        $("#rate").css("border-color","#D84315");
        $("#rate").css("background-color","#FBE9E7");
        $("#type").css("border-color","#D84315");
        $("#type").css("background-color","#FBE9E7");
        $("#product_pack").css("border-color","#D84315");
        $("#product_pack").css("background-color","#FBE9E7");
        return false;
      }
      else if (product_idd == ""){
        $("#product_idd").css("background-color","#FBE9E7");
        $("#product_idd").css("border-color","#D84315");
        return false;
      }
      else if (product_name == ""){
        $("#product_name").css("background-color","#FBE9E7");
        $("#product_name").css("border-color","#D84315");
        return false;
      }
      else if (size == ""){
        $("#size").css("background-color","#FBE9E7");
        $("#size").css("border-color","#D84315");
        return false;
      }
      else if (alignment == ""){
        $("#alignment").css("background-color","#FBE9E7");
        $("#alignment").css("border-color","#D84315");
        return false;
      }
      else if (rate == "") {
        $("#rate").css("background-color","#FBE9E7");
        $("#rate").css("border-color","#D84315");
        return false;
      }
      else if (type == "0") {
        $("#type").css("background-color","#FBE9E7");
        $("#type").css("border-color","#D84315");
        return false;
      }
      else if (product_pack == "0") {
        $("#product_pack").css("background-color","#FBE9E7");
        $("#product_pack").css("border-color","#D84315");
        return false;
      }
    });

    $("#shop_areas").keyup(function(){
      var shop_areas1 = document.getElementById("shop_areas").value;
      if (shop_areas1.length >= 10){
        $("#shop_areas").css("background-color","#C8E6C9");
        $("#shop_areas").css("border-color","#388E3C");
      } else {
        $("#shop_areas").css("background-color","#FBE9E7");
        $("#shop_areas").css("border-color","#D84315");
      }
    });

    $("#shop_idd").keyup(function(){
      var shop_idd1 = document.getElementById("shop_idd").value;
      if (shop_idd1.length >= 6){
        $("#shop_idd").css("background-color","#C8E6C9");
        $("#shop_idd").css("border-color","#388E3C");
      } else {
        $("#shop_idd").css("background-color","#FBE9E7");
        $("#shop_idd").css("border-color","#D84315");
      }
      var fin_id = shop_idd1.toUpperCase();
      document.getElementById("shop_idd").value = fin_id;
    });

    $("#product_idd").keyup(function(){
      var product_idd1 = document.getElementById("product_idd").value;
      if (product_idd1.length >= 6){
        $("#product_idd").css("background-color","#C8E6C9");
        $("#product_idd").css("border-color","#388E3C");
      } else {
        $("#product_idd").css("background-color","#FBE9E7");
        $("#product_idd").css("border-color","#D84315");
      }
      var fin_id = product_idd1.toUpperCase();
      document.getElementById("product_idd").value = fin_id;
    });

    $("#product_pack").keyup(function(){
      var product_pack1 = document.getElementById("product_pack").value;
      if (product_pack1.length >= 6){
        $("#product_pack").css("background-color","#C8E6C9");
        $("#product_pack").css("border-color","#388E3C");
      } else {
        $("#product_pack").css("background-color","#FBE9E7");
        $("#product_pack").css("border-color","#D84315");
      }
    });

    $("#product_name").keyup(function(){
      var product_name1 = document.getElementById("product_name").value;
      if (product_name1.length >= 6){
        $("#product_name").css("background-color","#C8E6C9");
        $("#product_name").css("border-color","#388E3C");
      } else {
        $("#product_name").css("background-color","#FBE9E7");
        $("#product_name").css("border-color","#D84315");
      }
    });

    $("#puncture").keyup(function(){
      var puncture1 = document.getElementById("puncture").value;
      if (puncture1.length >= 1){
        $("#puncture").css("background-color","#C8E6C9");
        $("#puncture").css("border-color","#388E3C");
      } else {
        $("#puncture").css("background-color","#FBE9E7");
        $("#puncture").css("border-color","#D84315");
      }
    });

    $("#alignment").keyup(function(){
      var alignment1 = document.getElementById("alignment").value;
      if (alignment1.length >= 1){
        $("#alignment").css("background-color","#C8E6C9");
        $("#alignment").css("border-color","#388E3C");
      } else {
        $("#alignment").css("background-color","#FBE9E7");
        $("#alignment").css("border-color","#D84315");
      }
    });

    $("#size").keyup(function(){
      var size1 = document.getElementById("size").value;
      if (size1.length >= 1){
        $("#size").css("background-color","#C8E6C9");
        $("#size").css("border-color","#388E3C");
      } else {
        $("#size").css("background-color","#FBE9E7");
        $("#size").css("border-color","#D84315");
      }
    });

    $("#rate").keyup(function(){
      var rate1 = document.getElementById("rate").value;
      if (rate1.length >= 1){
        $("#rate").css("background-color","#C8E6C9");
        $("#rate").css("border-color","#388E3C");
      } else {
        $("#rate").css("background-color","#FBE9E7");
        $("#rate").css("border-color","#D84315");
      }
    });

    $("#type").change(function(){
      var type1 = document.getElementById("type").value;
      if (type1 != "0"){
        $("#type").css("background-color","#C8E6C9");
        $("#type").css("border-color","#388E3C");
      } else {
        $("#type").css("background-color","#FBE9E7");
        $("#type").css("border-color","#D84315");
      }
    });
    $('html, body').animate({scrollTop: '70px'}, 1500);

</script>
</html>
<!-- Completed by Sainath kishore.R.G at 18-06-2019 -->
