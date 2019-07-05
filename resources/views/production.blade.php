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

        #end:hover,
        #end:focus{
          border-top-right-radius: 200px;
          border-top-left-radius: 200px;
          border-bottom-right-radius: 200px;
          border-bottom-left-radius: 200px;
          padding-inline-start: 75px;
          background-color: #E0F7FA;
          border-color: #5a6268;
          height: 45px;
        }

        #end{
          border-top-right-radius: 200px;
          border-top-left-radius: 200px;
          border-bottom-right-radius: 200px;
          border-bottom-left-radius: 200px;
          padding-inline-start: 75px;
          border-color: #5a6268;
          height: 45px;
        }

        #start:hover,
        #start:focus{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            background-color: #E0F7FA;
            border-color: #5a6268;
            height: 45px;
        }

        #start{
            border-top-right-radius: 200px;
            border-top-left-radius: 200px;
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
            padding-inline-start: 75px;
            border-color: #5a6268;
            height: 45px;
        }

        .startIcon i{
            position: absolute;
            left: 0;
            top: 2px;
            padding: 10px 40px;
            color: #aaa;
            transition: 0.3s;
        }

        .endIcon i{
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
        <a class="navbar-brand" href="">TyreZone</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="superadmin" id="superadmin" name="superadmin">Create Admin</a></li>
        <li class="active"><a href="production" id="production" name="production">Production Status</a></li>
        <li><a href="createshop" id="createshop" name="createshop">Create Shop</a></li>
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
                        <div class="col-xs-6">
                            <label><h2>Create User</h2></label>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="home" method="POST" role="form" action="{{ URL::to("/production") }}" style="display: block;">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <div class="row">
                                    <div class="form-group">
                                      <div class="startIcon col-lg-6">
                                        <input type="date" name="start" id="start" tabindex="2" class="form-control" placeholder="Start Date" maxlength="20">
                                        <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
                                      </div>
                                      <div class="endIcon col-lg-6">
                                        <input type="date" name="end" id="end" tabindex="2" class="form-control" placeholder="End Date" maxlength="20">
                                        <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="custom" id="custom" tabindex="4" class="form-control btn btn-login" value="Create custom entry">
                                </div>
                              </div>
                                <!-- <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-6 col-sm-offset-0">
                                          <input type="submit" name="custom" id="custom" tabindex="4" class="form-control btn btn-login" value="Create custom entry">
                                      </div>
                                      <div class="col-sm-6 col-sm-offset-0">
                                          <input type="submit" name="three_month" id="three_month" tabindex="4" class="form-control btn btn-login" value="1 month">
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-sm-6 col-sm-offset-0">
                                          <input type="submit" name="three_month" id="three_month" tabindex="4" class="form-control btn btn-login" value="3 month">
                                      </div>
                                      <div class="col-sm-6 col-sm-offset-0">
                                          <input type="submit" name="six_month" id="six_month" tabindex="4" class="form-control btn btn-login" value="6 month">
                                      </div>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['custom'])) {
          $start = $_POST['start'];
          $end = $_POST['end'];
          $newstart = date("d-m-Y", strtotime($start));
          $newend = date("d-m-Y", strtotime($end));
          // echo $month=date("F",strtotime($newend));
          // echo $month1=date("F",strtotime($newstart));
          $i = 0;
          $j = 0;
          $k = 0;
          $dataPoints = [];
          $dataPoints1 = [];
          $dataPoints2 = [];
          $shop_details = DB::select("SELECT * FROM shop_details");
          if (count($shop_details) >= 1) {
            foreach ($shop_details as $key) {
              $custom_entry = DB::select("SELECT * FROM my_package WHERE shop_id = 'CBEMTP01' and last_served BETWEEN '".$newstart."' AND '".$newend."'");
              foreach ($custom_entry as $value) {
                $product_id = $value->package_type;
                $amount_entry = DB::select("SELECT * FROM product_type WHERE product_id = '".$product_id."'");
                foreach ($amount_entry as $amt) {
                  $amount = $amt->rate;
                  $i++;
                  $dataPoints = array(
                    	array("label"=> $i, "y"=> $amount),
                  );
                }
                }
                $custom_entry1 = DB::select("SELECT * FROM my_package WHERE shop_id = 'CBEAVI02' and last_served BETWEEN '".$newstart."' AND '".$newend."'");
                foreach ($custom_entry1 as $value1) {
                  $product_id1 = $value1->package_type;
                  $amount_entry1 = DB::select("SELECT * FROM product_type WHERE product_id = '".$product_id1."'");
                  foreach ($amount_entry1 as $amt1) {
                    $amount1 = $amt1->rate;
                    $j++;
                    $dataPoints1 = array(
                      	array("label"=> $i, "y"=> $amount1),
                    );
                  }
                  }

                  $custom_entry2 = DB::select("SELECT * FROM my_package WHERE shop_id = 'CBEKAL03' and last_served BETWEEN '".$newstart."' AND '".$newend."'");
                  foreach ($custom_entry2 as $value2) {
                    $product_id2 = $value2->package_type;
                    $amount_entry2 = DB::select("SELECT * FROM product_type WHERE product_id = '".$product_id2."'");
                    foreach ($amount_entry2 as $amt2) {
                      $amount2 = $amt2->rate;
                      $k++;
                      $dataPoints2 = array(
                        	array("label"=> $i, "y"=> $amount2),
                      );
                    }
                    }
                ?>
              <script>
              window.onload = function () {

              var chart = new CanvasJS.Chart("chartContainer", {
              	animationEnabled: true,
              	//theme: "light2",
              	title:{
              		text: "TyreZone Production"
              	},
              	axisX:{
              		crosshair: {
              			enabled: true,
              			snapToDataPoint: true
              		}
              	},
              	axisY:{
              		title: "Amount",
              		crosshair: {
              			enabled: true,
              			snapToDataPoint: true
              		}
              	},
              	toolTip:{
              		enabled: false
              	},
              	data: [{
                  type: "area",
		              dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
              	}]
              });
              chart.render();

              }
              </script>
              <div id="chartContainer" style="height: 370px; width: 100%;"></div><br><br><br>
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
              <script>
              window.onload = function () {

              var chart = new CanvasJS.Chart("chartContainer1", {
              	animationEnabled: true,
              	//theme: "light2",
              	title:{
              		text: "TyreZone Production"
              	},
              	axisX:{
              		crosshair: {
              			enabled: true,
              			snapToDataPoint: true
              		}
              	},
              	axisY:{
              		title: "Amount",
              		crosshair: {
              			enabled: true,
              			snapToDataPoint: true
              		}
              	},
              	toolTip:{
              		enabled: false
              	},
              	data: [
              	{
                  type: "area",
		               dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
              	}]
              });
              chart.render();

              }
              </script>
              <div id="chartContainer1" style="height: 370px; width: 100%;"></div><br><br><br>
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
              <script>
              window.onload = function () {

              var chart = new CanvasJS.Chart("chartContainer", {
              	animationEnabled: true,
              	//theme: "light2",
              	title:{
              		text: "TyreZone Production"
              	},
              	axisX:{
              		crosshair: {
              			enabled: true,
              			snapToDataPoint: true
              		}
              	},
              	axisY:{
              		title: "Amount",
              		crosshair: {
              			enabled: true,
              			snapToDataPoint: true
              		}
              	},
              	toolTip:{
              		enabled: false
              	},
              	data: [{
              		type: "area",
		              dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
              	}]
              });
              chart.render();

              }
              </script>
              <div id="chartContainer2" style="height: 370px; width: 100%;"></div><br><br><br>
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <?php }
          }
        }
    ?>
</div>
</body>
<script>
    $("#custom").click(function(){
      var start_date = document.getElementById("start").value;
      var end_date = document.getElementById("end").value;
      if (end_date == "" && start_date == "") {
        $("#start").css("background-color","#FBE9E7");
        $("#start").css("border-color","#D84315");
        $("#end").css("background-color","#FBE9E7");
        $("#end").css("border-color","#D84315");
        return false;
      }
    });
    $('html, body').animate({scrollTop: '70px'}, 800);

</script>
</html>
<!-- Completed by Sainath kishore.R.G at 18-06-2019 -->
