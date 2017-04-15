<?php
namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController6 extends Controller
{
   public function foo3()
   {
       $post_param3 = Request::input('post_param3');
       return view('test-blade', ['message' => $post_param3]);
   }
}
