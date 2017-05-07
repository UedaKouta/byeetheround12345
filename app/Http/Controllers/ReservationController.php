<?php
namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;
use App\RoomReservation;
use Log;
use \DateTime;


class ReservationController extends Controller
{
  public function index()
  {
      $request = new Request;
      $RoomModel = new Room;
      $RoomReservationModel = new RoomReservation;

      $res = $RoomModel->read_all();
    /*  $update = $RoomReservationModel->update_by_time('2018-01-30 19:00:00');*/
      $rsvsdate = Request::input('rsv-date');
      $cal_from_date = new DateTime($rsvsdate);
      $rsvedate = $cal_from_date->modify('+1 hours')->format('Ymdhis');

      $attribute = [
        'room_recs' => $res,
        'sdate' => $rsvsdate,
        'edate' => $rsvedate
      ];

      /*$insert = $RoomReservationModel->insert_table('ゴミデータ','2018-01-30 19:00:00','2018-01-30 20:00:00','ゴミ上田','ウエダコウタ','いろいろ会議');*/
        return view('reservation',$attribute);
  }

  public function foo()
  {
          $request = new Request;
          $RoomModel = new Room;
          $RoomReservationModel = new RoomReservation;
          $res = $RoomModel->read_all();
          $usernamekj = Request::input('namekj');
          $contents = Request::input('contents');

          /*使っていない。あとでタイトルもテーブルに登録できるようにする
          $title = Request::input('title');*/

          $room = Request::input('rname');
          $starttime = Request::input('starttime');
          $endtime = Request::input('endtime');
          Log::error("room_null??????" . $room);
      /*    Log::error("room_null??????" . Request::all());*/

         /*配列格納*/
          $indatas = array($room,$starttime,$endtime,$usernamekj,'ウエダコウタ',$contents);

      $insert = $RoomReservationModel->insert_table($indatas);
      header('location: http://byeetheround12345.dev/calendar');
      exit();
  }
}
