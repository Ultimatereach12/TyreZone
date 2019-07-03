<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function index(Request $req){
      if($req->input('login')){
        $mobile = $req->input('mobile');
        $password = $req->input('password');

        if ($mobile != "" || $password != "") {
          $req->session()->put('mobile',$mobile);
          $login_details = DB::select('select * from create_user where mobile = ? and password = ? and user_type = ?', [$mobile, $password, 1]);
          $login_details_admin = DB::select('select * from create_user where mobile = ? and password = ? and user_type = ?  and alive = ?', [$mobile, $password, 2, 1]);
          if (count($login_details) >= 1){
            return redirect('/superadmin');
          } elseif (count($login_details_admin) >= 1) {
            return redirect('/home');
          } else {
            echo "<div class='row justify-content-center'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>Wrong login details!!! Please try again!!!</strong>
                        </div>
                    </div>
                </div>
            </div>
            <br>";
            return view('login');
          }
        } else {
          echo "<div class='row justify-content-center'>
              <div class='col-md-7 col-md-offset-5'>
                  <div class='card'>
                      <div class='card-header' style='color: #b21f2d'>
                          <strong>Please fill all field and try again!!!</strong>
                      </div>
                  </div>
              </div>
          </div>
          <br>";
          return view('login');
        }
      }
      return view('login');
    }
    function news(Request $req){
      if ($req->input('publish')) {
        $title = $req->input('title');
        $content = $req->input('content');
        date_default_timezone_set("Asia/Kolkata");
        $date = date('d-m-Y H:i');
        $user_creation = DB::insert('insert into news_events (title,content,date) values (?,?,?)', [$title, $content, $date]);
        echo "<div class='row justify-content-center' style = 'padding-top: 100px;'>
            <div class='col-md-7 col-md-offset-5'>
                <div class='card'>
                    <div class='card-header' style='color: #b21f2d'>
                        <strong>News Updated Successfully!!!</strong>
                    </div>
                </div>
            </div>
        </div>
        <br>";
      }
      return view('news');
    }
    function emergency(Request $req){
      if ($req->input('emergency')) {
        $client_id = $req->input('client');
        $pick_up_arrange = DB::update('update arrange_pickup set pick_up_arranged = ? where user_id = ?',[1,$client_id]);
      }
      return view('emergency');
    }
    function arrange(Request $req){
      if ($req->input('arrange')) {
        $client_id = $req->input('client');
        $pick_up_arrange = DB::update('update arrange_pickup set pick_up_arranged = ? where user_id = ?',[1,$client_id]);
      }
      return view('arrange');
    }
    function updates(Request $req){
      if ($req->input("change")) {
        $change_password = $req->input("change_password");
        $my_mobile = session()->get('mobile');
        $changed = DB::update('update create_user set password = ? where mobile = ?',[$change_password, $my_mobile]);
        echo "<div class='row justify-content-center' style='padding-top: 100px;'>
            <div class='col-md-7 col-md-offset-5'>
                <div class='card'>
                    <div class='card-header' style='color: #b21f2d'>
                        <strong>Password Changed Successfully!!!</strong>
                    </div>
                </div>
            </div>
        </div>";
        return view('login');
      }
      return view('updates');
    }
    function home(Request $req){
      if($req->input('create_user')){
        $userid = $req->input('user_id');
        $name = $req->input('username');
        $mobile = $req->input('mobile');
        $email = $req->input('email');
        $password = $req->input('password');
        $address = $req->input('address');
        $shop = $req->input('shop');
        $product_id = $req->input('product');

        if ($userid != "" || $name != "" || $mobile != "" || $email != "" || $password != "") {
          $check_user = DB::select('select * from create_user where user_id = ? and mobile = ? and email = ? and user_type = ?', [$userid, $mobile, $email, 3]);
          if (count($check_user) >= 1){
            echo "<div class='row justify-content-center' style='padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>User Registered Already!!!</strong>
                        </div>
                    </div>
                </div>
            </div>";
            return view('home');
          } else {
            $digits = 3;
            echo $otp = mt_rand(1000, 9999);
            echo "<div class='row justify-content-center' style = 'padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>Generated User OTP is $otp</strong>
                        </div>
                    </div>
                </div>
            </div>";

            $user_creation = DB::insert('insert into create_user (user_id,name,mobile,email,password,address,otp,verified,user_type,alive,shop_id) values (?,?,?,?,?,?,?,?,?,?,?)', [$userid, $name, $mobile, $email, $password, $address, $otp, 0, 3, 0, $shop]);
            $check_user = DB::select('select * from product_type where product_id = ?', [$product_id]);
            $date = date('d-m-Y');
            foreach ($check_user as $value) {
              $pack_type = $value->product_pack;
              $product_name = $value->product_name;
              $puncture = $value->puncture;
              $alignment = $value->alignment;
            }
            if ($pack_type == "Half pack") {
              $package_month = 6;
            }
            if ($pack_type == "Full pack") {
              $package_month = 12;
            }
            $date_end = date('d-m-Y', strtotime("+".$package_month." months", strtotime($date)));
            $diff = strtotime($date_end) - strtotime($date);
            $diff_num = abs(round($diff / 86400));
            $package = DB::insert('insert into my_package (user_id,package_type,used_alignment,used_puncture,left_alignment,left_puncture,start_date,end_date,last_served,shop_id,days_to_alive) values (?,?,?,?,?,?,?,?,?,?,?)', [$userid, $product_id, 0, 0, $alignment, $puncture, $date, $date_end, "", $shop, $diff_num]);
            return view('home');
           }
        } else {
          echo "<div class='row justify-content-center'>
              <div class='col-md-7 col-md-offset-5'>
                  <div class='card'>
                      <div class='card-header' style='color: #b21f2d'>
                          <strong>Please fill all field and try again!!!</strong>
                      </div>
                  </div>
              </div>
          </div>
          <br>";
          return view('home');
        }
      }
      return view('home');
    }

    // function superadmin(){
    //   $items = DB::select("SELECT * FROM shop_details");
    //   return $this->view('superadmin', compact('items'));
    // }

    function createadmin(Request $req){
      if($req->input('admin')){
        $userid = $req->input('user_id');
        $name = $req->input('username');
        $mobile = $req->input('mobile');
        $email = $req->input('email');
        $password = $req->input('password');
        $address = $req->input('address');

        if ($userid != "" || $name != "" || $mobile != "" || $email != "" || $password != "") {
          $check_admin = DB::select('select * from create_user where user_id = ? and mobile = ? and email = ? and user_type = ?', [$userid, $mobile, $email, 2]);
          if (count($check_admin) >= 1){
            echo "<div class='row justify-content-center' style='padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>User Registered Already!!!</strong>
                        </div>
                    </div>
                </div>
            </div>";
            return view('superadmin');
          } else {
            $admin_creation = DB::insert('insert into create_user (user_id,name,mobile,email,password,address,verified,user_type,alive,shop_id) values (?,?,?,?,?,?,?,?,?,?)', [$userid, $name, $mobile, $email, $password, "", 1, 2, 1, $address]);
            return view('superadmin');
          }
        } else {
          echo "<div class='row justify-content-center'>
              <div class='col-md-7 col-md-offset-5'>
                  <div class='card'>
                      <div class='card-header' style='color: #b21f2d'>
                          <strong>Please fill all field and try again!!!</strong>
                      </div>
                  </div>
              </div>
          </div>
          <br>";
          return view('superadmin');
        }
      }
      return view('superadmin');
    }
}
