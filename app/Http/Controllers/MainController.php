<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Session;

class MainController extends Controller
{
    function index(Request $req){
      if($req->input('login')){
        $mobile = $req->input('mobile');
        $password = $req->input('password');

        if ($mobile != "" || $password != "") {
          $req->session()->put('mobile', $mobile);
          $login_details = DB::select('select * from create_user where mobile = ? and password = ? and user_type = ?', [$mobile, $password, 1]);
          $login_details_admin = DB::select('select * from create_user where mobile = ? and password = ? and user_type = ?  and alive = ?', [$mobile, $password, 2, 1]);
          if (count($login_details) >= 1){
            $date_get = DB::select("SELECT * FROM my_package");
            foreach ($date_get as $dater) {
              $date = date('d-m-Y');
              $date_end = $dater->end_date;
              $diff = strtotime($date_end) - strtotime($date);
              $diff_num = abs(round($diff / 86400));
              $fin_date = $dater->days_to_alive;
              $date_id = $dater->user_id;
              if ($fin_date != $diff_num) {
                $diff_in_date = $fin_date - $diff_num;
                $fin_diff_date = $fin_date - $diff_in_date;
                $changed_date = DB::update("UPDATE my_package SET days_to_alive = '".$fin_diff_date."' WHERE user_id = '".$date_id."'");
              }
            }
            foreach ($login_details as $get_shop) {
              $get_shop_is = $get_shop->shop_id;
            }
            $req->session()->put('shop_ids', $get_shop_is);
            return redirect('/superadmin');
          } elseif (count($login_details_admin) >= 1) {
            $date_get = DB::select("SELECT * FROM my_package");
            foreach ($date_get as $dater) {
              $date = date('d-m-Y');
              $date_end = $dater->end_date;
              $diff = strtotime($date_end) - strtotime($date);
              $diff_num = abs(round($diff / 86400));
              $fin_date = $dater->days_to_alive;
              $date_id = $dater->user_id;
              if ($fin_date != $diff_num) {
                $diff_in_date = $fin_date - $diff_num;
                $fin_diff_date = $fin_date - $diff_in_date;
                $changed_date = DB::update("UPDATE my_package SET days_to_alive = '".$fin_diff_date."' WHERE user_id = '".$date_id."'");
              }
            }
            foreach ($login_details_admin as $get_shop) {
              $get_shop_is = $get_shop->shop_id;
            }
            $req->session()->put('shop_ids', $get_shop_is);
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

    function production(Request $req){
      return view('production');
    }

    function createshop(Request $req){
      if ($req->input('shopcreate')) {
        $get_shop_id = $req->input('shop_idd');
        $get_shop_area = $req->input('shop_areas');
        $checking_shop_id = DB::select("SELECT * FROM shop_details WHERE shop_id ='".$get_shop_id."'");
        if (count($checking_shop_id) >= 1) {
            echo "<div class='row justify-content-center' style = 'padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>Shop ID already exists!!!</strong>
                        </div>
                    </div>
                </div>
            </div>
            <br>";
          } else {
            $insert_shop = DB::insert("INSERT INTO shop_details (shop_id,shop_area) VALUES (?,?)",[$get_shop_id,$get_shop_area]);
            echo "<div class='row justify-content-center' style = 'padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>Shop had created sucessfully!!!</strong>
                        </div>
                    </div>
                </div>
            </div>
            <br>";
        }
      }
      if ($req->input('productcreate')) {
        $product_idd = $req->input('product_idd');
        $product_pack = $req->input('product_pack');
        $product_name = $req->input('product_name');
        $puncture = $req->input('puncture');
        $alignment = $req->input('alignment');
        $size = $req->input('size');
        $rate = $req->input('rate');
        $type = $req->input('type');
        $checking_shop_id = DB::select("SELECT * FROM product_type WHERE product_id ='".$product_idd."'");
        if (count($checking_shop_id) >= 1) {
            echo "<div class='row justify-content-center' style = 'padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>Product ID already exists!!!</strong>
                        </div>
                    </div>
                </div>
            </div>
            <br>";
          } else {
            $insert_shop = DB::insert("INSERT INTO product_type (product_id,product_pack,product_name,puncture,alignment,size,rate,type) VALUES (?,?,?,?,?,?,?,?)",[$product_idd,$product_pack,$product_name,$puncture,$alignment,$size,$rate,$type]);
            echo "<div class='row justify-content-center' style = 'padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>Product had created sucessfully!!!</strong>
                        </div>
                    </div>
                </div>
            </div>
            <br>";
        }
      }
      return view('createshop');
    }

    function changepassword(Request $req){
      if ($req->input("change")) {
        $change_password = $req->input("change_password");
        $my_mobile = $req->session()->get('mobile');
        $changed = DB::update('update create_user set password = ? where mobile = ? and user_type',[$change_password, $my_mobile,1]);
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
      return view('changepassword');
    }

    function lockuser(Request $req){
      if ($req->input('lock')) {
        $user_id_lock = $req->input('user_id');
        $user_id_check = DB::select("SELECT * FROM create_user WHERE user_id = '".$user_id_lock."' and alive = '1'");
        if (count($user_id_check) >= 1) {
          $user_lock = DB::update("UPDATE create_user SET alive = ? WHERE user_id = ?", [0,$user_id_lock]);
          echo "<div class='row justify-content-center' style='padding-top: 100px;'>
              <div class='col-md-7 col-md-offset-5'>
                  <div class='card'>
                      <div class='card-header' style='color: #b21f2d'>
                          <strong>User locked Successfully!!!</strong>
                      </div>
                  </div>
              </div>
          </div>";
        } else {
          echo "<div class='row justify-content-center' style='padding-top: 100px;'>
              <div class='col-md-7 col-md-offset-5'>
                  <div class='card'>
                      <div class='card-header' style='color: #b21f2d'>
                          <strong>No user found!!!</strong>
                      </div>
                  </div>
              </div>
          </div>";
        }
      }
      if ($req->input('unlock')) {
        $user_id_unlock = $req->input('name');
        $user_id_checking = DB::select("SELECT * FROM create_user WHERE user_id = '".$user_id_unlock."' and alive = '0'");
        if (count($user_id_checking) >= 1) {
          $user_unlock = DB::update("UPDATE create_user SET alive = ? WHERE user_id = ?", [1,$user_id_unlock]);
          echo "<div class='row justify-content-center' style='padding-top: 100px;'>
              <div class='col-md-7 col-md-offset-5'>
                  <div class='card'>
                      <div class='card-header' style='color: #b21f2d'>
                          <strong>User locked Successfully!!!</strong>
                      </div>
                  </div>
              </div>
          </div>";
        } else {
          echo "<div class='row justify-content-center' style='padding-top: 100px;'>
              <div class='col-md-7 col-md-offset-5'>
                  <div class='card'>
                      <div class='card-header' style='color: #b21f2d'>
                          <strong>No user found!!!</strong>
                      </div>
                  </div>
              </div>
          </div>";
        }
      }
      return view('lockuser');
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
        $my_mobile = $req->session()->get('mobile');
        $changed = DB::update('update create_user set password = ? where mobile = ? and user_type = ?',[$change_password, $my_mobile,2]);
        echo "<div class='row justify-content-center' style='padding-top: 100px;'>
            <div class='col-md-7 col-md-offset-5'>
                <div class='card'>
                    <div class='card-header' style='color: #b21f2d'>
                        <strong>Password Changed Successfully!!!</strong>
                    </div>
                </div>
            </div>
        </div>";
        return redirect('/login');
      }
      if ($req->input("pun_alig")) {
        $date_served = date('d-m-Y');
        $base_client = $req->input("base_client");
        $base_puncture =  $req->input("base_puncture");
        $base_alignment =  $req->input("base_alignment");
        $shopid = $req->session()->get('shop_ids');
        $minus = DB::select("SELECT * FROM my_package WHERE user_id = '".$base_client."'  and left_puncture >= '".$base_puncture."' or left_alignment >= '".$base_alignment."' ORDER BY id DESC LIMIT 1");
        if (count($minus) >= 1) {
          foreach ($minus as $min_us) {
            $puncture_bal = $min_us->left_puncture;
            $alignment_bal = $min_us->left_alignment;
            $puncture_u = $min_us->used_puncture;
            $alignment_u = $min_us->used_alignment;
            $start_date = $min_us->start_date;
            $end_date = $min_us->end_date;
            $days = $min_us->days_to_alive;
            $package_type = $min_us->package_type;
            $g_id = $min_us->id;
          }
          $update_pack = DB::update("UPDATE my_package SET left_puncture = ?, left_alignment = ? WHERE id = ?",[0,0,$g_id]);
          $insert_pack = DB::insert('INSERT into my_package (user_id,package_type,used_alignment,used_puncture,left_alignment,left_puncture,start_date,end_date,last_served,shop_id,days_to_alive)
          VALUES (?,?,?,?,?,?,?,?,?,?,?)',[$base_client, $package_type,($alignment_u + $base_alignment),($puncture_u + $base_puncture),($alignment_bal - $base_alignment),($puncture_bal - $base_puncture),$start_date,$end_date,$date_served,$shopid,$days]);
          echo "<div class='row justify-content-center' style='padding-top: 100px;'>
              <div class='col-md-7 col-md-offset-5'>
                  <div class='card'>
                      <div class='card-header' style='color: #b21f2d'>
                          <strong>Package Update Successfully!!!</strong>
                      </div>
                  </div>
              </div>
          </div>";
          return view('updates');
        } else {
          $minus1 = DB::select("SELECT * FROM my_package WHERE user_id = '".$base_client."'  and left_puncture = 0 or left_alignment = 0 ORDER BY id DESC LIMIT 1");
          if (count($minus1) >= 1) {
            echo "<div class='row justify-content-center' style='padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>Package Expired!!!</strong>
                        </div>
                    </div>
                </div>
            </div>";
          } else {
            echo "<div class='row justify-content-center' style='padding-top: 100px;'>
                <div class='col-md-7 col-md-offset-5'>
                    <div class='card'>
                        <div class='card-header' style='color: #b21f2d'>
                            <strong>Package Limit Exceeds!!!</strong>
                        </div>
                    </div>
                </div>
            </div>";
          }
        }
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
