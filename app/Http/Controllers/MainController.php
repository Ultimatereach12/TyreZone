<?php

namespace App\Http\Controllers;

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
          $login_details = DB::select('select * from create_user where mobile = ? and password = ? and user_type = ?', [$mobile, $password, 1]);
          count($login_details);
          if (count($login_details) >= 1){
            return redirect('/superadmin');
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
          $login_details_admin = DB::select('select * from create_user where mobile = ? and password = ? and user_type = ?  and alive = ?', [$mobile, $password, 2, 1]);
          count($login_details);
          if (count($login_details) >= 1){
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
    function home(){
      return view('home');
    }
    function createadmin(Request $req){
      if($req->input('login')){
        $userid = $req->input('mobile');
        $name = $req->input('password');
        $mobile = $req->input('mobile');
        $email = $req->input('mobile');
        $password = $req->input('password');

        if ($userid != "" || $name != "" || $mobile != "" || $email != "" || $password != "") {
          $login_details = DB::insert('insert into create_user (user_id,name,mobile,email,password,verified,user_type,alive) values (?,?,?,?,?,?,?,?)', [$mobile, $password, 1]);
          count($login_details);
          if (count($login_details) >= 1){
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
