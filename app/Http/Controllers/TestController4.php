<?php
namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController4 extends Controller
{
   public function foo()
   {
       $post_param = Request::input('post_param');
       return view('test-blade', ['message' => $post_param]);
   }
}
