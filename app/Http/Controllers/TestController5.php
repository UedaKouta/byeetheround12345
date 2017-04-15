<?php
namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController5 extends Controller
{
   public function foo2()
   {
       $post_param2 = Request::input('post_param2');
       return view('test-blade', ['message' => $post_param2]);
   }
}
