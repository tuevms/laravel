<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\blogs;
use Illuminate\Http\Request;
use Cart;
use Session;
use Event;
use App\Events\SomeEvent;
use Mail;

class TestControllers extends Controller {

  /**
   * Показать профиль данного пользователя.
   *
   * @param  int  $id
   * @return Response
   */
  public $result1;
  public $result;

public function __construct(Request $request)
    {
        $this->result1 = $request->test;
    }


  public function index(Request $request)
  {
   

   $this->result = $request->test;
   
   EVENT::listen('App\Events\SomeEvent', function ($message) {
    dd($message->res->result1);
        $message->res->result1="1";
    });
   if ($this->result == 2222) {
     $this->result = 'ДАааааааааааааааа';
     EVENT::fire(new SomeEvent(new TestControllers($request)));
   }
echo $this->result1;
   return view('test', ['test'=>$this->result]);
  }

  public function form(Request $request)
  {
       $value=$request->session()->all();
    return 11;
  }

}