<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;
use App\roomReservation;

class bookingController extends Controller
{
  public function index()
  {
      $RoomModel = new Room;
      $RoomReservationModel = new RoomReservation;

      $res = $RoomModel->read_all();
      $update = $RoomReservationModel->update_by_time('2018-01-30 19:00:00');
      return view('booking', ['room_recs' => $res]);
  }
}
