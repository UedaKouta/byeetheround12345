<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RoomReservation;
use \DateTime;

class CalendarController extends Controller
{
  public function index()
  {
    $cal_from_date = new DateTime();
    $cal_to_date = (new DateTime())->modify('+7 days');
    $roomReservationModel = new RoomReservation;

    $db_res = $roomReservationModel->read_date_range($cal_from_date, $cal_to_date);
    
    // 予約のfromを切り捨てた時刻の設定
    $db_res->transform(function ($item) {
      $round_off_starttime = new DateTime($item['starttime']);
      $item['round_off_starttime'] = $round_off_starttime->format('Y-m-d H:00:00');
      return $item;
    });

    $res = $db_res->groupBy('roomname');
    $rsv_list = $res->transform(function ($value, $key) {
      return $value->keyBy('round_off_starttime');
    });
    
    
    
    $attribute = [
      'cal_from_date' => $cal_from_date,
      'cal_days_range' => 7,
      'rsv_list' => $rsv_list
    ];
    return view('calendar', $attribute);
  }
}
