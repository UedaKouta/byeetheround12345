<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController2 extends Controller
{
   public function getIndex()
   {
       return view('test-view', ['message' => 'ThankYou!']);
   }
}
