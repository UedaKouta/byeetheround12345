<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class bookingController extends Controller
{
  public function index()
  {
      return view('booking');
  }
}
