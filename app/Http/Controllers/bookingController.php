<?php
namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;
use App\roomReservation;


class BookingController extends Controller
{
  public function index()
  {
      $RoomModel = new Room;
      $RoomReservationModel = new RoomReservation;


      $res = $RoomModel->read_all();
      $update = $RoomReservationModel->update_by_time('2018-01-30 19:00:00');
      /*$insert = $RoomReservationModel->insert_table('ゴミデータ','2018-01-30 19:00:00','2018-01-30 20:00:00','ゴミ上田','ウエダコウタ','いろいろ会議');*/
        return view('booking', ['room_recs' => $res]);
  }

  public function foo()
  {
    $request = new Request;
          $RoomModel = new Room;
          $RoomReservationModel = new RoomReservation;
          $res = $RoomModel->read_all();
          $usernamekj = Request::input('namekj');

      $insert = $RoomReservationModel->insert_table('会議室A','2018-01-30 19:00:00','2018-01-30 20:00:00',$usernamekj,'ウエダコウタ','いろいろ会議');
      return view('booking', ['room_recs' => $res]);
  }
}
