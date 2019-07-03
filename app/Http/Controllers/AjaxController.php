<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AjaxController extends Controller
{
  public function index(Request $req) {
    $msg = DB::select("SELECT * FROM shop_details");
    return view('welcome', compact('msg'));
  }
}
