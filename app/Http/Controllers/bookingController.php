<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;

class bookingController extends Controller
{
  public function index()
  {
      $RoomModel = new Room;
      $res = $RoomModel->read_all();
      return view('booking', ['room_recs' => $res]);
  }
}
