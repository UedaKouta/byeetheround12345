<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\roomReservation;
use \DateTime;

class CalendarController extends Controller
{
  public function index()
  {
    $cal_from_date = new DateTime();
    $cal_to_date = (new DateTime())->modify('+7 days');
    $roomReservationModel = new RoomReservation;
    
    $db_res = $roomReservationModel->read_date_range($cal_from_date, $cal_to_date->modify('+600 days'));
    $res = $db_res->keyBy(
      function ($item) {
        return $item['roomname'] . '#' . $item['starttime'];
      }
    );
    $res2 = $db_res->groupBy('roomname');
    $res3 = $res2->transform(function ($value, $key) {
      return $value->keyBy('starttime');
    });
    
    
    
    $attribute = [
      'cal_from_date' => $cal_from_date,
      'cal_days_range' => 7,
      'rsv_list' => $res3
    ];
    return view('calendar', $attribute);
  }
}
