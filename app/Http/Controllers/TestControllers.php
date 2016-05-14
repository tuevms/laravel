<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\blogs;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestControllers extends Controller {

  /**
   * Показать профиль данного пользователя.
   *
   * @param  int  $id
   * @return Response
   */
  public function index()
  {
    $results = blogs::all();
   // dd($arr[1]);
$toc = csrf_token();
   return view('test1', ['page' => $results,'toc' => $toc]);
  }

  public function form(Request $request)
  {
    return $request['title'];
  }

}